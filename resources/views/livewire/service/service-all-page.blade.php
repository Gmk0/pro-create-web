<?php



use function Livewire\Volt\{state,with};




with(fn() => [
    'services' => \App\Models\Service::all(),
    'testimonials'=> \App\Models\Testimonial::visible()->get(),
]);

?>


<div>

    <x-breadcumb-wrapper title="Services" />
    <section class="space" id="service-other-sec">
        <div class="container">
            <div class="row gy-4">

                @foreach ($services as $index => $service)
                <div class="col-md-6 col-xl-4">
                    <div class="service-other-card">
                        <div class="service-other-card_number">{{$index +1}}</div>
                        <div class="shape-icon"><img src="{{$service->getFirstMediaUrl('services')}}" alt="Icon"> <span class="dots"></span></div>
                        <h3 class="box-title"><a href="{{route('service.details', $service->slug)}}">{{$service->title}}</a></h3>
                        <p class="service-other-card_text">{{$service->description}}</p><a href="{{route('service.details', $service->slug)}}"
                            class="th-btn">voir plus<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape"><img src="/assets/img/service/service_card_bg.png" alt="bg"></div>
                    </div>
                </div>

                @endforeach


                {{--<div class="col-md-6 col-xl-4">
                    <div class="service-other-card">
                        <div class="service-other-card_number">02</div>
                        <div class="shape-icon"><img src="/assets/img/icon/service_2_1.svg" alt="Icon"> <span
                                class="dots"></span></div>
                        <h3 class="box-title"><a href="service-other-details.html">UI/UX Design</a></h3>
                        <p class="service-other-card_text">Intrinsicly redefine competitive e-business before adaptive
                            potentialiti. Professionally build progressive users with.</p><a href="service-other-details.html"
                            class="th-btn">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape"><img src="/assets/img/service/service_card_bg.png" alt="bg"></div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-other-card">
                        <div class="service-other-card_number">03</div>
                        <div class="shape-icon"><img src="/assets/img/icon/service_2_1.svg" alt="Icon"> <span
                                class="dots"></span></div>
                        <h3 class="box-title"><a href="service-other-details.html">Digital Marketing</a></h3>
                        <p class="service-other-card_text">Intrinsicly redefine competitive e-business before adaptive
                            potentialiti. Professionally build progressive users with.</p><a href="service-other-details.html"
                            class="th-btn">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape"><img src="/assets/img/service/service_card_bg.png" alt="bg"></div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-other-card">
                        <div class="service-other-card_number">04</div>
                        <div class="shape-icon"><img src="/assets/img/icon/service_2_1.svg" alt="Icon"> <span
                                class="dots"></span></div>
                        <h3 class="box-title"><a href="service-other-details.html">Business Analysis</a></h3>
                        <p class="service-other-card_text">Intrinsicly redefine competitive e-business before adaptive
                            potentialiti. Professionally build progressive users with.</p><a href="service-other-details.html"
                            class="th-btn">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape"><img src="/assets/img/service/service_card_bg.png" alt="bg"></div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-other-card">
                        <div class="service-other-card_number">05</div>
                        <div class="shape-icon"><img src="/assets/img/icon/service_2_1.svg" alt="Icon"> <span
                                class="dots"></span></div>
                        <h3 class="box-title"><a href="service-other-details.html">Software Service-others</a></h3>
                        <p class="service-other-card_text">Intrinsicly redefine competitive e-business before adaptive
                            potentialiti. Professionally build progressive users with.</p><a href="service-other-details.html"
                            class="th-btn">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape"><img src="/assets/img/service/service_card_bg.png" alt="bg"></div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-other-card">
                        <div class="service-other-card_number">06</div>
                        <div class="shape-icon"><img src="/assets/img/icon/service_2_1.svg" alt="Icon"> <span
                                class="dots"></span></div>
                        <h3 class="box-title"><a href="service-other-details.html">Machine Learning</a></h3>
                        <p class="service-other-card_text">Intrinsicly redefine competitive e-business before adaptive
                            potentialiti. Professionally build progressive users with.</p><a href="service-other-details.html"
                            class="th-btn">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape"><img src="/assets/img/service/service_card_bg.png" alt="bg"></div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-other-card">
                        <div class="service-other-card_number">07</div>
                        <div class="shape-icon"><img src="/assets/img/icon/service_2_1.svg" alt="Icon"> <span
                                class="dots"></span></div>
                        <h3 class="box-title"><a href="service-other-details.html">IT Management</a></h3>
                        <p class="service-other-card_text">Intrinsicly redefine competitive e-business before adaptive
                            potentialiti. Professionally build progressive users with.</p><a href="service-other-details.html"
                            class="th-btn">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape"><img src="/assets/img/service/service_card_bg.png" alt="bg"></div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-other-card">
                        <div class="service-other-card_number">08</div>
                        <div class="shape-icon"><img src="/assets/img/icon/service_2_1.svg" alt="Icon"> <span
                                class="dots"></span></div>
                        <h3 class="box-title"><a href="service-other-details.html">Cloud Computing</a></h3>
                        <p class="service-other-card_text">Intrinsicly redefine competitive e-business before adaptive
                            potentialiti. Professionally build progressive users with.</p><a href="service-other-details.html"
                            class="th-btn">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape"><img src="/assets/img/service/service_card_bg.png" alt="bg"></div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-other-card">
                        <div class="service-other-card_number">09</div>
                        <div class="shape-icon"><img src="/assets/img/icon/service_2_1.svg" alt="Icon"> <span
                                class="dots"></span></div>
                        <h3 class="box-title"><a href="service-other-details.html">Backup &amp; Recovery</a></h3>
                        <p class="service-other-card_text">Intrinsicly redefine competitive e-business before adaptive
                            potentialiti. Professionally build progressive users with.</p><a href="service-other-details.html"
                            class="th-btn">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape"><img src="/assets/img/service/service_card_bg.png" alt="bg"></div>
                    </div>
                </div>--}}
            </div>
        </div>
    </section>
    <section class="position-relative space">
        <div class="th-bg-img background-image" style="background-image: url(/assets/img/bg/cta_bg_2.jpg);">
            <img src="/assets/img/bg/bg_overlay_1.png" alt="overlay">
        </div>
        <div class="container z-index-common">
            <div class="row justify-content-center">
                <div class="text-center col-xl-6 col-lg-7 col-md-9">
                    <div class="title-area mb-35">
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon bg-mask"
                                    style="mask-image: url(&quot;assets/img/theme-img/title_shape_2.svg&quot;);">
                                </span>
                                <img src="/assets/img/theme-img/title_shape_2.svg" alt="forme">
                            </div>
                            CONTACTEZ-NOUS
                        </span>
                        <h2 class="text-white sec-title">Besoin d'une solution informatique pour <span
                                class="text-theme fw-normal">votre entreprise ?</span></h2>
                    </div>
                    <a href="{{route('contact')}}" class="th-btn style3">Nous contacter</a>
                </div>
            </div>
        </div>
    </section>

   <section class="bg-smoke background-image" id="process-sec"
    style="background-image: url(/assets/img/bg/process_bg_1.png);">
    <div class="container space">
        <div class="text-center title-area">
            <span class="sub-title">
                <div class="icon-masking me-2">
                    <span class="mask-icon bg-mask" style="mask-image: url(assets/img/theme-img/title_shape_2.svg);">
                    </span>
                    <img src="/assets/img/theme-img/title_shape_2.svg" alt="forme">
                </div>
                NOTRE PROCESSUS
            </span>
            <h2 class="sec-title">Comment <span class="text-theme">nous travaillons ?</span></h2>
        </div>
        <div class="process-card-area">
            <div class="process-line">
                <img src="/assets/img/bg/process_line.svg" alt="ligne">
            </div>
            <div class="row gy-40">
                <div class="col-sm-6 col-xl-3 process-card-wrap">
                    <div class="process-card">
                        <div class="process-card_number">01</div>
                        <div class="process-card_icon">
                            <img src="/assets/img/icon/process_card_1.svg" alt="icône">
                        </div>
                        <h2 class="box-title">Définir votre projet</h2>
                        <p class="process-card_text">Tout commence par une idée. Dites-nous ce dont vous avez besoin et
                            nous en ferons une réalité.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 process-card-wrap">
                    <div class="process-card">
                        <div class="process-card_number">02</div>
                        <div class="process-card_icon">
                            <img src="/assets/img/icon/process_card_2.svg" alt="icône">
                        </div>
                        <h2 class="box-title">Analyse & Stratégie</h2>
                        <p class="process-card_text">Nous étudions votre projet en détail pour proposer les meilleures
                            solutions adaptées à vos besoins.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 process-card-wrap">
                    <div class="process-card">
                        <div class="process-card_number">03</div>
                        <div class="process-card_icon">
                            <img src="/assets/img/icon/process_card_3.svg" alt="icône">
                        </div>
                        <h2 class="box-title">Planification & Exécution</h2>
                        <p class="process-card_text">Nous transformons les idées en actions concrètes avec une approche
                            méthodique et agile.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 process-card-wrap">
                    <div class="process-card">
                        <div class="process-card_number">04</div>
                        <div class="process-card_icon">
                            <img src="/assets/img/icon/process_card_4.svg" alt="icône">
                        </div>
                        <h2 class="box-title">Livraison & Suivi</h2>
                        <p class="process-card_text">Votre projet prend vie ! Nous restons à vos côtés pour assurer son
                            succès et son évolution.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @livewire("service.testimonial-area")


</section>


</div>
