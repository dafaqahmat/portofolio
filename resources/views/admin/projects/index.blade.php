<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between gap-4">
            <h2 class="font-semibold text-xl text-bright leading-tight">
                {{ __('Projects') }}
            </h2>
            <a href="{{ route('admin.projects.create') }}"
                class="inline-flex items-center px-5 py-2.5 bg-[#333335] border border-white/10 rounded-xl font-semibold text-sm text-bright transition-all duration-300 hover:bg-[#444446] hover:border-white/20">
                {{ __('Add Project') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-4 bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 px-4 py-3 rounded-xl">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bento-card overflow-hidden">
                <div class="p-6">
                    @if($projects->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-white/10">
                                <thead class="bg-white/5">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-dim uppercase tracking-wider">
                                            {{ __('Order') }}
                                        </th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-dim uppercase tracking-wider">
                                            {{ __('Title (ID)') }}
                                        </th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-dim uppercase tracking-wider">
                                            {{ __('Category') }}
                                        </th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-dim uppercase tracking-wider">
                                            {{ __('Status') }}
                                        </th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-dim uppercase tracking-wider">
                                            {{ __('Featured') }}
                                        </th>
                                        <th class="px-6 py-3 text-right text-xs font-medium text-dim uppercase tracking-wider">
                                            {{ __('Actions') }}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-white/5">
                                    @foreach($projects as $project)
                                        <tr class="hover:bg-white/5 transition-colors">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-dim">
                                                {{ $project->order }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-bright">
                                                {{ $project->title_id }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-dim capitalize">
                                                {{ $project->category }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                @if($project->is_published)
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-emerald-500/10 text-emerald-400">
                                                        {{ __('Published') }}
                                                    </span>
                                                @else
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-white/10 text-dim">
                                                        {{ __('Draft') }}
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                @if($project->is_featured)
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-500/10 text-yellow-400">
                                                        {{ __('Featured') }}
                                                    </span>
                                                @else
                                                    <span class="text-dim text-sm">-</span>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="{{ route('admin.projects.edit', $project) }}"
                                                    class="text-emerald-400 hover:text-emerald-300 mr-4">
                                                    {{ __('Edit') }}
                                                </a>
                                                <form action="{{ route('admin.projects.destroy', $project) }}" method="POST"
                                                    class="inline" onsubmit="return confirm('{{ __('Are you sure?') }}')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-400 hover:text-red-300">
                                                        {{ __('Delete') }}
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="text-center py-12">
                            <svg class="mx-auto h-12 w-12 text-dim" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                                </path>
                            </svg>
                            <h3 class="mt-2 text-sm font-medium text-bright">{{ __('No projects') }}</h3>
                            <p class="mt-1 text-sm text-dim">{{ __('Get started by creating a new project.') }}</p>
                            <div class="mt-6">
                                <a href="{{ route('admin.projects.create') }}"
                                    class="inline-flex items-center px-5 py-2.5 bg-[#333335] border border-white/10 rounded-xl font-semibold text-sm text-bright transition-all duration-300 hover:bg-[#444446] hover:border-white/20">
                                    {{ __('Add Project') }}
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>