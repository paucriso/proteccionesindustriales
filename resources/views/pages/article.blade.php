@extends('layouts.default')
@section('title', 'Articulo del blog')
@section('content')
<!-- Blog Article Section -->
<section class="py-12 bg-white container mx-auto px-6">
    <div class="container mx-auto px-4">

        <!-- Título del artículo -->
        <h1 class="text-4xl font-bold mb-4">Título del Artículo</h1>

        <!-- Meta información: autor y fecha de publicación -->
        <div class="flex items-center text-gray-600 mb-8">
            <p class="mr-4">Por <span class="font-semibold">Nombre del Autor</span></p>
            <p>Publicado el <span class="font-semibold">10 de Octubre, 2024</span></p>
        </div>

        <!-- Imagen destacada del artículo -->
        <img src="https://placehold.co/1200x600" alt="Imagen destacada del artículo" class="w-full h-auto rounded-lg mb-8">

        <!-- Contenido del artículo -->
        <div class="prose prose-lg max-w-none mb-12">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</p>

            <p>Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Ut faucibus pulvinar elementum integer enim neque volutpat ac tincidunt. Enim lobortis scelerisque fermentum dui faucibus in ornare quam viverra. Massa massa ultricies mi quis hendrerit dolor magna eget est.</p>

            <h2>Subtítulo del Artículo</h2>
            <p>Faucibus turpis in eu mi bibendum neque egestas congue. Ut morbi tincidunt augue interdum velit euismod in pellentesque massa. Duis at consectetur lorem donec massa sapien. Viverra accumsan in nisl nisi scelerisque eu. Elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi.</p>

            <ul>
                <li>Elemento de la lista 1</li>
                <li>Elemento de la lista 2</li>
                <li>Elemento de la lista 3</li>
            </ul>

            <p>Enim nec dui nunc mattis enim ut. Ultricies tristique nulla aliquet enim tortor at auctor urna nunc. Lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis. Non nisi est sit amet facilisis magna etiam tempor orci.</p>
        </div>

        <!-- Botón para volver al listado de artículos -->
        <div class="mb-12">
            <a href="/blog" class="text-blue-600 hover:text-blue-800 font-semibold">← Volver al Blog</a>
        </div>

    </div>
</section>

@endsection
