<?php

use function Livewire\Volt\{state,with};




with(fn() => [
    'services' => \App\Models\Service::all(),
]);

?>




<div class="service-area4 space" id="service-sec">
    <div class="container px-12 mx-auto md:mx-12 th-container2">
        <!-- Titre et sous-titre -->
        <div class="text-center title-area">
            <span class="text-base font-semibold sub-title">Ce que nous offrons</span>
            <h2 class="mt-4 text-lg font-bold md:text-2xl sec-title">Des solutions digitales adaptées à vos besoins</h2>
        </div>

        <!-- Slider des services -->
        <div class="relative mt-10 slider-area">
            <div class="swiper th-slider has-shadow" id="serviceSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <!-- Service 1 -->
                    @foreach ($services as $service)
                    <div class="swiper-slide">
                        <div
                            class="!h-80 p-6 bg-white rounded-2xl shadow-md service-item th-ani">
                            <div class="mx-auto service-item_icon">
                                <img src="{{ $service->getFirstMediaUrl('services') }}" alt="{{ $service->title }}"
                                    class="w-16 h-16 mx-auto">
                            </div>
                            <div class="mt-6 text-center service-item_content">
                                <h3 class="text-xl font-bold box-title">
                                    <a href="{{ route('service.details', $service->slug) }}"
                                        class="hover:text-blue-500">{{ $service->title }}</a>
                                </h3>
                                <p class="mt-2 text-gray-600 service-item_text">{{ $service->description }}</p>
                                <a href="{{ route('service.details', $service->slug) }}"
                                    class="inline-block mt-4 text-blue-500 line-btn">
                                    En savoir plus
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>

            <button data-slider-prev="#serviceSlider1"
                class="slider-arrow slider-prev">
                <i class="far fa-arrow-left"></i>
            </button>
            <button data-slider-next="#serviceSlider1"
                class="slider-arrow slider-next">
                <i class="far fa-arrow-right"></i>
            </button>

            <!-- Boutons de navigation du slider -->

        </div>
    </div>
</div>
