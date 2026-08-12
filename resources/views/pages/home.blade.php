<x-layouts.app :title="__('Dafa\' Ahmat Setyo Nugroho - Software Developer')" :description="__('Portofolio Dafa\' Ahmat Setyo Nugroho. Lulusan Politeknik Negeri Malang, Software Developer, Backend Engineer, Laravel Developer.')">

    @php
        $locale = app()->getLocale();
        $prefix = $locale === 'id' ? '' : $locale;
    @endphp

    <section id="{{ __('tentang') }}"
        class="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-16 items-center flex-col-reverse">
        <article class="space-y-8 animate-fade-in-up stagger-2">
            <div
                class="inline-flex items-center space-x-2 px-3 py-1 rounded-full border border-white/10 bg-white/5 text-xs font-medium text-dim">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                <span>Software Developer</span>
            </div>

            <h1
                class="text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight text-bright leading-[1.2] md:leading-[1.1]">
                DAFA' AHMAT SETYO NUGROHO
            </h1>

            <p class="text-base sm:text-lg text-dim leading-relaxed max-w-lg">
                {{ __('Lulusan Politeknik Negeri Malang dengan fokus pada pengembangan aplikasi. Memiliki pemahaman praktis dalam mengonfigurasi server untuk kebutuhan perilisan aplikasi. Berkomitmen bekerja penuh tanggung jawab dan antusias mempelajari teknologi terkini seperti AI guna mendukung hasil optimal.') }}
            </p>

            <div class="flex flex-wrap gap-4 pt-2">
                <a href="{{ localized_url('contact') }}"
                    class="px-6 py-3 bg-white text-black font-semibold rounded-lg hover:bg-gray-200 transition-colors text-sm shadow-[0_0_20px_rgba(255,255,255,0.1)]">
                    {{ __('Hubungi Saya') }}
                </a>
                <a href="{{ localized_url('experience') }}"
                    class="px-6 py-3 border border-white/10 bg-white/5 text-bright font-medium rounded-lg hover:bg-white/10 transition-colors text-sm">
                    {{ __('Lihat Pengalaman') }}
                </a>
            </div>
        </article>

        <div
            class="relative animate-fade-in-up stagger-3 flex justify-center lg:justify-end order-first lg:order-last mb-8 lg:mb-0">
            <div
                class="absolute inset-0 bg-gradient-to-tr from-blue-500/20 to-purple-500/20 blur-3xl rounded-full scale-75 opacity-50">
            </div>
            <div
                class="w-64 h-64 sm:w-72 sm:h-72 md:w-[400px] md:h-[400px] relative rounded-3xl overflow-hidden border border-white/10 group shadow-2xl z-10 bg-[#121212]">
                <img src="{{ asset('foto-dafa.jpg') }}" alt="{{ __('Foto Dafa Ahmat Setyo Nugroho') }}"
                    class="w-full h-full object-cover" fetchpriority="high" decoding="async">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-[#0E0E11] via-transparent to-transparent opacity-80">
                </div>
            </div>
        </div>
    </section>

    <section id="{{ __('teknologi') }}" class="reveal space-y-8">
        <div class="space-y-3 max-w-xl">
            <h2 class="text-2xl md:text-3xl font-bold text-bright tracking-tight">{{ __('Keterampilan Inti') }}</h2>
        </div>
        <div class="flex flex-wrap gap-3">
            <span class="px-4 py-2 border border-white/10 bg-white/5 rounded-xl text-sm text-bright font-medium cursor-default">Web Development</span>
            <span class="px-4 py-2 border border-white/10 bg-white/5 rounded-xl text-sm text-bright font-medium cursor-default">{{ __('Pengelolaan Server (Linux Debian CLI, aaPanel)') }}</span>
            <span class="px-4 py-2 border border-white/10 bg-white/5 rounded-xl text-sm text-bright font-medium cursor-default">{{ __('Konfigurasi DNS (Cloudflare)') }}</span>
            <span class="px-4 py-2 border border-white/10 bg-white/5 rounded-xl text-sm text-bright font-medium cursor-default">Database Management</span>
            <span class="px-4 py-2 border border-white/10 bg-white/5 rounded-xl text-sm text-bright font-medium cursor-default">Version Control (Git)</span>
            <span class="px-4 py-2 border border-white/10 bg-white/5 rounded-xl text-sm text-bright font-medium cursor-default">Mobile Development</span>
            <span class="px-4 py-2 border border-white/10 bg-white/5 rounded-xl text-sm text-bright font-medium cursor-default">Search Engine Optimization (SEO)</span>
            <span class="px-4 py-2 border border-white/10 bg-white/5 rounded-xl text-sm text-bright font-medium cursor-default">{{ __('Pemanfaatan Tools AI (Efisiensi Kode)') }}</span>
        </div>
    </section>

    @if($featuredProjects->count() > 0)
    <section id="projects" class="reveal space-y-10">
        <div class="space-y-3 max-w-xl">
            <h2 class="text-2xl md:text-3xl font-bold text-bright tracking-tight">{{ __('Project Unggulan') }}</h2>
            <p class="text-dim leading-relaxed">
                {{ __('Beberapa project terbaik yang telah saya kerjakan.') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($featuredProjects as $project)
                <article class="bento-card group p-6">
                    <div class="spotlight"></div>
                    <div class="relative z-20 space-y-4">
                        @if(is_array($project->images) && count($project->images) > 0)
                            <div class="w-full h-40 rounded-xl overflow-hidden bg-white/5 border border-white/10">
                                <img src="{{ asset('storage/' . $project->images[0]) }}" alt="{{ $project->title }}"
                                    class="w-full h-full object-cover">
                            </div>
                        @endif
                        <div class="space-y-2">
                            <h3 class="text-lg font-semibold text-bright">{{ $project->title }}</h3>
                            <p class="text-dim text-sm line-clamp-3">{{ $project->description }}</p>
                        </div>
                        @if(is_array($project->tech_stack) && count($project->tech_stack) > 0)
                            <div class="flex flex-wrap gap-2">
                                @foreach(array_slice($project->tech_stack, 0, 3) as $tech)
                                    <span class="px-2 py-1 text-xs border border-white/10 bg-white/5 rounded-md text-dim">{{ $tech }}</span>
                                @endforeach
                            </div>
                        @endif
                        <a href="{{ localized_url('projects', null, $project->slug) }}"
                            class="group/btn relative inline-flex w-full items-center justify-center gap-2 overflow-hidden rounded-xl bg-gradient-to-r from-emerald-500 to-teal-500 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-emerald-500/20 transition-all duration-300 hover:shadow-xl hover:shadow-emerald-500/30 hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-emerald-400 focus:ring-offset-2 focus:ring-offset-[#0E0E11]">
                            <span class="relative z-10">{{ __('Lihat Detail') }}</span>
                            <svg class="relative z-10 h-5 w-5 transition-transform duration-300 group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                            <div class="absolute inset-0 -translate-x-full bg-gradient-to-r from-teal-400 to-emerald-400 transition-transform duration-300 group-hover/btn:translate-x-0"></div>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="text-center">
            <a href="{{ localized_url('projects') }}"
                class="px-6 py-3 border border-white/10 bg-white/5 text-bright font-medium rounded-lg hover:bg-white/10 transition-colors text-sm inline-block">
                {{ __('Lihat Semua Project') }}
            </a>
        </div>
    </section>
    @endif

</x-layouts.app>
