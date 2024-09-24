<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{$title ?? ""}} @yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <style>
            body {
                overflow-x: hidden;
            }
        </style>
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    </head>
    <body class="">
        @if(Route::currentRouteName() == 'dashboard')
            <livewire:side-bar />
        @endif
        @if(Route::currentRouteName() != 'dashboard')
            <livewire:header />
        @endif

        <div class="{{ Route::currentRouteName() !== 'login' ? 'container mx-auto md:max-w-screen-4xl' : '' }}">
            @yield('content')
        </div>

        <livewire:footer />
        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        @stack('scripts')
    </body>
</html>
