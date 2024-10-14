@extends('layouts.default')

@section('title', 'mi home page')

@section('content')
<div class="container mx-auto">
    <div class="font-sans tracking-wide p-4 lg:max-w-6xl max-w-2xl max-lg:mx-auto">
        <div class="grid items-start grid-cols-1 lg:grid-cols-5 gap-8">

            <div class="lg:col-span-3 text-center">
                <div class="lg:h-[450px] p-4 relative before:absolute before:inset-0 before:bg-black before:opacity-20 before:rounded">
                    <img src="{{isset($product->images[0]) ? Voyager::image(json_decode($product->images)[0]) : asset('storage/.system/no-image.png')}}" alt="Product" class="mainImage lg:w-11/12 w-full h-full rounded object-contain object-top" />
                </div>

                <div class="flex flex-wrap gap-4 mx-auto mt-4">
                @if($product->images && (count(json_decode($product->images)) > 1))
                    @foreach(json_decode($product->images) as $imagen)
                    <div class="cursor-pointer p-1 relative before:absolute before:inset-0 before:bg-black before:opacity-20 before:rounded">
                        <img src="{{Voyager::image($imagen)}}" alt="Product2" class="w-20 h-16 object-contain" onclick="changeMainImage('{{ asset('storage/' . $imagen) }}')" />
                    </div>
                    @endforeach
                @endif
                </div>

            </div>

            <div class="lg:col-span-2">
                <div class="flex flex-wrap items-start gap-4">
                    <div>
                        <h2 class="text-2xl font-extrabold text-gray-800">{{$product->name}}</h2>
                    </div>
                </div>
                <hr class="my-6" />
                <div>
                    <h3 class="text-xl font-bold text-gray-800">Quantity</h3>

                    <div class="flex divide-x border w-max mt-4 rounded overflow-hidden">
                        <button type="button" class="bg-gray-100 w-12 h-10 font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current inline" viewBox="0 0 124 124">
                                <path d="M112 50H12C5.4 50 0 55.4 0 62s5.4 12 12 12h100c6.6 0 12-5.4 12-12s-5.4-12-12-12z" data-original="#000000"></path>
                            </svg>
                        </button>
                        <button type="button" class="bg-transparent w-12 h-10 font-semibold text-gray-800 text-lg">
                            1
                        </button>
                        <button type="button" class="bg-gray-800 text-white w-12 h-10 font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current inline" viewBox="0 0 42 42">
                                <path d="M37.059 16H26V4.941C26 2.224 23.718 0 21 0s-5 2.224-5 4.941V16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5H16v11.059C16 39.776 18.282 42 21 42s5-2.224 5-4.941V26h11.059C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z" data-original="#000000"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <hr class="my-6" />

                <div class="flex flex-wrap gap-4">
                    <button type="button" class="min-w-[200px] px-4 py-3 bg-orange-500 hover:bg-orange-600 text-white text-sm font-semibold rounded">Cotizar</button>
                    <button type="button" class="min-w-[200px] px-4 py-2.5 border border-green-500 bg-green-600 hover:bg-gray-50 text-white text-sm font-semibold rounded">Cotizar por Whatsapp</button>
                </div>
            </div>
        </div>

        <div class="mt-6 max-w-2xl">
            <h3 class="text-xl font-bold text-gray-800">Características del Producto</h3>

            <div class="mt-6">
                <p class="text-sm text-gray-600 mt-4">Step up your style game with our premium white lens sunglasses. Crafted for both fashion and function, these sunglasses offer UV protection, a stylish design, and a lightweight frame. The scratch-resistant and polarized lenses ensure durability and clarity, while the comfortable fit makes them ideal for all-day wear. Elevate your look with these must-have accessories for any occasion.</p>
                {{$product->description}}
            </div>

        </div>
    </div>
</div>
<script>
    function changeMainImage(imageUrl) {
        // Selecciona el elemento de la imagen grande
        var mainImage = document.getElementById('mainImage');
        // Cambia la fuente de la imagen grande por la URL de la imagen pequeña clicada
        mainImage.src = imageUrl;
    }
</script>
@endsection

