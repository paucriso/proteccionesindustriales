{{-- resources/views/livewire/quotation.blade.php --}}
<div class="container mx-auto px-6 py-8 min-h-96">
    <h2 class="text-2xl text-gray-800 font-bold">Solicita Tu Cotización</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 col-span-3 my-3">
        <div>
            @if (empty($items))
                <div class="bg-white p-6">
                    <p class="text-gray-700 mb-4">
                        ¿Estás buscando algún producto en especial? Estamos aquí para ayudarte.
                    </p>

                    <ul class="list-disc list-inside text-gray-600 mb-4 space-y-2">
                        <li>Obtener información detallada sobre cualquier producto</li>
                        <li>Recibir asesoramiento personalizado</li>
                        <li>Conocer precios y disponibilidad al instante</li>
                        <li>Resolver todas tus dudas de manera rápida y sencilla</li>
                    </ul>

                    <div class="bg-blue-50 p-4 rounded-md mb-4">
                        <h3 class="text-xl font-semibold text-blue-900 mb-2">¿Cómo funciona?</h3>
                        <ol class="list-decimal list-inside text-gray-600 space-y-2">
                            <li>Completa el formulario a tu derecha</li>
                            <li>Proporciona los detalles que necesitas</li>
                            <li>¡Recibe una respuesta personalizada en poco tiempo!</li>
                        </ol>
                    </div>

                    <div>
                        <p class="text-lg font-bold text-orange-600 mb-4">
                            ¡No esperes más! Tu solución perfecta está a solo un formulario de distancia.
                        </p>
                    </div>
                </div>
            @else
                <div class="font-sans overflow-x-auto">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-100 whitespace-nowrap">
                            <tr>
                                <th class="p-4 text-left text-xs font-semibold text-gray-800">
                                    Producto
                                </th>
                                <th class="p-4 text-left text-xs font-semibold text-gray-800">
                                    Cantidad
                                </th>
                                <th class="p-4 text-left text-xs font-semibold text-gray-800">
                                    Eliminar
                                </th>
                            </tr>
                        </thead>

                        <tbody class="whitespace-nowrap">
                            @foreach ($items as $productId => $item)
                                <tr class="hover:bg-gray-50">
                                    <td class="p-4 text-[15px] text-gray-800">
                                        {{ $item['product']['name'] }}
                                    </td>
                                    <td class="p-4 text-[15px] text-gray-800">
                                        <input class="max-w-10" type="number" min="1"
                                            value="{{ $item['quantity'] }}"
                                            wire:change="$emitTo('cotizador', 'updateItemQuantity', {{ $productId }}, $event.target.value)">
                                    </td>

                                    <td class="p-4">

                                        <button class="mr-4" title="Delete"
                                            wire:click="$emitTo('cotizador', 'eliminarProducto', {{ $productId }}), $commit">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 fill-red-500 hover:fill-red-700" viewBox="0 0 24 24">
                                                <path
                                                    d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                                    data-original="#000000" />
                                                <path
                                                    d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                                                    data-original="#000000" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- @foreach ($items as $productId => $item)
                <div class="quotation-item">
                    <h4>{{ $item['product']['name'] }}</h4>
                    <input type="number" min="1" value="{{ $item['quantity'] }}"
                        wire:change="updateItemQuantity({{ $productId }}, $event.target.value)">
                    <button wire:click="removeItem({{ $productId }})">
                        Eliminar
                    </button>
                </div>
            @endforeach --}}
            @endif
        </div>
        <div class="px-6">
            @livewire('formulario-cotizacion', ['items' => $items])
        </div>
    </div>

</div>
