


<?php

use function Livewire\Volt\{state,with};

with(fn() => [

    'testimonials'=> \App\Models\Testimonial::visible()->get(),
]);

?>

<div>

<section class="bg-auto space background-image arrow-wrap shape-mockup-wrap"
    style="background-image: url(/assets/img/bg/testi-other_bg_2.png);">
    <div class="container">
        <div class="text-center title-area">
            <span class="sub-title">
                <div class="icon-masking me-2">
                    <span class="mask-icon bg-mask" style="mask-image: url(/assets/img/theme-img/title_shape_2.svg);">
                    </span>
                    <img src="/assets/img/theme-img/title_shape_2.svg" alt="forme">
                </div>
                Témoignages Clients
            </span>
            <h2 class="sec-title">Ce que disent nos clients <br><span class="text-theme fw-normal">satisfaits</span>
            </h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="testi-otherSlider2"
                data-slider-options="{&quot;loop&quot;:true,&quot;breakpoints&quot;:{&quot;0&quot;:{&quot;slidesPerView&quot;:1},&quot;576&quot;:{&quot;slidesPerView&quot;:1},&quot;768&quot;:{&quot;slidesPerView&quot;:1},&quot;992&quot;:{&quot;slidesPerView&quot;:1},&quot;1200&quot;:{&quot;slidesPerView&quot;:2}}}">
                <div class="swiper-wrapper">


                    @forelse ($testimonials as $testimonial)
                    <div class="swiper-slide">
                        <div class="testi-other-box">
                            <div class="testi-other-box_img">
                                <img src="{{Storage::url($testimonial->image)}}" alt="Client 1">
                                <div class="testi-other-box_quote"><img src="/assets/img/icon/quote_left_2.svg"
                                        alt="quote"></div>
                            </div>
                            <div class="testi-other-box_content">
                                <p class="testi-other-box_text">{{$testimonial->content}}
                                </p>
                                <div class="testi-other-box_review">
                                    <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                                    <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                                    <i class="fa-solid fa-star-sharp"></i>
                                </div>
                                <h3 class="box-title">{{$testimonial->client}}</h3>
                                <p class="testi-other-box_desig">{{$testimonial->fonction}}</p>
                            </div>
                        </div>
                    </div>

                    @empty

                    @endforelse
                    <!-- Témoignage 1 -->


                    {{--
                    <!-- Témoignage 2 -->
                    <div class="swiper-slide">
                        <div class="testi-other-box">
                            <div class="testi-other-box_img">
                                <img src="/assets/img/testimonial/client_2.jpg" alt="Client 2">
                                <div class="testi-other-box_quote"><img src="/assets/img/icon/quote_left_2.svg"
                                        alt="quote"></div>
                            </div>
                            <div class="testi-other-box_content">
                                <p class="testi-other-box_text">"Un service exceptionnel ! Ils ont su comprendre mes
                                    besoins et livrer une solution parfaitement adaptée. Je recommande vivement !"</p>
                                <div class="testi-other-box_review">
                                    <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                                    <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                                    <i class="fa-solid fa-star-sharp"></i>
                                </div>
                                <h3 class="box-title">Jackline Techie</h3>
                                <p class="testi-other-box_desig">CEO chez Kormola</p>
                            </div>
                        </div>
                    </div>

                    <!-- Témoignage 3 -->
                    <div class="swiper-slide">
                        <div class="testi-other-box">
                            <div class="testi-other-box_img">
                                <img src="/assets/img/testimonial/client_3.jpg" alt="Client 3">
                                <div class="testi-other-box_quote"><img src="/assets/img/icon/quote_left_2.svg"
                                        alt="quote"></div>
                            </div>
                            <div class="testi-other-box_content">
                                <p class="testi-other-box_text">"Je suis impressionné par leur sérieux et leur
                                    engagement. Une collaboration fluide et un résultat au-delà de mes espérances."</p>
                                <div class="testi-other-box_review">
                                    <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                                    <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                                    <i class="fa-solid fa-star-sharp"></i>
                                </div>
                                <h3 class="box-title">Abraham Khalil</h3>
                                <p class="testi-other-box_desig">CEO chez Rimasu</p>
                            </div>
                        </div>
                    </div>--}}

                </div>
            </div>

            <!-- Flèches de navigation -->
            <button data-slider-prev="#testi-otherSlider2" class="slider-arrow style3 slider-prev"><i
                    class="far fa-arrow-left"></i></button>
            <button data-slider-next="#testi-otherSlider2" class="slider-arrow style3 slider-next"><i
                    class="far fa-arrow-right"></i></button>
        </div>
    </div>

    <!-- Éléments décoratifs -->
    <div class="shape-mockup moving d-none d-xl-block" style="bottom: 0%; left: 10%;">
        <img src="/assets/img/shape/line_1.png" alt="shape">
    </div>
    <div class="shape-mockup jump d-none d-xl-block" style="top: 20%; right: 2%;">
        <img src="/assets/img/shape/line_2.png" alt="shape">
    </div>
</section>

    </div>
