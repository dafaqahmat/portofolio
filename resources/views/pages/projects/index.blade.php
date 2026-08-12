@php
    $locale = app()->getLocale();
    $prefix = $locale === 'id' ? '' : $locale;
@endphp

<x-layouts.app :title="__('Project') . ' - Dafa\' Ahmat Setyo Nugroho'" :description="__('Project-project yang telah dikerjakan oleh Dafa\' Ahmat Setyo Nugroho.')">

    <section class="reveal space-y-10">
        <div class="space-y-3 max-w-xl">
            <h2 class="text-2xl md:text-3xl font-bold text-bright tracking-tight">{{ __('Project Saya') }}</h2>
            <p class="text-dim leading-relaxed">
                {{ __('Kumpulan project yang telah saya kerjakan, mulai dari web development, mobile development, hingga project lainnya.') }}
            </p>
        </div>

        @if($projects->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($projects as $project)
                    <article class="bento-card group p-6">
                        <div class="spotlight"></div>
                        <div class="relative z-20 space-y-4">
                            @if(is_array($project->images) && count($project->images) > 0)
                                <div class="w-full h-40 rounded-xl overflow-hidden bg-white/5 border border-white/10">
                                    <img src="{{ asset('storage/' . $project->images[0]) }}" alt="{{ $project->title }}"
                                        class="w-full h-full object-cover">
                                </div>
                            @else
                                <div class="w-full h-40 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-white/20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            @endif
                            <div class="space-y-2">
                                <div class="flex items-center justify-between gap-2">
                                    <h3 class="text-lg font-semibold text-bright">{{ $project->title }}</h3>
                                    <span class="text-xs px-2 py-1 rounded-full border border-white/10 bg-white/5 text-dim capitalize">{{ $project->category }}</span>
                                </div>
                                <p class="text-dim text-sm line-clamp-3">{{ $project->description }}</p>
                            </div>
                            @if(is_array($project->tech_stack) && count($project->tech_stack) > 0)
                                <div class="flex flex-wrap gap-2">
                                    @foreach(array_slice($project->tech_stack, 0, 4) as $tech)
                                        <span class="px-2 py-1 text-xs border border-white/10 bg-white/5 rounded-md text-dim">{{ $tech }}</span>
                                    @endforeach
                                </div>
                            @endif
                            <div class="flex items-center justify-between pt-2">
                                <a href="{{ localized_url('projects', null, $project->slug) }}"
                                    class="group/btn relative inline-flex w-full items-center justify-center gap-2 overflow-hidden rounded-xl bg-[#333335] border border-white/10 px-5 py-3 text-sm font-semibold text-bright transition-all duration-300 hover:bg-[#444446] hover:border-white/20 focus:outline-none focus:ring-2 focus:ring-white/40 focus:ring-offset-2 focus:ring-offset-[#0E0E11]">
                                    <span class="relative z-10">{{ __('Lihat Detail') }}</span>
                                    <svg class="relative z-10 h-5 w-5 transition-transform duration-300 group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </a>
                                @if($project->link_demo)
                                    <a href="{{ $project->link_demo }}" target="_blank" rel="noopener noreferrer"
                                        class="text-sm text-blue-400 hover:text-blue-300 transition-colors">
                                        {{ __('Demo') }} ↗
                                    </a>
                                @endif
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        @else
            <div class="text-center py-20">
                <svg class="w-16 h-16 mx-auto text-white/20 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                </svg>
                <p class="text-dim">{{ __('Belum ada project yang ditampilkan.') }}</p>
            </div>
        @endif
    </section>

</x-layouts.app>
