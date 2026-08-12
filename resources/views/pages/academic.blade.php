<x-layouts.app :title="__('Akademik') . ' - Dafa\' Ahmat Setyo Nugroho'" :description="__('Riwayat Akademik & Sertifikasi Dafa\' Ahmat Setyo Nugroho.')">

    <section id="{{ __('akademik') }}" class="reveal space-y-10">
        <div class="space-y-3 max-w-xl">
            <h2 class="text-2xl md:text-3xl font-bold text-bright tracking-tight">{{ __('Akademik & Sertifikasi') }}
            </h2>
            <p class="text-dim leading-relaxed">
                {{ __('Riwayat pendidikan formal, validasi kompetensi, dan pengalaman organisasi.') }}</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            <div class="space-y-6 flex flex-col">
                <article class="bento-card p-8 group">
                    <div class="spotlight"></div>
                    <div class="relative z-20 space-y-5">
                        <h3 class="text-xl font-semibold text-bright flex items-center gap-2">
                            <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                </path>
                            </svg>
                            {{ __('Pendidikan') }}
                        </h3>
                        <div class="border-l-2 border-white/10 pl-4 space-y-1">
                            <h4 class="text-white font-medium">D3 - Politeknik Negeri Malang</h4>
                            <p class="text-dim text-sm">{{ __('Manajemen Informatika (IPK: 3.53)') }}</p>
                            <p class="text-xs text-white/40">2022 - 2025 · <a
                                    href="https://drive.google.com/file/d/1zFlDgUktvEm-il_Zh1rP7l6V-0jRTcBG/view?usp=drive_link"
                                    target="_blank" rel="noopener noreferrer"
                                    class="text-purple-400/70 hover:text-purple-400 hover:underline transition-colors">Lihat
                                    ↗</a></p>
                        </div>
                    </div>
                </article>

                <article class="bento-card p-8 group">
                    <div class="spotlight"></div>
                    <div class="relative z-20 space-y-5">
                        <h3 class="text-xl font-semibold text-bright flex items-center gap-2">
                            <svg class="w-5 h-5 text-indigo-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                                </path>
                            </svg>
                            {{ __('Sertifikasi') }}
                        </h3>
                        <div class="space-y-6">
                            <div class="border-l-2 border-indigo-500/30 pl-4 space-y-1">
                                <h4 class="text-white font-medium text-sm leading-snug">
                                    {{ __('Sertifikat Kompetensi Pemrograman Software Komputer') }}</h4>
                                <p class="text-dim text-xs">LSP Politeknik Negeri Malang</p>
                                <p class="text-xs text-white/40">Sep 2024 - Sep 2027 · <a
                                        href="https://drive.google.com/file/d/1nyMJyPKvRd_i_rFi7lFUeB1ffKJFl-ZQ/view?usp=drive_link"
                                        target="_blank" rel="noopener noreferrer"
                                        class="text-indigo-400/70 hover:text-indigo-400 hover:underline transition-colors">Lihat
                                        Sertifikat ↗</a></p>
                            </div>
                            <div class="border-l-2 border-indigo-500/30 pl-4 space-y-1">
                                <h4 class="text-white font-medium text-sm">MikroTik MTCNA 2023</h4>
                                <p class="text-dim text-xs">MikroTik SIA</p>
                                <p class="text-xs text-white/40">Okt 2023 - Okt 2026 · <a
                                        href="https://drive.google.com/file/d/1vyuUNAWzbROP_idisleBCqigZXyDWW9f/view?usp=sharing"
                                        target="_blank" rel="noopener noreferrer"
                                        class="text-indigo-400/70 hover:text-indigo-400 hover:underline transition-colors">Lihat
                                        Sertifikat ↗</a></p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <article class="bento-card p-8 group h-full">
                <div class="spotlight"></div>
                <div class="relative z-20 space-y-6">
                    <h3 class="text-xl font-semibold text-bright flex items-center gap-2">
                        <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                            </path>
                        </svg>
                        {{ __('Pengalaman Organisasi') }}
                    </h3>
                    <ul class="space-y-5">
                        <li class="flex gap-4 items-start">
                            <div
                                class="w-2 h-2 mt-2 rounded-full bg-yellow-500/60 flex-shrink-0 shadow-[0_0_8px_rgba(234,179,8,0.5)]">
                            </div>
                            <div>
                                <p class="text-white text-sm font-medium leading-relaxed">
                                    {{ __('Koordinator Sie Perlengkapan Kegiatan Mentoring Keagamaan') }}</p>
                                <p class="text-xs text-dim mt-1">2024 · <a
                                        href="https://drive.google.com/file/d/1Q-hM4q4nmkeQETorwZLCeSNgJxADEVMS/view?usp=drive_link"
                                        target="_blank" rel="noopener noreferrer"
                                        class="text-yellow-400/70 hover:text-yellow-400 hover:underline transition-colors">Lihat
                                        Sertifikat ↗</a></p>
                            </div>
                        </li>
                        <li class="flex gap-4 items-start">
                            <div
                                class="w-2 h-2 mt-2 rounded-full bg-emerald-500/60 flex-shrink-0 shadow-[0_0_8px_rgba(16,185,129,0.5)]">
                            </div>
                            <div>
                                <p class="text-white text-sm font-medium leading-relaxed">
                                    {{ __('CO Sie Acara – Sidang AD/ART UKM Kerohanian') }}</p>
                                <p class="text-xs text-dim mt-1">2024 · <a
                                        href="https://drive.google.com/file/d/1GMUr9CBw6YJzNj6PdDyGq2lLzlSQ2djA/view?usp=drive_link"
                                        target="_blank" rel="noopener noreferrer"
                                        class="text-emerald-400/70 hover:text-emerald-400 hover:underline transition-colors">Lihat
                                        Sertifikat ↗</a></p>
                            </div>
                        </li>
                        <li class="flex gap-4 items-start">
                            <div
                                class="w-2 h-2 mt-2 rounded-full bg-blue-500/60 flex-shrink-0 shadow-[0_0_8px_rgba(59,130,246,0.5)]">
                            </div>
                            <div>
                                <p class="text-white text-sm font-medium leading-relaxed">
                                    {{ __('Ketua Pelaksana Kegiatan Maulid Nabi Muhammad SAW 1445 H') }}</p>
                                <p class="text-xs text-dim mt-1">2023 · <a
                                        href="https://drive.google.com/file/d/1Dw0wRX3G0HDerjDnU46ovn-9M99cHtC8/view?usp=drive_link"
                                        target="_blank" rel="noopener noreferrer"
                                        class="text-blue-400/70 hover:text-blue-400 hover:underline transition-colors">Lihat
                                        Sertifikat ↗</a></p>
                            </div>
                        </li>
                        <li class="flex gap-4 items-start">
                            <div
                                class="w-2 h-2 mt-2 rounded-full bg-orange-500/60 flex-shrink-0 shadow-[0_0_8px_rgba(249,115,22,0.5)]">
                            </div>
                            <div>
                                <p class="text-white text-sm font-medium leading-relaxed">
                                    {{ __('CO Humas – Open Recruitment Anggota Baru UKM Kerohanian') }}</p>
                                <p class="text-xs text-dim mt-1">2023 · <a
                                        href="https://drive.google.com/file/d/1rN2YtN-d6VbvTSP20vjEm_jtqYfFEeQ1/view?usp=drive_link"
                                        target="_blank" rel="noopener noreferrer"
                                        class="text-orange-400/70 hover:text-orange-400 hover:underline transition-colors">Lihat
                                        Sertifikat ↗</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </article>
        </div>
    </section>

</x-layouts.app>
