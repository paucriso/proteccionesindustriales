@extends('layouts.default')

@section('title', 'nosotros')
@section('content')
<!-- Sección Nosotros -->
<section id="nosotros" class="py-16 px-6 container mx-auto">
    <div class="container mx-auto flex flex-col md:flex-row items-center">
        <!-- Texto -->
        <div class="md:w-3/5 md:pr-8 text-left">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-800">Sobre Nosotros</h2>
            <p class="text-lg text-gray-700 mb-4 text-justify">
                Fundada hace más de una década, nuestra empresa se ha destacado en la fabricación de protecciones industriales de acero y soluciones personalizadas para diversas industrias. Desde nuestros inicios, nos hemos comprometido a ofrecer productos de alta calidad que se adapten a las necesidades específicas de cada cliente.
            </p>
            <p class="text-lg text-gray-700 mb-4 text-justify">
                Nuestros valores se centran en la excelencia, la flexibilidad y el compromiso con la satisfacción del cliente. No solo fabricamos, también proporcionamos un servicio integral que incluye el montaje y la instalación de nuestras protecciones industriales.
            </p>
            <p class="text-lg text-gray-700 text-justify">
                Creemos firmemente que cada proyecto es único, y estamos preparados para ser un aliado confiable que te ayude a proteger lo que más valoras. Nuestro equipo está listo para seguir innovando y ofreciendo las mejores soluciones para la industria.
            </p>
        </div>

        <!-- Imagen -->
        <div class="md:w-2/5 mt-8 md:mt-0">
            <img src="https://placehold.co/600x400" alt="Nosotros - Imagen de la empresa" class="rounded-lg shadow-lg">
        </div>
    </div>
</section>


@endsection
