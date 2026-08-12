@php
    $locale = app()->getLocale();
@endphp

<header
    class="fixed top-0 w-full z-50 border-b border-white/5 bg-[#0E0E11]/70 backdrop-blur-lg animate-fade-in-up stagger-1">
    <nav class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between relative">
        <a href="{{ localized_url('home') }}"
            class="text-bright font-semibold tracking-tight text-lg hover:text-white transition-colors">Dafa'</a>

        <div class="flex items-center gap-6">
            <div class="hidden md:flex items-center gap-8 text-sm font-medium text-dim">
                <a href="{{ localized_url('home') }}" class="hover:text-white transition-colors">{{ __('Home') }}</a>
                <a href="{{ localized_url('experience') }}"
                    class="hover:text-white transition-colors">{{ __('Pengalaman') }}</a>
                <a href="{{ localized_url('projects') }}"
                    class="hover:text-white transition-colors">{{ __('Project') }}</a>
                <a href="{{ localized_url('academic') }}" class="hover:text-white transition-colors">{{ __('Akademik') }}</a>
                <a href="{{ localized_url('contact') }}" class="hover:text-white transition-colors">{{ __('Kontak') }}</a>
            </div>

            <div class="flex items-center gap-4 md:border-s md:border-white/20 md:ps-6">

                <div class="flex items-center gap-3" dir="ltr">
                    @if($locale !== 'id')
                        <a href="{{ localized_current_url('id') }}" class="hover:scale-110 transition-transform" title="Indonesian">
                            <img src="https://flagcdn.com/w20/id.png" alt="ID" width="20" height="15" decoding="async"
                                class="w-5 h-auto rounded-sm opacity-80 hover:opacity-100">
                        </a>
                    @endif
                    @if($locale !== 'en')
                        <a href="{{ localized_current_url('en') }}" class="hover:scale-110 transition-transform" title="English">
                            <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" decoding="async"
                                class="w-5 h-auto rounded-sm opacity-80 hover:opacity-100">
                        </a>
                    @endif
                    @if($locale !== 'ar')
                        <a href="{{ localized_current_url('ar') }}" class="hover:scale-110 transition-transform" title="Arabic">
                            <img src="https://flagcdn.com/w20/sa.png" alt="AR" width="20" height="15" decoding="async"
                                class="w-5 h-auto rounded-sm opacity-80 hover:opacity-100">
                        </a>
                    @endif
                </div>

                <button id="mobile-menu-btn" aria-label="{{ __('Menu') }}"
                    class="md:hidden text-dim hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <div id="mobile-menu"
        class="hidden md:hidden border-t border-white/5 bg-[#0E0E11]/95 backdrop-blur-xl absolute top-full left-0 w-full flex-col p-6 space-y-4 shadow-2xl">
        <a href="{{ localized_url('home') }}"
            class="mobile-link text-dim hover:text-white font-medium transition-colors">{{ __('Home') }}</a>
        <a href="{{ localized_url('experience') }}"
            class="mobile-link text-dim hover:text-white font-medium transition-colors">{{ __('Pengalaman') }}</a>
        <a href="{{ localized_url('projects') }}"
            class="mobile-link text-dim hover:text-white font-medium transition-colors">{{ __('Project') }}</a>
        <a href="{{ localized_url('academic') }}"
            class="mobile-link text-dim hover:text-white font-medium transition-colors">{{ __('Akademik') }}</a>
        <a href="{{ localized_url('contact') }}"
            class="mobile-link text-dim hover:text-white font-medium transition-colors">{{ __('Kontak') }}</a>
    </div>
</header>
