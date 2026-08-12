<x-layouts.app :title="__('Tentang') . ' - Dafa\' Ahmat Setyo Nugroho'" :description="__('Tentang Dafa\' Ahmat Setyo Nugroho - Software Developer dari Kediri.')">

    <section class="reveal space-y-10">
        <div class="space-y-3 max-w-xl">
            <h2 class="text-2xl md:text-3xl font-bold text-bright tracking-tight">{{ __('Tentang Saya') }}</h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <div class="space-y-6">
                <p class="text-dim leading-relaxed">
                    {{ __('Lulusan Politeknik Negeri Malang dengan fokus pada pengembangan aplikasi. Memiliki pemahaman praktis dalam mengonfigurasi server untuk kebutuhan perilisan aplikasi. Berkomitmen bekerja penuh tanggung jawab dan antusias mempelajari teknologi terkini seperti AI guna mendukung hasil optimal.') }}
                </p>
                <p class="text-dim leading-relaxed">
                    {{ __('Saya memiliki pengalaman dalam pengembangan web menggunakan Laravel, pengelolaan server Linux, dan konfigurasi DNS. Selain itu, saya juga tertarik dengan pengembangan mobile dan pemanfaatan tools AI untuk efisiensi kode.') }}
                </p>
            </div>

            <div class="space-y-6">
                <h3 class="text-xl font-semibold text-bright">{{ __('Informasi Personal') }}</h3>
                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-emerald-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <div>
                            <p class="text-bright font-medium">{{ __('Lokasi') }}</p>
                            <p class="text-dim text-sm">Kediri, Jawa Timur, Indonesia</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-blue-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <div>
                            <p class="text-bright font-medium">Email</p>
                            <p class="text-dim text-sm">dafaqahmat57@gmail.com</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-purple-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        </svg>
                        <div>
                            <p class="text-bright font-medium">{{ __('Pendidikan') }}</p>
                            <p class="text-dim text-sm">{{ __('D3 - Politeknik Negeri Malang') }}</p>
                            <p class="text-dim text-sm">{{ __('Manajemen Informatika (IPK: 3.53)') }}</p>
                        </div>
                    </div>
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

</x-layouts.app>
