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

            @forelse ($articles as $article)
                <!-- Tarjeta de un artículo -->
                <article class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{Voyager::image($article->image)}}" alt="Imagen del artículo" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <a href="{{route('pages.article', $article)}}" class="text-xl font-semibold mb-4">{{$article->title}}</a>
                        <p class="text-gray-700 mb-6">@excerpt($article->content, 27)</p>
                        <a href="{{route('pages.article', $article)}}" class="text-blue-600 hover:text-blue-800 font-semibold">Leer más &rarr;</a>
                    </div>
                </article>
            @empty
                <p>El blog aun no tiene contenido.</p>
            @endforelse
        </div>

        <!-- Paginación (si es necesaria) -->
        <div class="mt-10">
            {{ $articles->links('pagination::tailwind') }}
        </div>
    </div>
</section>

@endsection
