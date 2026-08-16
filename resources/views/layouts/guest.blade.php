<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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

        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #0E0E11; }
        ::-webkit-scrollbar-thumb { background: rgba(255, 255, 255, 0.2); border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: rgba(255, 255, 255, 0.3); }
    </style>
</head>
<body class="font-sans antialiased selection:bg-white/20 selection:text-white">

    <div class="min-h-screen flex flex-col sm:justify-center items-center px-6 py-10 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-[#333335]/30 via-transparent to-transparent pointer-events-none"></div>

        <div class="w-full max-w-md animate-fade-in-up relative z-10">
            <div class="flex flex-col items-center mb-8">
                <a href="{{ url('/') }}" class="block">
                    <img src="{{ asset('foto-dafa.png') }}" alt="{{ config('app.name', 'Dafa') }}"
                        class="w-20 h-20 rounded-2xl object-cover border border-white/10 shadow-2xl mb-4">
                </a>
                <a href="{{ url('/') }}"
                    class="text-bright font-semibold tracking-tight text-lg hover:text-white transition-colors">Dafa'</a>
            </div>

            <div class="bento-card p-8">
                {{ $slot }}
            </div>

            <p class="text-center mt-6 text-sm text-dim">
                <a href="{{ url('/') }}" class="hover:text-white transition-colors">&larr; {{ __('Kembali ke beranda') }}</a>
            </p>
        </div>
    </div>
</body>
</html>