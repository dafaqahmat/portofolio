<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectsPageController extends Controller
{
    public function index($locale = null)
    {
        $locale = $locale ?: app()->getLocale();
        app()->setLocale(in_array($locale, ['id', 'en', 'ar'], true) ? $locale : 'id');

        $projects = Project::published()->ordered()->get();

        return view('pages.projects.index', compact('projects'));
    }

    public function show($localeOrSlug, $slug = null)
    {
        $locale = $slug === null ? app()->getLocale() : $localeOrSlug;
        $slug = $slug ?? $localeOrSlug;

        app()->setLocale(in_array($locale, ['id', 'en', 'ar'], true) ? $locale : 'id');

        $project = Project::published()->where("slug_{$locale}", $slug)->firstOrFail();

        return view('pages.projects.show', compact('project'));
    }
}
