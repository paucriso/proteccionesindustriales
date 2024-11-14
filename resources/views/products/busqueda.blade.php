@extends('layouts.default')
@section('content')
    @include('partials.seguridad')
    <div class="container mx-auto py-4">


        <div class="font-[sans-serif] py-4 mx-auto lg:max-w-6xl max-w-lg md:max-w-full">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-12">Resultados de la búsqueda</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 px-6 md:px-0 min-h-96">
                @forelse ($products as $product)
                    <div class="bg-gray-200 rounded-xl hover:scale-[1.03] transition-all relative overflow-hidden">

                        <a href="{{ route('products.show', $product) }}" class="p-1">
                            <div class="w-2/3 h-[220px] overflow-hidden mx-auto aspect-w-16 aspect-h-8">
                                <img src="{{ isset($product->images[0]) ? Voyager::image(json_decode($product->images)[0]) : asset('storage/.system/no-image.png') }}"
                                    alt="Product 1" class="h-full w-full object-contain" />
                            </div>
                        </a>

                        <div class="text-center bg-gray-100 p-6 h-full">
                            <a href="{{ route('products.show', $product) }}"
                                class="text-lg font-bold text-gray-800 cursor-pointer">{{ $product->name }}</a>


                                <a href="{{route('products.show', $product)}}" type="button"
                                    class="w-full font-sans flex items-center justify-center gap-3 mt-6 px-6 py-3
                                           text-[15px] font-semibold bg-gray-300 hover:bg-gray-400"
                                    >
                                    Ver producto
                            </a>
                            @livewire('emitir-productos', ['productId' => $product->id])
                        </div>
                    </div>
                @empty
                    <p>No se encontraron productos</p>
                @endforelse





            </div>
        </div>

    </div>
@endsection
