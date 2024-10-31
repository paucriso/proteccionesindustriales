<section class="py-12">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-semibold text-gray-800">Productos Destacados</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @forelse ($destacados as $destacado)
                <div wire:key="product-{{ $destacado->id }}" class="bg-gray-200 rounded-xl hover:scale-[1.03] transition-all relative overflow-hidden">
                    <a href="{{ route('products.show', $destacado->id) }}" class="p-1">
                        <div class="w-2/3 h-[220px] overflow-hidden mx-auto aspect-w-16 aspect-h-8">
                            <img
                                src="{{ isset($destacado->images[0]) ? Voyager::image(json_decode($destacado->images)[0]) : asset('storage/.system/no-image.png') }}"
                                alt="{{ $destacado->name }}"
                                class="h-full w-full object-contain"
                            />
                        </div>
                    </a>

                    <div class="text-center bg-gray-100 p-6 h-full">
                        <a
                            href="{{ route('products.show', $destacado->id) }}"
                            class="text-lg font-bold text-gray-800 cursor-pointer hover:text-blue-600 transition-colors"
                        >
                            {{ $destacado->name }}
                        </a>

                        @livewire('emitir-productos', ['productId' => $destacado->id], key('emit-'.$destacado->id))
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-8 text-gray-500">
                    No se encontraron productos destacados
                </div>
            @endforelse
        </div>

        @if ($hasMore)
            <div class="mt-8 text-center">
                <button
                    wire:click="loadMore"
                    wire:loading.attr="disabled"
                    class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 disabled:opacity-50 transition-all"
                >
                    <span wire:loading.remove>Cargar más productos</span>
                    <span wire:loading>
                        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Cargando...
                    </span>
                </button>
            </div>
        @endif
    </div>
</section>
