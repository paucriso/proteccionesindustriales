<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Protecciones Industriales Metálicas - Canastillas para montacargas')</title>

    <!-- Primary Meta Tags -->
    <meta name="description" content="Soluciones en protecciones industriales y seguridad, como protecciones para racks, barreras peatonales, protecciones perimetrales y metálicas, además de bancos y mesas de trabajo, canastillas para montacargas, y estantería industrial de alta resistencia." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://proteccionesdeacero.com.mx/" />
    <meta property="og:title" content="Protecciones Industriales - Canastillas para montacargas - Protecciones Metálicas" />
    <meta property="og:description" content="Soluciones en protecciones industriales y seguridad, como protecciones para racks, barreras peatonales, protecciones perimetrales y metálicas, además de bancos y mesas de trabajo, canastillas para montacargas, y estantería industrial de alta resistencia." />
    <meta property="og:image" content="{{asset('storage/.system/logo-grande.jpg')}}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://proteccionesdeacero.com.mx/" />
    <meta property="twitter:title" content="Protecciones Industriales - Canastillas para montacargas - Protecciones Metálicas" />
    <meta property="twitter:description" content="Soluciones en protecciones industriales y seguridad, como protecciones para racks, barreras peatonales, protecciones perimetrales y metálicas, además de bancos y mesas de trabajo, canastillas para montacargas, y estantería industrial de alta resistencia." />
    <meta property="twitter:image" content="{{asset('storage/.system/logo-grande.jpg')}}" />

    <link rel="shortcut icon" href="{{asset('storage/.system/favicon.webp')}}" type="image/x-icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="canonical" href="https://proteccionesdeacero.com.mx/" />

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
