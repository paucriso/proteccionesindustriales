<section class="swiper-container overflow-hidden h-[400px] md:h-screen w-full">
    <div class="swiper-wrapper">

        <!-- Slide 1 -->
        <div class="swiper-slide relative">
            <img src="{{asset('storage/.system/slide-1.webp')}}" alt="Slide 1" class="absolute inset-0 w-full h-full object-cover object-center">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-white">
                <h2 class="text-3xl md:text-5xl font-bold mb-4 text-center">Protecciones Industriales</h2>
                <p class="text-lg md:text-xl text-center">Tu socio confiable, desde el diseño hasta el montaje.</p>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide relative">
            <img src="{{asset('storage/.system/slide-2.webp')}}" alt="Slide 2" class="absolute inset-0 w-full h-full object-cover object-top">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-white">
                <h2 class="text-3xl md:text-5xl font-bold mb-4 text-center">Protecciones Industriales Efectivas</h2>
                <p class="text-lg md:text-xl text-center">Frabricación, venta e instalación de protecciones industriales.</p>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide relative">
            <img src="{{asset('storage/.system/slide-3.webp')}}" alt="Slide 3" class="absolute inset-0 w-full h-full object-cover object-top">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-white">
                <h2 class="text-3xl md:text-5xl font-bold mb-4 text-center">Innovamos en cada proyecto</h2>
                <p class="text-lg md:text-xl text-center">Ofrecemos protecciones industriales robustas que se ajustan a los requerimientos de cada cliente.</p>
            </div>
        </div>

    </div>

    <!-- Swiper Controls -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</section>

@push('scripts')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    // Ajuste de altura en dispositivos móviles
    function setHeroHeight() {
        const swiperContainer = document.querySelector('.swiper-container');
        if (window.innerWidth < 768) {
            swiperContainer.style.height = `${window.innerHeight}px`;
        } else {
            swiperContainer.style.height = '400px';
        }
    }

    // Llama a setHeroHeight al cargar la página y al cambiar el tamaño de la ventana
    window.addEventListener('load', setHeroHeight);
    window.addEventListener('resize', setHeroHeight);
</script>

@endpush


{{-- <div>
    <img class="w-full" src="{{asset('storage/.system/slider.png')}}" alt="">
</div> --}}
