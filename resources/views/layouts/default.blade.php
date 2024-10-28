<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Soluciones Metálicas')</title>
    <link rel="shortcut icon" href="{{asset('storage/.system/favicon.webp')}}" type="image/x-icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Additional Styles -->
    @stack('styles')
    @livewireStyles
</head>
<body>
    <!-- Navbar -->
    @include('partials.navbar')


    <!-- Flash Messages -->
    @include('partials.flash-messages')

    <!-- Main Content -->
    @yield('content')


    <!-- Footer -->
    @include('partials.footer')

    <!-- Scripts -->

    <!-- Additional Scripts -->
    @stack('scripts')
    @livewireScripts
</body>
</html>
