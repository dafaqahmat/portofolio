@props(['title' => null, 'description' => null])

@php
    $locale = app()->getLocale();
    $localePrefix = $locale === 'id' ? '' : $locale;
    
    $seoTitle = $title ?? __("Dafa' Ahmat Setyo Nugroho - Software Developer");
    $seoDescription = $description ?? __("Portofolio Dafa' Ahmat Setyo Nugroho. Lulusan Politeknik Negeri Malang, Software Developer, Backend Engineer, Laravel Developer.");
    
    $locales = ['id' => '', 'en' => '/en', 'ar' => '/ar'];
    $baseUrl = config('app.url');
@endphp

<!DOCTYPE html>
<html lang="{{ $locale }}" dir="{{ $locale === 'ar' ? 'rtl' : 'ltr' }}" class="scroll-smooth">

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

    <title>{{ $seoTitle }}</title>
    <link rel="icon" type="image/png" href="{{ asset('foto-dafa.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('foto-dafa.png') }}">
    <meta name="description" content="{{ $seoDescription }}">
    <meta name="keywords"
        content="Software Developer, Backend Engineer, Laravel Developer, Dafa Ahmat Setyo Nugroho, Dafa, Web Developer, Kediri">
    <meta name="author" content="Dafa' Ahmat Setyo Nugroho">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:title" content="{{ $seoTitle }}">
    <meta property="og:description" content="{{ $seoDescription }}">
    <meta property="og:image" content="{{ asset('foto-dafa.png') }}">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ request()->url() }}">
    <meta property="twitter:title" content="{{ $seoTitle }}">
    <meta property="twitter:description" content="{{ $seoDescription }}">
    <meta property="twitter:image" content="{{ asset('foto-dafa.png') }}">

    <link rel="canonical" href="{{ request()->url() }}">

    @foreach($locales as $loc => $prefix)
        <link rel="alternate" hreflang="{{ $loc }}" href="{{ localized_current_url($loc) }}">
    @endforeach
    <link rel="alternate" hreflang="x-default" href="{{ $baseUrl . '/' }}">

    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Person",
        "name": "Dafa' Ahmat Setyo Nugroho",
        "url": "{{ $baseUrl }}",
        "image": "{{ asset('foto-dafa.png') }}",
        "jobTitle": "Software Developer",
        "description": "{{ $seoDescription }}",
        "email": "dafaqahmat57@gmail.com",
        "sameAs": [
            "https://www.linkedin.com/in/dafa-ahmat-setyo-nugroho/",
            "https://github.com/dafaqahmat/"
        ]
    }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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

        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fade-in-up 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        .stagger-1 { animation-delay: 0.1s; opacity: 0; }
        .stagger-2 { animation-delay: 0.2s; opacity: 0; }
        .stagger-3 { animation-delay: 0.3s; opacity: 0; }
        .stagger-4 { animation-delay: 0.4s; opacity: 0; }
        .stagger-5 { animation-delay: 0.5s; opacity: 0; }

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

        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #0E0E11; }
        ::-webkit-scrollbar-thumb { background: rgba(255, 255, 255, 0.2); border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: rgba(255, 255, 255, 0.3); }

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

    @stack('styles')
</head>

<body class="selection:bg-white/20 selection:text-white">

    <x-header />

    <main class="max-w-6xl mx-auto px-6 pt-28 md:pt-40 pb-24 space-y-28 md:space-y-40">
        {{ $slot }}
    </main>

    <x-footer />

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
            if (e.target === modal || e.target === modalContent) closeModal();
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
            if (e.key === 'Escape') closeModal();
            else if (e.key === 'ArrowRight') nextImage();
            else if (e.key === 'ArrowLeft') prevImage();
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

            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target);
                    }
                });
            }, { 
                threshold: 0.01,
                rootMargin: "0px 0px -20px 0px"
            });

            document.querySelectorAll('.reveal').forEach(el => {
                const rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom >= 0) {
                    el.classList.add('active');
                } else {
                    revealObserver.observe(el);
                }
            });

            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileLinks = document.querySelectorAll('.mobile-link');

            if (mobileMenuBtn) {
                mobileMenuBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                    mobileMenu.classList.toggle('flex');
                });
            }

            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    mobileMenu.classList.remove('flex');
                });
            });
        });
    </script>

    @stack('scripts')
</body>

</html>
