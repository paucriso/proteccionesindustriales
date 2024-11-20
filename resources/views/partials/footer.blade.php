{{-- <footer class="bg-gray-800 p-4 text-white text-center mt-4">
    <p>&copy; {{ date('Y') }} Soluciones Metálicas. Todos los derechos reservados.</p>
</footer> --}}
<!-- Footer -->
@include('partials.seguridad')
<footer class="bg-gray-900 text-gray-400 py-8">
    <div class="container mx-auto px-4">
        <!-- Contenedor del footer -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Breve descripción de la empresa -->
            <div>
                <h3 class="text-white text-base font-semibold mb-4">Nuestra Empresa</h3>
                <p class="text-sm">Nos especializamos en la fabricación de protecciones industriales de acero, canastillas para montacargas, escaleras y más. Nos comprometemos a ofrecer productos personalizados que se ajusten a las necesidades de cada cliente.</p>
            </div>

            <!-- Menú repetido -->
            <div class="pl-4 ml-8 hidden md:block">
                <h3 class="text-white text-base font-semibold mb-4">Navegación</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('pages.index') }}" class="hover:text-white">- INICIO</a></li>
                    <li><a href="{{ route('products.index') }}" class="hover:text-white">- PRODUCTOS</a></li>
                    <li><a href="{{ route('pages.nosotros') }}" class="hover:text-white">- NOSOTROS</a></li>
                    <li><a href="{{ route('pages.blog') }}" class="hover:text-white">- BLOG</a></li>
                    <li><a href="{{ route('pages.contacto') }}" class="hover:text-white">- CONTACTO</a></li>
                </ul>
            </div>

            <!-- Información de contacto -->
            <div>
                <h3 class="text-white text-base font-semibold mb-4">Contáctanos</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="tel:+522226090404" class="hover:text-white"><span class="font-bold">Teléfono: </span>222 609 0404</a></li>
                    <li><a href="mailto:contacto@empresa.com" class="hover:text-white"><span class="font-bold">Email: </span>ventas@proteccionesdeacero.com.mx</a></li>
                    <li><p><span class="font-bold">Dirección: </span>Adolfo López Mateos 21 Col. Miguel Hidalgo, Puebla, Pue. CP 72308</p></li>
                </ul>
            </div>
        </div>

        <!-- Separador -->
        <div class="border-t border-gray-700 mt-8 pt-4 text-xs">
            <div class="flex justify-between items-center">
                <!-- Redes sociales -->
                <div class="md:flex space-x-4 hidden">
                    <a href="https://www.facebook.com/share/1BSrNXwYfb/?mibextid=kFxxJD" target="_blank" class="text-gray-400 hover:text-white">Facebook</a>
                    <a href="https://www.instagram.com/protecciones_industriales/profilecard/" target="_blank" class="text-gray-400 hover:text-white">Instagram</a>
                </div>

                <!-- Derechos reservados -->
                <p class="text-gray-500">&copy; 2024 Protecciones Industriales Orange. Todos los derechos reservados. | <span class="font-bold">Diseño por: </span><a href="https://www.digitweb.com.mx" target="_blank">Digitweb Diseño Web</a></p>
            </div>
        </div>
    </div>
    <div class="fixed bottom-2 right-2 md:bottom-5 md:right-5">
        <a href="https://wa.link/uy9fk9" target="_blank">
            <img class="max-w-16" src="{{asset('storage/.system/icono-whats.png')}}" alt="">
        </a>
    </div>
</footer>
