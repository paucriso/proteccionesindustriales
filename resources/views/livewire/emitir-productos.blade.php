<div x-data="{ added: false }">
    <button x-bind:disabled="added"
            type="button"
            class="w-full flex items-center justify-center gap-3 mt-6 px-6 py-3 text-base font-semibold"
            x-text="added ? 'Producto agregado' : 'Agregar a cotización'"
            @click="added = true; setTimeout(() => { added = false }, 5000)"
            wire:click="$emitTo('cotizador', 'agregarProducto', {{ $productId }})"

            :class="added ? 'bg-gray-300 cursor-not-allowed' : 'bg-yellow-400 hover:bg-yellow-300 text-gray-800'">

    </button>
</div>