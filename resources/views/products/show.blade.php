@extends('layouts.default')
@section('content')
    @push('styles')
        <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css"
            integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            .lb-number {
                display: none !important;
            }

            .swiper-container {
                width: 300px;
                height: 300px;
                padding: 20px;
                margin-left: auto;
                margin-right: auto;
                overflow: hidden;
                position: relative;
            }

            .swiper-button-next,
            .swiper-button-prev {
                color: #578ec7 !important;
                font-weight: bold !important;
                --swiper-navigation-size: 25px;
            }

            .swiper-button-next:hover {
                color: #94b6db !important;
            }

            .swiper-button-prev:hover {
                color: #94b6db !important;
            }

            .swiper-slide {
                background-size: cover;
                background-position: center;
            }

            .gallery-top {
                height: 300px;
                width: 300px;
            }

            .gallery-thumbs {
                height: 90px;
                box-sizing: border-box;
                padding: 10px 0;
            }

            .gallery-thumbs .swiper-slide {
                height: 100%;
                opacity: 0.4;
            }

            .gallery-thumbs .swiper-slide-thumb-active {
                opacity: 1;
            }
        </style>
    @endpush
    <section class="container mx-auto py-14 px-4">

        <div class="grid grid-cols-3  gap-4 shadow-xl py-8">
            <div>
                <div>
                    <!-- Swiper -->
                    <!-- Swiper -->
                    <div class="swiper-container gallery-top bg-gray-200 rounded-xl cursor-pointer">
                        <div class="swiper-wrapper">
                            @if ($product->images)
                                @if (count(json_decode($product->images)) > 1)
                                    @foreach (json_decode($product->images) as $imagen)
                                        <div class="swiper-slide"
                                            style="background-image:url({{ Voyager::image($imagen) }})">
                                            <div>
                                                <a href="{{ Voyager::image($imagen) }}" data-lightbox="product"
                                                    class="text-3xl text-white hover:text-celeste-500">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </a>
                                            </div>

                                        </div>
                                    @endforeach
                                @else
                                    <div class="swiper-slide bg-contain bg-no-repeat"
                                        style="background-image:url({{ Voyager::image(json_decode($producto->imagenes)[0]) }})">
                                        <div class="w-full h-full flex justify-center items-center">
                                            <a href="{{ Voyager::image(json_decode($product->images)[0]) }}"
                                                data-lightbox="producto" class="text-3xl text-white hover:text-celeste-500">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            @else
                                <div class="swiper-slide"
                                    style="background-image:url({{ asset('storage/.sistema/sin-imagen.jpg') }})"></div>
                            @endif
                        </div>
                        <!-- Add Arrows -->
                        @if ($product->images && count(json_decode($product->images)) > 1)
                            <div class="swiper-button-next swiper-button-white"></div>
                            <div class="swiper-button-prev swiper-button-white"></div>
                        @endif
                    </div>
                    @if ($product->images && count(json_decode($product->images)) > 1)
                        <div class="swiper-container gallery-thumbs p-2">
                            <div class="swiper-wrapper">
                                @foreach (json_decode($product->images) as $imagen)
                                    <div class="swiper-slide bg-gray-200 rounded-xl cursor-pointer"
                                        style="background-image:url({{ Voyager::image($imagen) }})">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <div class="flex flex-col text-center mt-4 p-6">
                        <h2 class="text-base font-semibold text-gray-600">Cantidad:</h2>
                        <div class="my-2">
                            <button type="button" class="bg-gray-100 w-12 h-10 font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current inline" viewBox="0 0 124 124">
                                    <path d="M112 50H12C5.4 50 0 55.4 0 62s5.4 12 12 12h100c6.6 0 12-5.4 12-12s-5.4-12-12-12z"
                                        data-original="#000000"></path>
                                </svg>
                            </button>
                            <button type="button" class="bg-transparent w-12 h-10 font-semibold text-gray-800 text-lg">
                                1
                            </button>
                            <button type="button" class="bg-gray-800 text-white w-12 h-10 font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-current inline" viewBox="0 0 42 42">
                                    <path
                                        d="M37.059 16H26V4.941C26 2.224 23.718 0 21 0s-5 2.224-5 4.941V16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5H16v11.059C16 39.776 18.282 42 21 42s5-2.224 5-4.941V26h11.059C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z"
                                        data-original="#000000"></path>
                                </svg>
                            </button>
                        </div>
                        <button type="button"
                            class="min-w-[200px] px-4 py-3 bg-yellow-400 hover:bg-yellow-300 text-gray-800 text-sm font-semibold rounded mt-2 mb-1">Añadir a la cotización</button>
                        <button type="button"
                            class="min-w-[200px] px-4 py-2.5 border border-[#128C7E] bg-[#128C7E] hover:bg-[#075E54] text-white text-sm font-semibold rounded mb-1">Cotizar
                            por Whatsapp</button>
                            <button type="button"
                            class="min-w-[200px] px-4 py-2.5 border border-gray-800 bg-gray-200 hover:bg-gray-300 text-gray-700 text-sm font-semibold rounded">Cotizar
                            por Correo</button>
                    </div>
                    <!-- Swiper JS -->
                    <!-- Swiper -->

                </div>

            </div>
            <!-- Hidden on desktop -->
            <div class="lg:hidden">
                <h4 class="text-xl font-bold text-[#252525]">Características</h4>
                <div class="px-8 mt-4">
                    @if (1 == 1)
                        <div class="caracteristicas">caracteristicas</div>
                    @else
                        <div>Aun no se han agregado características</div>
                    @endif
                </div>
                <h4 class="text-xl font-bold text-[#252525] mt-8">Especificaciones</h4>
                <div class="px-8 mt-4">
                    @if (1 == 1)
                        <div class="especificaciones">especificaciones</div>
                    @else
                        <div>Aun no se han agregado especificaciones</div>
                    @endif
                </div>
                <h4 class="text-xl font-bold text-[#252525] mt-8">Video</h4>
                <div class="px-8 mt-4">
                    @if (1 == 1)
                        video
                    @else
                        <div>Este producto no cuenta con video</div>
                    @endif
                </div>
                <h4 class="text-xl font-bold text-[#252525] mt-8">Manual</h4>
                <div class="px-8 mt-4">
                    manual
                </div>
            </div>
            <!-- Hidden on mobile -->
            <div class="hidden lg:block col-span-2">
                <div>
                    <h2 class="text-2xl font-extrabold text-gray-700">{{ $product->name }}</h2>
                    <hr class="my-6" />
                    <div class="descripcion-producto text-base text-gray-600 mt-4">
                        {!! $product->description !!}
                    </div>
                </div>
            </div>


        </div>
    </section>
    @push('scripts')
        <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <!-- Initialize Swiper -->
        <script>
            var galleryThumbs = new Swiper('.gallery-thumbs', {
                spaceBetween: 10,
                slidesPerView: 4,
                loop: true,
                freeMode: true,
                loopedSlides: 5, //looped slides should be the same
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
            });
            var galleryTop = new Swiper('.gallery-top', {
                spaceBetween: 10,
                loop: true,
                loopedSlides: 5, //looped slides should be the same
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                thumbs: {
                    swiper: galleryThumbs,
                },
            });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
            integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"
            integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            lightbox.option({
                'resizeDuration': 200,
                'wrapAround': true,
                'fitImagesInViewport': true,
                'disableScrolling': true
            })
        </script>
    @endpush
@endsection