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

        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #0E0E11; }
        ::-webkit-scrollbar-thumb { background: rgba(255, 255, 255, 0.2); border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: rgba(255, 255, 255, 0.3); }
    </style>
</head>
<body class="font-sans antialiased selection:bg-white/20 selection:text-white">
    <div class="min-h-screen bg-[#0E0E11]">
        <nav x-data="{ open: false }" class="bg-[#0E0E11]/80 backdrop-blur-lg border-b border-white/5">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="shrink-0 flex items-center">
                            <a href="{{ route('dashboard') }}" class="font-bold text-xl text-bright tracking-tight">
                                Portfolio Admin
                            </a>
                        </div>

                        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex items-center">
                            <a href="{{ route('dashboard') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-white/40 text-sm font-medium leading-5 text-bright focus:outline-none focus:border-white/70 transition">
                                Dashboard
                            </a>
                            <a href="{{ route('admin.projects.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-dim hover:text-white hover:border-white/20 focus:outline-none focus:text-white focus:border-white/30 transition">
                                Projects
                            </a>
                        </div>
                    </div>

                    <div class="hidden sm:flex sm:items-center sm:ms-6 gap-4">
                        <a href="{{ url('/') }}" target="_blank"
                            class="inline-flex items-center px-3 py-2 rounded-lg text-sm font-medium text-dim hover:text-white border border-white/10 hover:border-white/20 transition">
                            {{ __('Lihat Portfolio') }} &nearr;
                        </a>

                        <div class="ms-3 relative">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3 py-2 border border-white/10 rounded-lg text-sm leading-4 font-medium text-bright bg-white/5 hover:bg-white/10 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>
                                        <div class="ms-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </div>

                    <div class="-me-2 flex items-center sm:hidden">
                        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-dim hover:text-white hover:bg-white/5 focus:outline-none focus:bg-white/10 focus:text-white transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden border-t border-white/5">
                <div class="pt-2 pb-3 space-y-1 px-4">
                    <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('admin.projects.index')" :active="request()->routeIs('admin.projects.*')">
                        {{ __('Projects') }}
                    </x-responsive-nav-link>
                    <a href="{{ url('/') }}" target="_blank"
                        class="block px-3 py-2 text-sm font-medium text-dim hover:text-white transition">
                        {{ __('Lihat Portfolio') }} &nearr;
                    </a>
                </div>

                <div class="pt-4 pb-1 border-t border-white/5 px-4">
                    <div class="px-4">
                        <div class="font-medium text-base text-bright">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-dim">{{ Auth::user()->email }}</div>
                    </div>

                    <div class="mt-3 space-y-1">
                        <x-responsive-nav-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        @isset($header)
            <header class="bg-transparent border-b border-white/5">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('scripts')
</body>
</html>