<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - {{ __('Halaman Tidak Ditemukan') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('foto-dafa.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
    <style>
        body {
            background-color: #050505;
            color: rgba(255, 255, 255, 0.9);
            font-family: 'Inter', sans-serif;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }
        
        .glitch-wrapper {
            position: relative;
        }

        .glitch-text {
            font-size: 20vw;
            font-weight: 900;
            line-height: 1;
            color: white;
            position: relative;
            text-shadow: 0 0 40px rgba(255, 255, 255, 0.2);
            z-index: 10;
        }

        @media (max-width: 768px) {
            .glitch-text { font-size: 40vw; }
        }

        .glitch-text::before, .glitch-text::after {
            content: '404';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #050505;
        }

        .glitch-text::before {
            left: 4px;
            text-shadow: -2px 0 red;
            clip: rect(24px, 550px, 90px, 0);
            animation: glitch-anim 3s infinite linear alternate-reverse;
            z-index: -1;
        }

        .glitch-text::after {
            left: -4px;
            text-shadow: -2px 0 blue;
            clip: rect(85px, 550px, 140px, 0);
            animation: glitch-anim 2s infinite linear alternate-reverse;
            z-index: -2;
        }

        @keyframes glitch-anim {
            0% { clip: rect(13px, 9999px, 86px, 0); }
            10% { clip: rect(27px, 9999px, 35px, 0); }
            20% { clip: rect(48px, 9999px, 95px, 0); }
            30% { clip: rect(81px, 9999px, 19px, 0); }
            40% { clip: rect(57px, 9999px, 44px, 0); }
            50% { clip: rect(96px, 9999px, 25px, 0); }
            60% { clip: rect(88px, 9999px, 8px, 0); }
            70% { clip: rect(72px, 9999px, 39px, 0); }
            80% { clip: rect(33px, 9999px, 17px, 0); }
            90% { clip: rect(91px, 9999px, 5px, 0); }
            100% { clip: rect(51px, 9999px, 76px, 0); }
        }
    </style>
</head>
<body class="selection:bg-white/20 selection:text-white flex flex-col items-center justify-center min-h-screen relative">
    
    <!-- Tech Grid Background -->
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:40px_40px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_50%,#000_70%,transparent_100%)] pointer-events-none"></div>

    <div class="relative z-10 flex flex-col items-center text-center px-6">
        
        <div class="glitch-wrapper">
            <div class="glitch-text">404</div>
        </div>
        
        <div class="space-y-8 -mt-4">
            <h2 class="text-xl md:text-2xl font-bold text-white tracking-widest uppercase opacity-80">
                {{ __('Halaman Tidak Ditemukan') }}
            </h2>
        </div>
    </div>
</body>
</html>
