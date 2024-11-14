@extends('layouts.default')

@section('title', 'Protecciones Industriales - Canastillas para montacargas - Protecciones Metálicas')
@section('content')
    @include('partials.slider')

    <!-- Hero Section -->
    @include('partials.seguridad')
    <section id="hero" class="bg-cover bg-center flex-col lg:flex-row h-60 py-6 lg:py-0 lg:h-40 flex items-center justify-between px-8 md:px-16 bg-gray-900 bg-gradient-to-r from-gray-900 to-gray-800">
        <div class="text-left text-white max-w-lg">
            <h1 class="text-2xl text-center md:text-left md:text-2xl font-bold mb-4">Descubre nuestras soluciones personalizadas</h1>
            <p class="text-lg text-center md:text-left mb-4">Fabricación a medida para tus proyectos industriales.</p>
        </div>
        <div>
            <a href="{{route('products.index')}}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-md">Ver catálogo</a>
        </div>
    </section>
    @include('partials.seguridad')

    <!-- Sobre nosotros con imagen -->
    <section class="py-12">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-semibold mb-4 text-gray-800">Protecciones Industriales</h2>
                <p class="text-gray-700 mb-6">Nos especializamos en la fabricación de protecciones industriales de acero, soluciones personalizadas para cada cliente. Somos tu aliado confiable para el éxito de tus proyectos.</p>
                <p class="text-gray-700 mb-10">Nuestro compromiso con la excelencia y la flexibilidad nos permite ser más que un simple proveedor. Estamos listos para ayudarte a proteger lo que más valoras.</p>

                <a href="{{route('products.index')}}" class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-6 rounded-md">Ver catálogo de productos</a>

            </div>
            <div>
                <img src="{{asset('storage/.system/barrera-seguridad.jpg')}}" alt="Protecciones industriales" class="w-full rounded-lg shadow-lg">
            </div>
        </div>
    </section>

<!-- Servicios con imágenes -->
<section id="servicios" class="bg-gray-100 py-12">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-semibold text-gray-800">Nuestros Servicios</h2>
            <p class="text-gray-700 mt-4">Fabricamos una amplia gama de productos industriales adaptados a tus necesidades.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Servicio 1 -->
            <div class="bg-white p-6 shadow-lg">
                <img src="{{asset('storage/.system/proteccion-1.webp')}}" alt="Protecciones industriales" class="w-full h-auto object-cover rounded-lg mb-4 bg-gray-200">
                <h3 class="text-lg font-semibold mb-2 text-gray-800">Protecciones Industriales</h3>
                <p class="text-gray-700">Barreras, bolardos, protecciones antichoque, y más.</p>
            </div>
            <!-- Servicio 2 -->
            <div class="bg-white p-6 shadow-lg">
                <img src="{{asset('storage/.system/mesa-de-trabajo.webp')}}" alt="Mesas de trabajo" class="w-full h-auto object-cover rounded-lg mb-4 bg-gray-200">
                <h3 class="text-lg font-semibold mb-2 text-gray-800">Mesas de Trabajo</h3>
                <p class="text-gray-700">Diseñadas específicamente para tus necesidades.</p>
            </div>
            <!-- Servicio 3 -->
            <div class="bg-white p-6 shadow-lg">
                <img src="{{asset('storage/.system/canastilla-montacargas.webp')}}" alt="Carros transportadores" class="w-full h-auto object-cover rounded-lg mb-4">
                <h3 class="text-lg font-semibold mb-2 text-gray-800">Canastilla para Montacargas</h3>
                <p class="text-gray-700">Dollys, carros transportadores y más.</p>
            </div>
            <!-- Servicio 4 -->
            <div class="bg-white p-6 shadow-lg">
                <img src="{{asset('storage/.system/barreras-4.webp')}}" alt="Barreras peatonales" class="w-full h-auto object-cover rounded-lg mb-4 bg-gray-200">
                <h3 class="text-lg font-semibold mb-2 text-gray-800">Barreras Peatonales</h3>
                <p class="text-gray-700">Protección segura para peatones en áreas industriales.</p>
            </div>
            <!-- Servicio 5 -->
            <div class="bg-white p-6 shadow-lg">
                <img src="{{asset('storage/.system/proteccion-columnas.webp')}}" alt="Protección para columnas" class="w-full h-auto object-cover rounded-lg mb-4 bg-gray-200">
                <h3 class="text-lg font-semibold mb-2 text-gray-800">Protección para Columnas</h3>
                <p class="text-gray-700">Protección resistente para estructuras y columnas.</p>
            </div>
            <!-- Servicio 6 -->
            <div class="bg-white p-6 shadow-lg">
                <img src="{{asset('storage/.system/bolardos-i.webp')}}" alt="Bolardos / postes de seguridad" class="w-full h-auto object-cover rounded-lg mb-4 bg-gray-200">
                <h3 class="text-lg font-semibold mb-2 text-gray-800">Bolardos / Postes de Seguridad</h3>
                <p class="text-gray-700">Postes de alta resistencia para proteger instalaciones.</p>
            </div>
            <!-- Servicio 7 -->
            <div class="bg-white p-6 shadow-lg">
                <img src="{{asset('storage/.system/rack-bota.webp')}}" alt="Protección para racks tipo bota" class="w-full h-auto object-cover rounded-lg mb-4 bg-gray-200">
                <h3 class="text-lg font-semibold mb-2 text-gray-800">Protección para Racks Tipo Bota</h3>
                <p class="text-gray-700">Protección especializada para racks industriales.</p>
            </div>
            <!-- Servicio 8 -->
            <div class="bg-white p-6 shadow-lg">
                <img src="{{asset('storage/.system/viga-perimetral.webp')}}" alt="Protección perimetral" class="w-full h-auto object-cover rounded-lg mb-4 bg-gray-200">
                <h3 class="text-lg font-semibold mb-2 text-gray-800">Protección Perimetral en Viga</h3>
                <p class="text-gray-700">Protección perimetral para muros y racks industriales.</p>
            </div>
            <!-- Servicio 9 -->
            <div class="bg-white p-6 shadow-lg">
                <img src="{{asset('storage/.system/puertas-seguridad-2.webp')}}" alt="Puertas de seguridad abatibles" class="w-full h-auto object-cover rounded-lg mb-4 bg-gray-200">
                <h3 class="text-lg font-semibold mb-2 text-gray-800">Puertas de Seguridad Abatibles</h3>
                <p class="text-gray-700">Puertas abatibles de seguridad para áreas industriales.</p>
            </div>
            <!-- Servicio 10 -->
            <div class="bg-white p-6 shadow-lg">
                <img src="{{asset('storage/.system/soportes-trailer.webp')}}" alt="Soportes para calzas de trailer" class="w-full h-auto object-cover rounded-lg mb-4 bg-gray-200">
                <h3 class="text-lg font-semibold mb-2 text-gray-800">Soportes para Calzas de Trailer</h3>
                <p class="text-gray-700">Soportes seguros y resistentes para el manejo de trailers.</p>
            </div>
            <!-- Servicio 11 -->
            <div class="bg-white p-6 shadow-lg">
                <img src="{{asset('storage/.system/mamparas-acero.webp')}}" alt="Mamparas de acero" class="w-full h-auto object-cover rounded-lg mb-4 bg-gray-200">
                <h3 class="text-lg font-semibold mb-2 text-gray-800">Mamparas de Acero para Corte y Soldadura</h3>
                <p class="text-gray-700">Protección especializada para áreas de corte y soldadura.</p>
            </div>
        </div>
    </div>
</section>

    @livewire('carousel')

    <!-- Call to Action -->
    <section class="bg-blue-500 text-white py-12">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-semibold">¡Estamos listos para ayudarte a proteger lo que más valoras!</h2>
            <p class="text-lg mt-4">Contáctanos para recibir una solución completamente personalizada para tu industria.</p>
            <a href="{{ route('pages.contacto') }}" class="bg-white text-blue-500 px-6 py-3 rounded-full mt-6 inline-block font-semibold">Contáctanos</a>
        </div>
    </section>

@endsection
