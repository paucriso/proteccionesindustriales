<nav class="bg-gray-100 text-white" x-data="{ open: false }">
    <!-- Bloque superior -->
    <div class="container mx-auto flex justify-between items-center py-2 px-4">
        <!-- Logo -->
        <div class="text-lg font-semibold">
            <a href="{{ url('/') }}">
                <img class="max-w-40 lg:max-w-48" src="{{ asset('storage/.system/logo.png') }}" alt="Soluciones metálicas">
            </a>
        </div>

        <!-- Barra de búsqueda -->
        <div class="hidden lg:flex items-center w-1/2">
            <input type="text" placeholder="Buscar..."
                class="w-full px-4 py-2 rounded-l bg-gray-300 text-white focus:outline-none">
            <button class="bg-[#2e5282] p-2 rounded-r hover:bg-blue-600 focus:outline-none">
                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    stroke="#ffffff">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                            stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
            </button>
        </div>
        <div class="hidden lg:block text-[#2e5282]">
            <!-- Cotizador -->
            @livewire('cotizador')
        </div>
    </div>

    <!-- Bloque inferior -->
    <div class="bg-[#2e5282] py-2">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-12">
                <!-- Menú (adaptable para móviles) -->
                <div class="relative">
                    <button @click="open = !open" class="lg:hidden block text-white focus:outline-none">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>

                    <!-- Menú desktop -->
                    <ul class="hidden lg:flex lg:space-x-10 lg:items-center tracking-wide">
                        <li><a href="{{ url('/') }}" class="hover:text-gray-400">Inicio</a></li>
                        <li><a href="{{ url('/products') }}" class="hover:text-gray-400">Productos</a></li>
                        <li><a href="{{ url('/nosotros') }}" class="hover:text-gray-400">Nosotros</a></li>
                        <li><a href="{{ url('/blog') }}" class="hover:text-gray-400">Blog</a></li>
                        <li><a href="{{ url('/contacto') }}" class="hover:text-gray-400">Contacto</a></li>
                    </ul>
                </div>

                <!-- Teléfono y redes sociales -->
                <div class="hidden lg:flex items-center space-x-4">
                    <div class="hidden lg:block">
                        <span class="text-white">Tel: (222) 609-0404</span>
                    </div>
                    <div class="flex space-x-2">
                        <a href="#" class="hover:text-gray-400">
                            <svg fill="#ffffff" height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M329,145h-432c-22.1,0-40,17.9-40,40v432c0,22.1,17.9,40,40,40h432c22.1,0,40-17.9,40-40V185C369,162.9,351.1,145,329,145z M169.5,357.6l-2.9,38.3h-39.3v133H77.7v-133H51.2v-38.3h26.5v-25.7c0-11.3,0.3-28.8,8.5-39.7c8.7-11.5,20.6-19.3,41.1-19.3 c33.4,0,47.4,4.8,47.4,4.8l-6.6,39.2c0,0-11-3.2-21.3-3.2c-10.3,0-19.5,3.7-19.5,14v29.9H169.5z"></path> </g></svg>
                        </a>
                        <a href="#" class="hover:text-gray-400">
                            <svg fill="#ffffff" height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M113,446c24.8,0,45.1-20.2,45.1-45.1c0-9.8-3.2-18.9-8.5-26.3c-8.2-11.3-21.5-18.8-36.5-18.8s-28.3,7.4-36.5,18.8 c-5.3,7.4-8.5,16.5-8.5,26.3C68,425.8,88.2,446,113,446z"></path> <polygon points="211.4,345.9 211.4,308.1 211.4,302.5 205.8,302.5 168,302.6 168.2,346 "></polygon> <path d="M329,145h-432c-22.1,0-40,17.9-40,40v432c0,22.1,17.9,40,40,40h432c22.1,0,40-17.9,40-40V185C369,162.9,351.1,145,329,145z M241,374.7v104.8c0,27.3-22.2,49.5-49.5,49.5h-157C7.2,529-15,506.8-15,479.5V374.7v-52.3c0-27.3,22.2-49.5,49.5-49.5h157 c27.3,0,49.5,22.2,49.5,49.5V374.7z"></path> <path d="M183,401c0,38.6-31.4,70-70,70c-38.6,0-70-31.4-70-70c0-9.3,1.9-18.2,5.2-26.3H10v104.8C10,493,21,504,34.5,504h157 c13.5,0,24.5-11,24.5-24.5V374.7h-38.2C181.2,382.8,183,391.7,183,401z"></path> </g> </g></svg>
                        </a>
                    </div>
                </div>
                <!-- cotizador movil -->
                <div class="block lg:hidden text-white">
                    @livewire('cotizador')
                </div>
            </div>
        </div>
    </div>

    <!-- Menú móvil desplegable -->
    <div x-show="open"
         x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 transform -translate-y-2"
         x-transition:enter-end="opacity-100 transform translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 transform translate-y-0"
         x-transition:leave-end="opacity-0 transform -translate-y-2"
         class="lg:hidden bg-[#2e5282]">
        <div class="container mx-auto px-4 py-2">
            <ul class="space-y-2">
                <li><a href="{{ url('/') }}" class="block py-2 text-white hover:text-gray-400">Inicio</a></li>
                <li><a href="{{ url('/products') }}" class="block py-2 text-white hover:text-gray-400">Productos</a></li>
                <li><a href="{{ url('/nosotros') }}" class="block py-2 text-white hover:text-gray-400">Nosotros</a></li>
                <li><a href="{{ url('/blog') }}" class="block py-2 text-white hover:text-gray-400">Blog</a></li>
                <li><a href="{{ url('/contacto') }}" class="block py-2 text-white hover:text-gray-400">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>
