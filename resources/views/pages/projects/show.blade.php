@php
    $locale = app()->getLocale();
    $prefix = $locale === 'id' ? '' : $locale;
@endphp

<x-layouts.app :title="$project->title . ' - Project'" :description="Str::limit($project->description, 160)">

    <section class="reveal space-y-10">
        <div class="space-y-4">
            <a href="{{ localized_url('projects') }}"
                class="inline-flex items-center gap-2 text-sm text-dim hover:text-white transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                {{ __('Kembali ke Project') }}
            </a>
            
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div class="space-y-2">
                    <div class="flex items-center gap-3">
                        <h2 class="text-2xl md:text-3xl font-bold text-bright tracking-tight">{{ $project->title }}</h2>
                        <span class="text-xs px-3 py-1 rounded-full border border-white/10 bg-white/5 text-dim capitalize">{{ $project->category }}</span>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    @if($project->link_demo)
                        <a href="{{ $project->link_demo }}" target="_blank" rel="noopener noreferrer"
                            class="px-4 py-2 bg-white/5 text-bright border border-white/10 rounded-lg text-sm font-medium hover:bg-white/10 transition-colors">
                            {{ __('Lihat Demo') }} ↗︎
                        </a>
                    @endif
                    @if($project->link_repo)
                        <a href="{{ $project->link_repo }}" target="_blank" rel="noopener noreferrer"
                            class="px-4 py-2 bg-white/5 text-bright border border-white/10 rounded-lg text-sm font-medium hover:bg-white/10 transition-colors">
                            {{ __('Source Code') }} ↗︎
                        </a>
                    @endif
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 space-y-6">
                <div class="bento-card p-6 md:p-8">
                    <div class="spotlight"></div>
                    <div class="relative z-20 flex flex-col md:flex-row gap-6">
                        @if(is_array($project->images) && count($project->images) > 0)
                            <div class="photo-strip flex-shrink-0" style="width: 200px;">
                                @foreach($project->images as $index => $image)
                                    <img src="{{ asset('storage/' . $image) }}" alt="{{ $project->title }} - Image {{ $index + 1 }}"
                                        data-images='@json(collect($project->images)->map(fn($img, $i) => ["src" => asset("storage/" . $img), "alt" => $project->title . " - Image " . ($i + 1)])->toArray())'
                                        data-index="{{ $index }}" loading="lazy" class="cursor-pointer photo-thumb w-full rounded-lg">
                                @endforeach
                            </div>
                        @endif
                        <div class="space-y-4 flex-1">
                            <h3 class="text-xl font-semibold text-bright">{{ __('Deskripsi Project') }}</h3>
                            <p class="text-dim leading-relaxed whitespace-pre-line">{{ $project->description }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                @if(is_array($project->tech_stack) && count($project->tech_stack) > 0)
                    <div class="bento-card p-6">
                        <div class="spotlight"></div>
                        <div class="relative z-20 space-y-4">
                            <h3 class="text-lg font-semibold text-bright">{{ __('Teknologi') }}</h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach($project->tech_stack as $tech)
                                    <span class="px-3 py-1.5 text-sm border border-white/10 bg-white/5 rounded-lg text-bright">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                <div class="bento-card p-6">
                    <div class="spotlight"></div>
                    <div class="relative z-20 space-y-4">
                        <h3 class="text-lg font-semibold text-bright">{{ __('Informasi') }}</h3>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="text-dim text-sm">{{ __('Kategori') }}</span>
                                <span class="text-bright text-sm capitalize">{{ $project->category }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>