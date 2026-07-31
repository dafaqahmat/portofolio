<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" class="scroll-smooth">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-J5MLDNK0E7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-J5MLDNK0E7');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>{{ __("Dafa' Ahmat Setyo Nugroho - Software Developer") }}</title>
    <link rel="icon" type="image/png" href="{{ asset('foto-dafa.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('foto-dafa.png') }}">
    <meta name="description"
        content="{{ __("Portofolio Dafa' Ahmat Setyo Nugroho. Lulusan Politeknik Negeri Malang, Software Developer, Backend Engineer, Laravel Developer.") }}">
    <meta name="keywords"
        content="Software Developer, Backend Engineer, Laravel Developer, Dafa Ahmat Setyo Nugroho, Dafa, Web Developer, Kediri">
    <meta name="author" content="Dafa' Ahmat Setyo Nugroho">


    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:title" content="{{ __("Dafa' Ahmat Setyo Nugroho - Software Developer") }}">
    <meta property="og:description"
        content="{{ __('Lulusan Politeknik Negeri Malang dengan fokus pada pengembangan aplikasi dan konfigurasi server.') }}">
    <meta property="og:image" content="{{ asset('foto-dafa.png') }}">


    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ request()->url() }}">
    <meta property="twitter:title" content="{{ __("Dafa' Ahmat Setyo Nugroho - Software Developer") }}">
    <meta property="twitter:description"
        content="{{ __('Lulusan Politeknik Negeri Malang dengan fokus pada pengembangan aplikasi dan konfigurasi server.') }}">
    <meta property="twitter:image" content="{{ asset('foto-dafa.png') }}">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="preload" as="image" href="{{ asset('foto-dafa.png') }}">


    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <style>
        body {
            background-color: #0E0E11;
            color: rgba(255, 255, 255, 0.9);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }


        .text-bright {
            color: rgba(255, 255, 255, 0.9);
        }

        .text-dim {
            color: rgba(255, 255, 255, 0.6);
        }


        .bento-card {
            background-color: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
            position: relative;
            overflow: hidden;
            border-radius: 1.5rem;
            transition: border-color 0.3s ease;
        }

        .bento-card:hover {
            border-color: rgba(255, 255, 255, 0.2);
        }


        .spotlight {
            position: absolute;
            inset: 0;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.4s ease;
            background: radial-gradient(600px circle at var(--mouse-x, 0) var(--mouse-y, 0),
                    rgba(255, 255, 255, 0.08),
                    transparent 40%);
            z-index: 10;
        }

        .bento-card:hover .spotlight {
            opacity: 1;
        }


        @media (hover: none) and (pointer: coarse) {
            .spotlight {
                opacity: 1;
                background: radial-gradient(circle at 0% 0%,
                        rgba(255, 255, 255, 0.05),
                        transparent 40%);
            }

            .bento-card:hover {
                transform: none;
            }
        }


        .stagger-1 {
            animation-delay: 0.1s;
            opacity: 0;
        }

        .stagger-2 {
            animation-delay: 0.2s;
            opacity: 0;
        }

        .stagger-3 {
            animation-delay: 0.3s;
            opacity: 0;
        }

        .stagger-4 {
            animation-delay: 0.4s;
            opacity: 0;
        }

        .stagger-5 {
            animation-delay: 0.5s;
            opacity: 0;
        }


        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: opacity, transform;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }


        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #0E0E11;
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .photo-strip {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
            gap: 8px;
            margin-top: 16px;
        }

        .photo-strip img {
            width: 100%;
            aspect-ratio: 4/3;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            cursor: pointer;
            transition: transform 0.2s ease, border-color 0.2s ease;
        }

        .photo-strip img:hover {
            transform: scale(1.03);
            border-color: rgba(255, 255, 255, 0.25);
        }
    </style>
</head>

<body class="selection:bg-white/20 selection:text-white">


    <header
        class="fixed top-0 w-full z-50 border-b border-white/5 bg-[#0E0E11]/70 backdrop-blur-lg animate-fade-in-up stagger-1">
        <nav class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between relative">
            <a href="#"
                class="text-bright font-semibold tracking-tight text-lg hover:text-white transition-colors">Dafa'</a>

            <div class="flex items-center gap-6">
                <div class="hidden md:flex items-center gap-8 text-sm font-medium text-dim">
                    <a href="#{{ __('tentang') }}" class="hover:text-white transition-colors">{{ __('Tentang') }}</a>
                    <a href="#{{ __('pengalaman') }}"
                        class="hover:text-white transition-colors">{{ __('Pengalaman') }}</a>
                    <a href="#{{ __('akademik') }}" class="hover:text-white transition-colors">{{ __('Akademik') }}</a>
                    <a href="#{{ __('kontak') }}" class="hover:text-white transition-colors">{{ __('Kontak') }}</a>
                </div>

                <div class="flex items-center gap-4 md:border-s md:border-white/20 md:ps-6">

                    <div class="flex items-center gap-3" dir="ltr">
                        @if(app()->getLocale() !== 'id')
                            <a href="{{ url('/') }}" class="hover:scale-110 transition-transform" title="Indonesian">
                                <img src="https://flagcdn.com/w20/id.png" alt="ID" width="20" height="15" decoding="async"
                                    class="w-5 h-auto rounded-sm opacity-80 hover:opacity-100">
                            </a>
                        @endif
                        @if(app()->getLocale() !== 'en')
                            <a href="{{ url('/en') }}" class="hover:scale-110 transition-transform" title="English">
                                <img src="https://flagcdn.com/w20/gb.png" alt="EN" width="20" height="15" decoding="async"
                                    class="w-5 h-auto rounded-sm opacity-80 hover:opacity-100">
                            </a>
                        @endif
                        @if(app()->getLocale() !== 'ar')
                            <a href="{{ url('/ar') }}" class="hover:scale-110 transition-transform" title="Arabic">
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
            <a href="#{{ __('tentang') }}"
                class="mobile-link text-dim hover:text-white font-medium transition-colors">{{ __('Tentang') }}</a>
            <a href="#{{ __('pengalaman') }}"
                class="mobile-link text-dim hover:text-white font-medium transition-colors">{{ __('Pengalaman') }}</a>
            <a href="#{{ __('akademik') }}"
                class="mobile-link text-dim hover:text-white font-medium transition-colors">{{ __('Akademik') }}</a>
            <a href="#{{ __('kontak') }}"
                class="mobile-link text-dim hover:text-white font-medium transition-colors">{{ __('Kontak') }}</a>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 pt-28 md:pt-40 pb-24 space-y-28 md:space-y-40">


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
                    <a href="#{{ __('kontak') }}"
                        class="px-6 py-3 bg-white text-black font-semibold rounded-lg hover:bg-gray-200 transition-colors text-sm shadow-[0_0_20px_rgba(255,255,255,0.1)]">
                        {{ __('Hubungi Saya') }}
                    </a>
                    <a href="#{{ __('pengalaman') }}"
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
                <span class="px-4 py-2 border border-white/10 bg-white/5 rounded-xl text-sm text-bright font-medium cursor-default">Web Development (PHP, Laravel, Express, Vue)</span>
                <span class="px-4 py-2 border border-white/10 bg-white/5 rounded-xl text-sm text-bright font-medium cursor-default">Mobile Development (Kotlin, Flutter)</span>
                <span class="px-4 py-2 border border-white/10 bg-white/5 rounded-xl text-sm text-bright font-medium cursor-default">Pengelolaan Server (Linux Debian CLI, aaPanel)</span>
                <span class="px-4 py-2 border border-white/10 bg-white/5 rounded-xl text-sm text-bright font-medium cursor-default">Konfigurasi DNS (Cloudflare)</span>
                <span class="px-4 py-2 border border-white/10 bg-white/5 rounded-xl text-sm text-bright font-medium cursor-default">Database Management</span>
                <span class="px-4 py-2 border border-white/10 bg-white/5 rounded-xl text-sm text-bright font-medium cursor-default">Version Control (Git)</span>
                <span class="px-4 py-2 border border-white/10 bg-white/5 rounded-xl text-sm text-bright font-medium cursor-default">Search Engine Optimization (SEO)</span>
                <span class="px-4 py-2 border border-white/10 bg-white/5 rounded-xl text-sm text-bright font-medium cursor-default">Pemanfaatan Tools AI (Efisiensi Kode)</span>
            </div>
        </section>


        <section id="{{ __('pengalaman') }}" class="reveal space-y-10">
            <div class="space-y-3 max-w-xl">
                <h2 class="text-2xl md:text-3xl font-bold text-bright tracking-tight">{{ __('Pengalaman Kerja') }}</h2>
                <p class="text-dim leading-relaxed">
                    {{ __('Implementasi riil pengembangan sistem, pemeliharaan infrastruktur, dan magang profesional.') }}
                </p>
            </div>

            <div class="flex flex-col gap-6">

                @php
                    $polresImages = [
                        ['src' => asset('foto pkl/1.png'), 'alt' => __('Aplikasi Teks ke suara')],
                        ['src' => asset('foto pkl/2.jpg'), 'alt' => __('Kegiatan Praktik Kerja Lapangan di Polres Kediri - Foto 1')],
                        ['src' => asset('foto pkl/3.jpg'), 'alt' => __('Kegiatan Praktik Kerja Lapangan di Polres Kediri - Foto 2')],
                        ['src' => asset('foto pkl/4.jpg'), 'alt' => __('Kegiatan Praktik Kerja Lapangan di Polres Kediri - Foto 3')],
                        ['src' => asset('foto pkl/5.jpg'), 'alt' => __('Kegiatan Praktik Kerja Lapangan di Polres Kediri - Foto 4')]
                    ];
                    $pamsimasImages = [
                        ['src' => asset('foto tugas akhir/1.png'), 'alt' => __('Sistem Informasi Manajemen PAMSIMAS - Foto 1')],
                        ['src' => asset('foto tugas akhir/2.png'), 'alt' => __('Sistem Informasi Manajemen PAMSIMAS - Foto 2')],
                        ['src' => asset('foto tugas akhir/3.png'), 'alt' => __('Sistem Informasi Manajemen PAMSIMAS - Foto 3')],
                        ['src' => asset('foto tugas akhir/4.jpg'), 'alt' => __('Penyerahan Aplikasi Sistem Informasi Manajemen PAMSIMAS')],
                        ['src' => asset('foto tugas akhir/5.jpg'), 'alt' => __('Foto Pamsimas Desa Tenggerlor')]
                    ];
                    $msjImages = [
                        ['src' => asset('foto magang nasional/1.png'), 'alt' => __('Website Profil PT Multi Spunindo Jaya Tbk - Foto 1')],
                        ['src' => asset('foto magang nasional/2.png'), 'alt' => __('Website Profil PT Multi Spunindo Jaya Tbk - Foto 2')],
                        ['src' => asset('foto magang nasional/3.png'), 'alt' => __('Website Profil PT Multi Spunindo Jaya Tbk - Foto 3')],
                        ['src' => asset('foto magang nasional/4.jpeg'), 'alt' => __('Demo Aplikasi')],
                        ['src' => asset('foto magang nasional/5.jpeg'), 'alt' => __('Foto Bersama Batch 3 dan para Mentor')]
                    ];
                @endphp


                <article class="bento-card group p-6 md:p-10">
                    <div class="spotlight"></div>
                    <div class="relative z-20 flex flex-col md:flex-row gap-6 md:gap-8 items-start">
                        <div
                            class="w-16 h-16 md:w-20 md:h-20 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center flex-shrink-0 overflow-hidden">
                            <img src="{{ asset('logo/polres-kediri.png') }}" alt="Polres Kediri Logo"
                                class="w-full h-full object-contain p-2">
                        </div>
                        <div class="space-y-3 w-full">
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-2">
                                <h3 class="text-xl md:text-2xl font-semibold text-bright">Polres Kediri</h3>
                                <span
                                    class="text-xs font-mono text-emerald-400 bg-emerald-400/10 px-3 py-1 rounded-full border border-emerald-400/20 w-fit md:flex-shrink-0">Jun
                                    2024 - Ags 2024</span>
                            </div>
                            <p class="text-sm text-dim font-medium uppercase tracking-wider">
                                {{ __('Praktik Kerja Lapangan (PKL)') }}</p>
                            <p class="text-dim text-sm leading-relaxed">
                                {{ __('Dalam kegiatan PKL di Polres Kediri, saya berkontribusi dalam pengembangan aplikasi Text-to-Speech yang digunakan sebagai sistem pengumuman internal. Selain itu, saya bertugas melakukan pemeliharaan jaringan fisik dasar, seperti crimping kabel LAN dan memastikan konektivitas jaringan pada berbagai perangkat, termasuk menghubungkan CCTV ke dalam jaringan lokal, serta mendata berbagai kebutuhan operasional di Polres Kediri menggunakan Microsoft Office.') }}
                            </p>
                            <div class="photo-strip">
                                @foreach($polresImages as $img)
                                    <img src="{{ $img['src'] }}" alt="{{ $img['alt'] }}" data-images='@json($polresImages)'
                                        data-index="{{ $loop->index }}" loading="lazy" class="cursor-pointer photo-thumb">
                                @endforeach
                            </div>

                        </div>
                    </div>
                </article>


                <article class="bento-card group p-6 md:p-10">
                    <div class="spotlight"></div>
                    <div class="relative z-20 flex flex-col md:flex-row gap-6 md:gap-8 items-start">
                        <div
                            class="w-16 h-16 md:w-20 md:h-20 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center flex-shrink-0 overflow-hidden">
                            <img src="{{ asset('logo/pamsimas.png') }}" alt="PAMSIMAS Logo"
                                class="w-full h-full object-contain p-2">
                        </div>
                        <div class="space-y-3 w-full">
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-2">
                                <h3 class="text-xl md:text-2xl font-semibold text-bright">PAMSIMAS Desa Tenggerlor</h3>
                                <span
                                    class="text-xs font-mono text-blue-400 bg-blue-400/10 px-3 py-1 rounded-full border border-blue-400/20 w-fit md:flex-shrink-0">Jun
                                    2025</span>
                            </div>
                            <p class="text-sm text-dim font-medium uppercase tracking-wider">{{ __('Tugas Akhir') }}</p>
                            <p class="text-dim text-sm leading-relaxed">
                                {{ __('Membangun sistem informasi manajemen PAMSIMAS dengan fitur kalkulasi tagihan air otomatis berdasarkan input manual pembacaan meteran oleh petugas lapangan. Sistem ini dilengkapi dengan panel admin dinamis untuk mengatur variabel biaya seperti tarif bertingkat, denda, dan beban biaya tetap. Selain itu, saya mengembangkan fitur pengaduan pelanggan dengan fasilitas unggah file yang pesannya terintegrasi langsung dengan WhatsApp petugas. Saya juga mengimplementasikan otomatisasi sistem menggunakan Cronjob untuk memperbarui status data secara mandiri dan mengirimkan notifikasi peringatan keterlambatan pembayaran kepada pelanggan melalui WhatsApp.') }}
                            </p>
                            <div class="photo-strip">
                                @foreach($pamsimasImages as $img)
                                    <img src="{{ $img['src'] }}" alt="{{ $img['alt'] }}"
                                        data-images='@json($pamsimasImages)' data-index="{{ $loop->index }}" loading="lazy"
                                        class="cursor-pointer photo-thumb">
                                @endforeach
                            </div>

                        </div>
                    </div>
                </article>


                <article class="bento-card group p-6 md:p-10">
                    <div class="spotlight"></div>
                    <div class="relative z-20 flex flex-col md:flex-row gap-6 md:gap-8 items-start">
                        <div
                            class="w-16 h-16 md:w-20 md:h-20 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center flex-shrink-0 overflow-hidden">
                            <img src="{{ asset('logo/spunindo.png') }}" alt="PT Multi Spunindo Jaya Tbk Logo"
                                class="w-full h-full object-contain p-2">
                        </div>
                        <div class="space-y-3 w-full">
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-2">
                                <h3 class="text-xl md:text-2xl font-semibold text-bright">PT Multi Spunindo Jaya Tbk
                                </h3>
                                <span
                                    class="text-xs font-mono text-orange-400 bg-orange-400/10 px-3 py-1 rounded-full border border-orange-400/20 w-fit md:flex-shrink-0">Des
                                    2025 - Jun 2026</span>
                            </div>
                            <p class="text-sm text-dim font-medium uppercase tracking-wider">{{ __('Magang Nasional') }}
                            </p>
                            <p class="text-dim text-sm leading-relaxed">
                                {{ __('Bertanggung jawab membangun ulang (rebuild) website profil perusahaan dari platform WordPress menjadi aplikasi berbasis Laravel multilingual dengan dukungan tiga bahasa (Indonesia, Inggris, dan Jepang). Pekerjaan ini mencakup penerapan praktik SEO dasar pada tingkat kode dan penyusunan panduan teknis bagi tim pengelola mengenai cara mengintegrasikan Google Analytics serta mendaftarkan domain melalui Google Search Console. Selain itu, saya berkontribusi dalam menambahkan fitur pada aplikasi katering internal perusahaan sesuai arahan mentor, serta bertugas melakukan proses upload dan pembaruan (update) master data pada sistem SAP perusahaan yang meliputi data material, BOM, dan vendor.') }}
                            </p>
                            <div class="photo-strip">
                                @foreach($msjImages as $img)
                                    <img src="{{ $img['src'] }}" alt="{{ $img['alt'] }}" data-images='@json($msjImages)'
                                        data-index="{{ $loop->index }}" loading="lazy" class="cursor-pointer photo-thumb">
                                @endforeach
                            </div>
                        </div>
                    </div>
                </article>

            </div>
        </section>


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
                                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
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

    </main>


    <footer id="kontak" class="border-t border-white/5 bg-[#121212]/30 mt-20">
        <div class="max-w-6xl mx-auto px-6 py-12 flex flex-col md:flex-row justify-between items-center gap-6">

            <div class="space-y-1 text-center md:text-left reveal">
                <p class="text-dim text-sm">Kediri, Indonesia</p>
                <p class="text-dim text-sm mt-2 font-mono">0812-3341-7452</p>
            </div>

            <div class="flex gap-6 reveal">
                <a href="mailto:dafaqahmat57@gmail.com" aria-label="Email"
                    class="text-dim hover:text-white transition-colors p-2 hover:bg-white/5 rounded-lg flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                    <span class="text-sm font-medium hidden sm:block">dafaqahmat57@gmail.com</span>
                </a>
                <a href="https://www.linkedin.com/in/dafa-ahmat-setyo-nugroho/" target="_blank"
                    rel="noopener noreferrer"
                    class="text-dim hover:text-white transition-colors p-2 hover:bg-white/5 rounded-lg">
                    <span class="sr-only">LinkedIn</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            <div class="text-dim text-sm text-center md:text-right reveal mt-4 md:mt-0">
                &copy; 2026 Dafa' Ahmat Setyo Nugroho.<br>
                <span class="text-xs opacity-50">Built with Laravel, HTML, Tailwind & Vanilla JS.</span>
            </div>
        </div>
    </footer>


    <div id="imageModal"
        class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/90 backdrop-blur-md opacity-0 transition-opacity duration-300">


        <button onclick="closeModal()"
            class="absolute top-6 right-6 z-50 text-white/50 hover:text-white bg-white/10 hover:bg-white/20 rounded-full p-2 transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <div class="relative w-full max-w-6xl px-4 md:px-16 flex items-center justify-center h-full" id="modalContent">


            <button onclick="prevImage(event)" id="prevBtn"
                class="absolute left-2 md:left-6 z-50 text-white/50 hover:text-white bg-black/50 hover:bg-black/80 rounded-full p-3 transition-all hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>


            <div class="relative w-full flex flex-col items-center justify-center">
                <img id="modalImage" src="" alt="Popup Image"
                    class="w-auto h-auto max-w-full max-h-[85vh] rounded-xl object-contain shadow-2xl transition-transform duration-300 transform scale-95">


                <div id="imageCounter"
                    class="absolute bottom-4 bg-black/60 backdrop-blur-sm text-white text-sm px-4 py-1.5 rounded-full font-medium tracking-wide hidden">
                    1 / 3
                </div>
            </div>


            <button onclick="nextImage(event)" id="nextBtn"
                class="absolute right-2 md:right-6 z-50 text-white/50 hover:text-white bg-black/50 hover:bg-black/80 rounded-full p-3 transition-all hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

        </div>
    </div>


    <script>
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImage');
        const modalContent = document.getElementById('modalContent');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const imageCounter = document.getElementById('imageCounter');

        let currentImages = [];
        let currentIndex = 0;

        function openModal(images, startIndex) {
            currentImages = Array.isArray(images) ? images : [images];
            currentIndex = (startIndex !== undefined && startIndex >= 0) ? startIndex : 0;

            currentImages.forEach(item => {
                const img = new Image();
                img.src = item.src || item;
            });

            updateModalView();

            modal.classList.remove('hidden');
            modal.classList.add('flex');

            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalImg.classList.remove('scale-95');
                modalImg.classList.add('scale-100');
            }, 10);

            document.body.style.overflow = 'hidden';
        }

        function updateModalView() {
            const item = currentImages[currentIndex];
            modalImg.src = item.src || item;
            modalImg.alt = item.alt || "Popup Image";

            if (currentImages.length > 1) {
                prevBtn.classList.remove('hidden');
                nextBtn.classList.remove('hidden');
                imageCounter.classList.remove('hidden');
                imageCounter.textContent = `${currentIndex + 1} / ${currentImages.length}`;
            } else {
                prevBtn.classList.add('hidden');
                nextBtn.classList.add('hidden');
                imageCounter.classList.add('hidden');
            }
        }

        function nextImage(e) {
            if (e) e.stopPropagation();
            if (currentImages.length <= 1) return;
            currentIndex = (currentIndex + 1) % currentImages.length;
            updateModalView();
        }

        function prevImage(e) {
            if (e) e.stopPropagation();
            if (currentImages.length <= 1) return;
            currentIndex = (currentIndex - 1 + currentImages.length) % currentImages.length;
            updateModalView();
        }

        function closeModal() {
            modal.classList.add('opacity-0');
            modalImg.classList.remove('scale-100');
            modalImg.classList.add('scale-95');

            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                modalImg.src = '';
                currentImages = [];
            }, 300);

            document.body.style.overflow = '';
        }

        modal.addEventListener('click', function (e) {
            if (e.target === modal || e.target === modalContent) {
                closeModal();
            }
        });

        document.addEventListener('click', function (e) {
            const thumb = e.target.closest('.photo-thumb');
            if (thumb) {
                const images = JSON.parse(thumb.dataset.images);
                const index = parseInt(thumb.dataset.index) || 0;
                openModal(images, index);
            }
        });

        document.addEventListener('keydown', function (e) {
            if (modal.classList.contains('hidden')) return;

            if (e.key === 'Escape') {
                closeModal();
            } else if (e.key === 'ArrowRight') {
                nextImage();
            } else if (e.key === 'ArrowLeft') {
                prevImage();
            }
        });

        document.addEventListener('DOMContentLoaded', () => {
            const handleOnMouseMove = e => {
                const { currentTarget: target } = e;
                const rect = target.getBoundingClientRect(),
                    x = e.clientX - rect.left,
                    y = e.clientY - rect.top;

                target.style.setProperty("--mouse-x", `${x}px`);
                target.style.setProperty("--mouse-y", `${y}px`);
            };
            const isTouchDevice = ('ontouchstart' in window) ||
                (navigator.maxTouchPoints > 0) ||
                (navigator.msMaxTouchPoints > 0);

            if (!isTouchDevice) {
                document.querySelectorAll('.bento-card').forEach(card => {
                    card.addEventListener('mousemove', handleOnMouseMove);
                });
            }
            const revealOptions = {
                threshold: 0.15,
                rootMargin: "0px 0px -50px 0px"
            };

            const revealCallback = (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                    }
                });
            };

            const revealObserver = new IntersectionObserver(revealCallback, revealOptions);

            document.querySelectorAll('.reveal').forEach(el => {
                revealObserver.observe(el);
            });
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileLinks = document.querySelectorAll('.mobile-link');

            mobileMenuBtn.addEventListener('click', () => {
                if (mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.remove('hidden');
                    mobileMenu.classList.add('flex');
                } else {
                    mobileMenu.classList.add('hidden');
                    mobileMenu.classList.remove('flex');
                }
            });
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    mobileMenu.classList.remove('flex');
                });
            });

        });
    </script>

</body>

</html>