<div class="flex flex-col text-center mt-4 p-6">
    <h2 class="text-base font-semibold text-gray-600">Cantidad:</h2>
    <div class="my-2">
        <button wire:click="decrementQuantity" id="decrementar" type="button" class="bg-gray-100 w-12 h-10 font-semibold">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current inline" viewBox="0 0 124 124">
                <path d="M112 50H12C5.4 50 0 55.4 0 62s5.4 12 12 12h100c6.6 0 12-5.4 12-12s-5.4-12-12-12z"
                    data-original="#000000"></path>
            </svg>
        </button>
        <span id="cantidad" type="button" class="bg-transparent w-12 h-10 font-semibold text-gray-800 text-lg">
            {{ $quantity }}
        </span>
        <button wire:click="incrementQuantity" id="incrementar" type="button"
            class="bg-gray-800 text-white w-12 h-10 font-semibold">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current inline" viewBox="0 0 42 42">
                <path
                    d="M37.059 16H26V4.941C26 2.224 23.718 0 21 0s-5 2.224-5 4.941V16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5H16v11.059C16 39.776 18.282 42 21 42s5-2.224 5-4.941V26h11.059C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z"
                    data-original="#000000"></path>
            </svg>
        </button>
    </div>
    <div x-data="{ added: false }">
        <button x-bind:disabled="added"
                type="button"
                class="w-full flex items-center justify-center gap-3 mt-6 mb-1 px-6 py-3 text-base font-semibold rounded"
                x-text="added ? 'Producto agregado' : 'Agregar a cotización'"
                @click="added = true; setTimeout(() => { added = false }, 5000)"
                wire:click="$emitTo('cotizador', 'agregarProducto', {{$productId}}, {{$quantity}})"

                :class="added ? 'bg-gray-300 cursor-not-allowed' : 'bg-yellow-300 hover:bg-yellow-400 text-gray-800'">

        </button>
    </div>
    <a href="https://wa.link/uy9fk9" target="_blank" type="button"
        class="min-w-[200px] px-4 py-2.5 border border-[#128C7E] bg-[#128C7E] hover:bg-[#075E54] text-white text-sm font-semibold rounded mb-1">Cotizar
        por Whatsapp</a>
    <a href="{{route('pages.cotizacion')}}" type="button"
        class="min-w-[200px] px-4 py-2.5 border border-gray-800 bg-gray-200 hover:bg-gray-300 text-gray-700 text-sm font-semibold rounded">Cotizar
        por Correo</a>
