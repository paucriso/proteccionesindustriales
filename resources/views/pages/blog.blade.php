@extends('layouts.default')
@section('title', 'Blog')
@section('content')
<!-- Blog Section -->
<section class="py-12 bg-gray-100">
    <div class="container mx-auto px-6">
        <!-- Título principal del blog -->
        <h2 class="text-3xl font-bold text-center mb-8">Nuestro Blog</h2>

        <!-- Contenedor de los artículos en formato grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Tarjeta de un artículo -->
            <article class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://placehold.co/600x400" alt="Imagen del artículo" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-4">Título del Artículo 1</h3>
                    <p class="text-gray-700 mb-6">Un breve extracto o resumen del artículo. Aquí se muestra una pequeña descripción para captar el interés del lector...</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">Leer más &rarr;</a>
                </div>
            </article>

            <!-- Repetimos para más artículos -->
            <article class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://placehold.co/600x400" alt="Imagen del artículo" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-4">Título del Artículo 2</h3>
                    <p class="text-gray-700 mb-6">Un breve extracto o resumen del artículo. Aquí se muestra una pequeña descripción para captar el interés del lector...</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">Leer más &rarr;</a>
                </div>
            </article>

            <article class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="https://placehold.co/600x400" alt="Imagen del artículo" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-4">Título del Artículo 3</h3>
                    <p class="text-gray-700 mb-6">Un breve extracto o resumen del artículo. Aquí se muestra una pequeña descripción para captar el interés del lector...</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">Leer más &rarr;</a>
                </div>
            </article>

            <!-- Añadir más artículos según sea necesario -->
        </div>

        <!-- Paginación (si es necesaria) -->
        <div class="mt-8 text-center">
            <a href="#" class="text-gray-600 hover:text-gray-900">1</a>
            <a href="#" class="text-gray-600 hover:text-gray-900">2</a>
            <a href="#" class="text-gray-600 hover:text-gray-900">3</a>
            <span class="text-gray-600">...</span>
            <a href="#" class="text-gray-600 hover:text-gray-900">Siguiente &rarr;</a>
        </div>
    </div>
</section>

@endsection
