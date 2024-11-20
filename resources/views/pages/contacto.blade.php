@extends('layouts.default')
@section('content')
@include('partials.seguridad')
<!-- Sección Contacto -->
<section id="contacto" class="py-16 bg-white container mx-auto px-6">
    <div class="container mx-auto">
        <!-- Formulario y datos de contacto -->
        <div class="flex flex-col lg:flex-row lg:space-x-12">
            <!-- Formulario de contacto -->
            <div class="lg:w-1/2">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-800">Contáctanos</h2>
                @livewire('formulario-cotizacion', ['titulo' => 'Enviar mensaje'])
            </div>

            <!-- Datos de contacto -->
            <div class="lg:w-1/2 mt-12 lg:mt-0 space-y-8">
                <h3 class="text-2xl font-bold text-gray-800">Datos de contacto</h3>
                <p class="text-lg text-gray-600">Puedes comunicarte con nosotros a través de los siguientes medios:</p>
                <div>
                    <h4 class="text-lg font-semibold text-gray-700">Dirección</h4>
                    <p class="text-gray-600">C. Adolfo López Mateos #21, Col. Miguel Hidalgo, Puebla, Pue.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-gray-700">Teléfono</h4>
                    <p class="text-gray-600">222 609 0404</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-gray-700">Correo electrónico</h4>
                    <p class="text-gray-600">contacto@empresa.com</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-gray-700">Síguenos</h4>
                    <div class="flex space-x-2">
                        <a href="https://www.facebook.com/share/1BSrNXwYfb/?mibextid=kFxxJD" class="hover:text-gray-400" target="_blank">
                            <svg fill="#3b5998" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M329,145h-432c-22.1,0-40,17.9-40,40v432c0,22.1,17.9,40,40,40h432c22.1,0,40-17.9,40-40V185C369,162.9,351.1,145,329,145z M169.5,357.6l-2.9,38.3h-39.3v133H77.7v-133H51.2v-38.3h26.5v-25.7c0-11.3,0.3-28.8,8.5-39.7c8.7-11.5,20.6-19.3,41.1-19.3 c33.4,0,47.4,4.8,47.4,4.8l-6.6,39.2c0,0-11-3.2-21.3-3.2c-10.3,0-19.5,3.7-19.5,14v29.9H169.5z"></path> </g></svg>
                        </a>
                        <a href="https://www.instagram.com/protecciones_industriales/profilecard/" class="hover:text-gray-400" target="_blank">
                            <svg fill="#D62976" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M113,446c24.8,0,45.1-20.2,45.1-45.1c0-9.8-3.2-18.9-8.5-26.3c-8.2-11.3-21.5-18.8-36.5-18.8s-28.3,7.4-36.5,18.8 c-5.3,7.4-8.5,16.5-8.5,26.3C68,425.8,88.2,446,113,446z"></path> <polygon points="211.4,345.9 211.4,308.1 211.4,302.5 205.8,302.5 168,302.6 168.2,346 "></polygon> <path d="M329,145h-432c-22.1,0-40,17.9-40,40v432c0,22.1,17.9,40,40,40h432c22.1,0,40-17.9,40-40V185C369,162.9,351.1,145,329,145z M241,374.7v104.8c0,27.3-22.2,49.5-49.5,49.5h-157C7.2,529-15,506.8-15,479.5V374.7v-52.3c0-27.3,22.2-49.5,49.5-49.5h157 c27.3,0,49.5,22.2,49.5,49.5V374.7z"></path> <path d="M183,401c0,38.6-31.4,70-70,70c-38.6,0-70-31.4-70-70c0-9.3,1.9-18.2,5.2-26.3H10v104.8C10,493,21,504,34.5,504h157 c13.5,0,24.5-11,24.5-24.5V374.7h-38.2C181.2,382.8,183,391.7,183,401z"></path> </g> </g></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mapa -->
        <div class="mt-12">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Ubicación</h3>
            <!-- Mapa embebido -->
            <iframe class="w-full h-96" src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d12707.202983735775!2d-98.1447812!3d19.0674087!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e1!3m2!1ses-419!2smx!4v1729541775013!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

@endsection
