<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                        @csrf
                        @method('PUT')

                        <div class="space-y-6">
                            <h3 class="text-lg font-medium text-gray-900 border-b pb-2">{{ __('Indonesian') }}</h3>
                            <div>
                                <x-input-label for="title_id" :value="__('Title (ID)')" />
                                <x-text-input id="title_id" name="title_id" type="text" class="mt-1 block w-full"
                                    :value="old('title_id', $project->title_id)" required />
                                <x-input-error :messages="$errors->get('title_id')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="description_id" :value="__('Description (ID)')" />
                                <textarea id="description_id" name="description_id" rows="4"
                                    class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    required>{{ old('description_id', $project->description_id) }}</textarea>
                                <x-input-error :messages="$errors->get('description_id')" class="mt-2" />
                            </div>
                        </div>

                        <div class="space-y-6">
                            <h3 class="text-lg font-medium text-gray-900 border-b pb-2">{{ __('English') }}</h3>
                            <div>
                                <x-input-label for="title_en" :value="__('Title (EN)')" />
                                <x-text-input id="title_en" name="title_en" type="text" class="mt-1 block w-full"
                                    :value="old('title_en', $project->title_en)" required />
                                <x-input-error :messages="$errors->get('title_en')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="description_en" :value="__('Description (EN)')" />
                                <textarea id="description_en" name="description_en" rows="4"
                                    class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    required>{{ old('description_en', $project->description_en) }}</textarea>
                                <x-input-error :messages="$errors->get('description_en')" class="mt-2" />
                            </div>
                        </div>

                        <div class="space-y-6">
                            <h3 class="text-lg font-medium text-gray-900 border-b pb-2">{{ __('Arabic') }}</h3>
                            <div>
                                <x-input-label for="title_ar" :value="__('Title (AR)')" />
                                <x-text-input id="title_ar" name="title_ar" type="text" class="mt-1 block w-full"
                                    :value="old('title_ar', $project->title_ar)" required />
                                <x-input-error :messages="$errors->get('title_ar')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="description_ar" :value="__('Description (AR)')" />
                                <textarea id="description_ar" name="description_ar" rows="4" dir="rtl"
                                    class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    required>{{ old('description_ar', $project->description_ar) }}</textarea>
                                <x-input-error :messages="$errors->get('description_ar')" class="mt-2" />
                            </div>
                        </div>

                        <div class="space-y-6">
                            <h3 class="text-lg font-medium text-gray-900 border-b pb-2">{{ __('Project Details') }}</h3>
                            
                            <div>
                                <x-input-label for="tech_stack" :value="__('Tech Stack (comma separated)')" />
                                <x-text-input id="tech_stack" name="tech_stack" type="text" class="mt-1 block w-full"
                                    :value="old('tech_stack', implode(', ', is_array($project->tech_stack) ? $project->tech_stack : []))"
                                    placeholder="Laravel, MySQL, Tailwind CSS" />
                                <x-input-error :messages="$errors->get('tech_stack')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="link_demo" :value="__('Demo URL')" />
                                <x-text-input id="link_demo" name="link_demo" type="url" class="mt-1 block w-full"
                                    :value="old('link_demo', $project->link_demo)" placeholder="https://example.com" />
                                <x-input-error :messages="$errors->get('link_demo')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="link_repo" :value="__('Repository URL')" />
                                <x-text-input id="link_repo" name="link_repo" type="url" class="mt-1 block w-full"
                                    :value="old('link_repo', $project->link_repo)" placeholder="https://github.com/..." />
                                <x-input-error :messages="$errors->get('link_repo')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="category" :value="__('Category')" />
                                <select id="category" name="category"
                                    class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                    <option value="web" {{ old('category', $project->category) === 'web' ? 'selected' : '' }}>Web</option>
                                    <option value="mobile" {{ old('category', $project->category) === 'mobile' ? 'selected' : '' }}>Mobile</option>
                                    <option value="other" {{ old('category', $project->category) === 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                                <x-input-error :messages="$errors->get('category')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="order" :value="__('Order')" />
                                <x-text-input id="order" name="order" type="number" class="mt-1 block w-full"
                                    :value="old('order', $project->order)" />
                                <x-input-error :messages="$errors->get('order')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="images" :value="__('Add More Images')" />
                                <input id="images" name="images[]" type="file" multiple accept="image/*"
                                    class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100" />
                                <x-input-error :messages="$errors->get('images')" class="mt-2" />
                            </div>

                            @if(is_array($project->images) && count($project->images) > 0)
                                <div>
                                    <x-input-label :value="__('Current Images')" />
                                    <div class="mt-2 grid grid-cols-2 md:grid-cols-4 gap-4">
                                        @foreach($project->images as $image)
                                            <div class="relative group">
                                                <img src="{{ asset('storage/' . $image) }}" alt="Project image"
                                                    class="w-full h-32 object-cover rounded-lg border">
                                                <button type="button"
                                                    onclick="deleteImage('{{ $project->id }}', '{{ $image }}', this)"
                                                    class="absolute top-1 right-1 bg-red-500 text-white rounded-full p-1 opacity-0 group-hover:opacity-100 transition-opacity">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <div class="flex items-center gap-6">
                                <label class="flex items-center">
                                    <input type="checkbox" name="is_published" value="1"
                                        {{ old('is_published', $project->is_published) ? 'checked' : '' }}
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Published') }}</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="is_featured" value="1"
                                        {{ old('is_featured', $project->is_featured) ? 'checked' : '' }}
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Featured') }}</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Update') }}</x-primary-button>
                            <a href="{{ route('admin.projects.index') }}"
                                class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50">
                                {{ __('Cancel') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        function deleteImage(projectId, imagePath, button) {
            if (!confirm('Are you sure you want to delete this image?')) return;

            fetch('{{ route("admin.projects.delete-image") }}', {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    project_id: projectId,
                    image_path: imagePath
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    button.closest('.relative').remove();
                }
            });
        }
    </script>
    @endpush
</x-app-layout>
