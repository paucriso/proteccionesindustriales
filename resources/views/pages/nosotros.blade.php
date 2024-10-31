@extends('layouts.default')

@section('title', 'nosotros')
@section('content')
@include('partials.seguridad')
<!-- Sección Nosotros -->
<section id="nosotros" class="py-16 px-6 container mx-auto">
    <div class="container mx-auto flex flex-col md:flex-row items-center">
        <!-- Texto -->
        <div class="md:w-3/5 md:pr-8 text-left">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-800">Sobre Nosotros</h2>
            <p class="text-lg text-gray-700 mb-4 text-justify">
                Nos enorgullece ser especialistas en el diseño y fabricación de protecciones
                industriales, canastillas para montacargas, escaleras, carritos para trasladado de
                materiales y mesas de trabajo. Ofreciendo un amplio portafolio que responde a las
                necesidades de nuestros clientes.
            </p>
            <p class="text-lg text-gray-700 text-justify">
                Entendemos que cada entorno industrial es único. Por eso en protecciones industriales
                orange brindamos un enfoque personalizado para satisfacer las necesidades específicas de
                nuestros clientes. Colaboremos de la mano para entender los desafíos, diseñar y fabricar
                soluciones.
            </p>
        </div>

        <!-- Imagen -->
        <div class="md:w-2/5 mt-8 md:mt-0">
            <img src="{{asset('storage/.system/seguridad-industrial.jpg')}}" alt="Nosotros - Imagen de la empresa" class="rounded-lg shadow-lg">
        </div>
    </div>
</section>


@endsection
