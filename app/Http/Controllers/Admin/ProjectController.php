<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('order')->orderBy('created_at', 'desc')->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_id' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'description_id' => 'required|string',
            'description_en' => 'required|string',
            'description_ar' => 'required|string',
            'tech_stack' => 'nullable|string',
            'link_demo' => 'nullable|url|max:255',
            'link_repo' => 'nullable|url|max:255',
            'category' => 'required|in:web,mobile,other',
            'order' => 'nullable|integer',
            'is_published' => 'nullable|boolean',
            'is_featured' => 'nullable|boolean',
            'images.*' => 'nullable|image|max:2048',
        ]);

        $validated['slug_id'] = $this->generateUniqueSlug($validated['title_id'], 'id');
        $validated['slug_en'] = $this->generateUniqueSlug($validated['title_en'], 'en');
        $validated['slug_ar'] = $this->generateUniqueSlug($validated['title_ar'], 'ar');

        $validated['tech_stack'] = array_filter(array_map('trim', explode(',', $validated['tech_stack'] ?? '')));
        $validated['is_published'] = $request->has('is_published');
        $validated['is_featured'] = $request->has('is_featured');
        $validated['order'] = $validated['order'] ?? 0;

        $images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('projects', 'public');
                $images[] = $path;
            }
        }
        $validated['images'] = $images;

        Project::create($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title_id' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'description_id' => 'required|string',
            'description_en' => 'required|string',
            'description_ar' => 'required|string',
            'tech_stack' => 'nullable|string',
            'link_demo' => 'nullable|url|max:255',
            'link_repo' => 'nullable|url|max:255',
            'category' => 'required|in:web,mobile,other',
            'order' => 'nullable|integer',
            'is_published' => 'nullable|boolean',
            'is_featured' => 'nullable|boolean',
            'images.*' => 'nullable|image|max:2048',
        ]);

        $validated['slug_id'] = $this->generateUniqueSlug($validated['title_id'], 'id', $project->id);
        $validated['slug_en'] = $this->generateUniqueSlug($validated['title_en'], 'en', $project->id);
        $validated['slug_ar'] = $this->generateUniqueSlug($validated['title_ar'], 'ar', $project->id);

        $validated['tech_stack'] = array_filter(array_map('trim', explode(',', $validated['tech_stack'] ?? '')));
        $validated['is_published'] = $request->has('is_published');
        $validated['is_featured'] = $request->has('is_featured');
        $validated['order'] = $validated['order'] ?? 0;

        if ($request->hasFile('images')) {
            $images = $project->images ?? [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('projects', 'public');
                $images[] = $path;
            }
            $validated['images'] = $images;
        }

        $project->update($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        if ($project->images) {
            foreach ($project->images as $image) {
                Storage::disk('public')->delete($image);
            }
        }

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }

    public function show(Project $project)
    {
        return redirect()->route('admin.projects.edit', $project);
    }

    public function deleteImage(Request $request)
    {
        $project = Project::findOrFail($request->project_id);
        $imagePath = $request->image_path;

        $images = $project->images ?? [];
        $images = array_values(array_filter($images, fn($img) => $img !== $imagePath));

        Storage::disk('public')->delete($imagePath);
        $project->update(['images' => $images]);

        return response()->json(['success' => true]);
    }

    private function generateUniqueSlug(string $title, string $locale, ?int $excludeId = null): string
    {
        $slug = Str::slug($title) ?: $locale . '-' . substr(md5($title), 0, 8);
        $field = "slug_{$locale}";
        $query = Project::where($field, $slug);

        if ($excludeId) {
            $query->where('id', '!=', $excludeId);
        }

        $count = $query->count();
        return $count > 0 ? $slug . '-' . ($count + 1) : $slug;
    }
}
