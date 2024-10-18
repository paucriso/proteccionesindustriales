@extends('layouts.default')

@section('title', 'mi home page')
@section('content')
    @include('partials.slider')

    <!-- Hero Section -->
    @include('partials.seguridad')
    <section id="hero" class="bg-cover bg-center h-60 flex items-center justify-between px-8 md:px-16 bg-gray-900 bg-gradient-to-r from-gray-900 to-gray-800">
        <div class="text-left text-white max-w-lg">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">Descubre nuestras soluciones personalizadas</h1>
            <p class="text-lg mb-4">Fabricación a medida para tus proyectos industriales.</p>
        </div>
        <div>
            <a href="/catalogo" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-md">Ver catálogo</a>
        </div>
    </section>
    @include('partials.seguridad')

    <!-- Sobre nosotros con imagen -->
    <section class="py-12">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-semibold mb-4">Protecciones Industriales</h2>
                <p class="text-gray-700 mb-6">Nos especializamos en la fabricación de protecciones industriales de acero, soluciones personalizadas para cada cliente. Somos tu aliado confiable para el éxito de tus proyectos.</p>
                <p class="text-gray-700">Nuestro compromiso con la excelencia y la flexibilidad nos permite ser más que un simple proveedor. Estamos listos para ayudarte a proteger lo que más valoras.</p>
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
            <h2 class="text-3xl font-semibold">Nuestros Servicios</h2>
            <p class="text-gray-700 mt-4">Fabricamos una amplia gama de productos industriales adaptados a tus necesidades.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Servicio 1 -->
            <div class="bg-white p-6 shadow-lg">
                <img src="{{asset('storage/.system/servicio-1.webp')}}" alt="Protecciones industriales" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-semibold mb-2">Protecciones Industriales</h3>
                <p class="text-gray-600">Barreras, bolardos, protecciones antichoque, y más.</p>
            </div>
            <!-- Servicio 2 -->
            <div class="bg-white p-6 shadow-lg">
                <img src="{{asset('storage/.system/servicio-2.webp')}}" alt="Mesas de trabajo" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-semibold mb-2">Mesas de Trabajo</h3>
                <p class="text-gray-600">Diseñadas específicamente para tus necesidades.</p>
            </div>
            <!-- Servicio 3 -->
            <div class="bg-white p-6 shadow-lg">
                <img src="{{asset('storage/.system/canastilla-montacarga.jpg')}}" alt="Carros transportadores" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-semibold mb-2">Carros Transportadores</h3>
                <p class="text-gray-600">Dollys, canastillas para montacargas y más.</p>
            </div>
            <!-- Servicio 4 -->
            <div class="bg-white p-6 shadow-lg">
                <img src="{{asset('storage/.system/barreras-peatonales.jpg')}}" alt="Barreras peatonales" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-semibold mb-2">Barreras Peatonales</h3>
                <p class="text-gray-600">Protección segura para peatones en áreas industriales.</p>
            </div>
            <!-- Servicio 5 -->
            <div class="bg-white p-6 shadow-lg">
                <img src="{{asset('storage/.system/proteccion-columnas.jpg')}}" alt="Protección para columnas" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-semibold mb-2">Protección para Columnas</h3>
                <p class="text-gray-600">Protección resistente para estructuras y columnas.</p>
            </div>
            <!-- Servicio 6 -->
            <div class="bg-white p-6 shadow-lg">
                <img src="{{asset('storage/.system/bolardos.jpg')}}" alt="Bolardos / postes de seguridad" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-semibold mb-2">Bolardos / Postes de Seguridad</h3>
                <p class="text-gray-600">Postes de alta resistencia para proteger instalaciones.</p>
            </div>
            <!-- Servicio 7 -->
            <div class="bg-white p-6 shadow-lg">
                <img src="{{asset('storage/.system/proteccion-racks-bota.jpg')}}" alt="Protección para racks tipo bota" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-semibold mb-2">Protección para Racks Tipo Bota</h3>
                <p class="text-gray-600">Protección especializada para racks industriales.</p>
            </div>
            <!-- Servicio 8 -->
            <div class="bg-white p-6 shadow-lg">
                <img src="{{asset('storage/.system/proteccion-perimetral.jpg')}}" alt="Protección perimetral" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-semibold mb-2">Protección Perimetral en Viga</h3>
                <p class="text-gray-600">Protección perimetral para muros y racks industriales.</p>
            </div>
            <!-- Servicio 9 -->
            <div class="bg-white p-6 shadow-lg">
                <img src="{{asset('storage/.system/puertas-seguridad.webp')}}" alt="Puertas de seguridad abatibles" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-semibold mb-2">Puertas de Seguridad Abatibles</h3>
                <p class="text-gray-600">Puertas abatibles de seguridad para áreas industriales.</p>
            </div>
            <!-- Servicio 10 -->
            <div class="bg-white p-6 shadow-lg">
                <img src="https://placehold.co/600x400" alt="Soportes para calzas de trailer" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-semibold mb-2">Soportes para Calzas de Trailer</h3>
                <p class="text-gray-600">Soportes seguros y resistentes para el manejo de trailers.</p>
            </div>
            <!-- Servicio 11 -->
            <div class="bg-white p-6 shadow-lg">
                <img src="{{asset('storage/.system/mampara-acero.jpg')}}" alt="Mamparas de acero" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-lg font-semibold mb-2">Mamparas de Acero para Corte y Soldadura</h3>
                <p class="text-gray-600">Protección especializada para áreas de corte y soldadura.</p>
            </div>
        </div>
    </div>
</section>

    <!-- Productos destacados con imágenes -->
    <section class="py-12">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-semibold">Productos Destacados</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Producto 1 -->
                <div class="bg-white p-4 shadow-lg">
                    <img src="https://placehold.co/600x400" alt="Protección antichoque" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h4 class="text-lg font-semibold mb-2">Protecciones antichoque</h4>
                </div>
                <!-- Producto 2 -->
                <div class="bg-white p-4 shadow-lg">
                    <img src="https://placehold.co/600x400" alt="Barreras peatonales" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h4 class="text-lg font-semibold mb-2">Barreras peatonales</h4>
                </div>
                <!-- Producto 3 -->
                <div class="bg-white p-4 shadow-lg">
                    <img src="https://placehold.co/600x400" alt="Bolardos / postes de seguridad" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h4 class="text-lg font-semibold mb-2">Bolardos / postes de seguridad</h4>
                </div>
                <!-- Producto 4 -->
                <div class="bg-white p-4 shadow-lg">
                    <img src="https://placehold.co/600x400" alt="Protección para racks" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h4 class="text-lg font-semibold mb-2">Protección para racks tipo bota</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-yellow-500 text-white py-12">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-semibold">¡Estamos listos para ayudarte a proteger lo que más valoras!</h2>
            <p class="text-lg mt-4">Contáctanos para recibir una solución completamente personalizada para tu industria.</p>
            <a href="#" class="bg-white text-yellow-500 px-6 py-3 rounded-full mt-6 inline-block font-semibold">Contáctanos</a>
        </div>
    </section>

@endsection
