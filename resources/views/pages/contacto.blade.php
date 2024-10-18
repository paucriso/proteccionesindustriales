@extends('layouts.default')
@section('title', 'contáctanos')
@section('content')
<!-- Sección Contacto -->
<section id="contacto" class="py-16 bg-white container mx-auto px-6">
    <div class="container mx-auto">
        <!-- Formulario y datos de contacto -->
        <div class="flex flex-col lg:flex-row lg:space-x-12">
            <!-- Formulario de contacto -->
            <div class="lg:w-1/2">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-800">Contáctanos</h2>
                <form action="#" method="POST" class="space-y-4">
                    <div>
                        <label for="name" class="block text-lg font-medium text-gray-700">Nombre</label>
                        <input type="text" id="name" name="name" class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="phone" class="block text-lg font-medium text-gray-700">Teléfono</label>
                        <input type="tel" id="phone" name="phone" class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="message" class="block text-lg font-medium text-gray-700">Mensaje</label>
                        <textarea id="message" name="message" rows="4" class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition">Enviar mensaje</button>
                </form>
            </div>

            <!-- Datos de contacto -->
            <div class="lg:w-1/2 mt-12 lg:mt-0 space-y-8">
                <h3 class="text-2xl font-bold text-gray-800">Datos de contacto</h3>
                <p class="text-lg text-gray-600">Puedes comunicarte con nosotros a través de los siguientes medios:</p>
                <div>
                    <h4 class="text-lg font-semibold text-gray-700">Dirección</h4>
                    <p class="text-gray-600">Calle Falsa 123, Ciudad Industrial, CP 12345, Estado, País</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-gray-700">Teléfono</h4>
                    <p class="text-gray-600">+52 55 1234 5678</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-gray-700">Correo electrónico</h4>
                    <p class="text-gray-600">contacto@empresa.com</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-gray-700">Síguenos</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-blue-600 hover:text-blue-800">Facebook</a>
                        <a href="#" class="text-blue-600 hover:text-blue-800">Instagram</a>
                        <a href="#" class="text-blue-600 hover:text-blue-800">LinkedIn</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mapa -->
        <div class="mt-12">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">Ubicación</h3>
            <!-- Mapa embebido -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345094376!2d144.955923315678!3d-37.817209979751814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e33!2sMelbourne%20Central!5e0!3m2!1sen!2sau!4v1613981504941!5m2!1sen!2sau"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

@endsection