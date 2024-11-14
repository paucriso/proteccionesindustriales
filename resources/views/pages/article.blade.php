@extends('layouts.default')
@section('title', $article->title)
@section('content')
@include('partials.seguridad')
<!-- Blog Article Section -->
<section class="py-12 bg-white container mx-auto px-6">
    <div class="container mx-auto px-4">

        <!-- Título del artículo -->
        <h1 class="text-4xl font-bold mb-4">{{$article->title}}</h1>

        <!-- Meta información: autor y fecha de publicación -->
        <div class="flex items-center text-gray-600 mb-8">
            <p>Publicado el <span class="font-semibold">10 de Octubre, 2024</span></p>
        </div>

        <!-- Imagen destacada del artículo -->
        <div class="w-full max-h-[500px] overflow-hidden mb-6">
            <img src="{{Voyager::image($article->image)}}"
                 alt="Imagen destacada del artículo"
                 class="w-full h-[500px] object-cover object-center rounded-lg mb-8">
        </div>

        <!-- Contenido del artículo -->
        <div class="article-content prose prose-lg max-w-none mb-12">
            {!! $article->content !!}
        </div>

        <!-- Botón para volver al listado de artículos -->
        <div class="mb-12">
            <a href="/blog" class="text-blue-600 hover:text-blue-800 font-semibold">← Volver al Blog</a>
        </div>

    </div>
</section>

@endsection
