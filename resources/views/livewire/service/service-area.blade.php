<?php

use function Livewire\Volt\{state};

//

?>

<div class="service-area4 space" id="service-sec">
    <div class="container th-container2">
        <div class="text-center title-area">
            <span class="sub-title">Ce que nous offrons</span>
            <h2 class="sec-title">Des solutions digitales adaptées à vos besoins</h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="serviceSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <!-- Service 1 -->
                    <div class="swiper-slide">
                        <div class="service-item th-ani">
                            <div class="service-item_icon">
                                <img src="/assets/img/icon/service_2_1.svg" alt="Marketing Digital">
                            </div>
                            <div class="service-item_content">
                                <h3 class="box-title"><a href="details-service.html">Marketing Digital</a></h3>
                                <p class="service-item_text">Stratégies en ligne pour améliorer votre visibilité et
                                    attirer plus de clients.</p>
                                <a href="details-service.html" class="line-btn">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service 2 -->
                    <div class="swiper-slide">
                        <div class="service-item th-ani">
                            <div class="service-item_icon">
                                <img src="/assets/img/icon/service_2_2.svg" alt="Développement Web">
                            </div>
                            <div class="service-item_content">
                                <h3 class="box-title"><a href="details-service.html">Développement Web</a></h3>
                                <p class="service-item_text">Création et gestion de sites web performants et
                                    intuitifs.</p>
                                <a href="details-service.html" class="line-btn">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service 3 -->
                    <div class="swiper-slide">
                        <div class="service-item th-ani">
                            <div class="service-item_icon">
                                <img src="/assets/img/icon/service_2_1.svg" alt="Développement Mobile">
                            </div>
                            <div class="service-item_content">
                                <h3 class="box-title"><a href="details-service.html">Développement Mobile</a></h3>
                                <p class="service-item_text">Applications mobiles sur mesure pour iOS et Android.
                                </p>
                                <a href="details-service.html" class="line-btn">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service 4 -->
                    <div class="swiper-slide">
                        <div class="service-item th-ani">
                            <div class="service-item_icon">
                                <img src="/assets/img/icon/service_2_1.svg" alt="Transformation Digitale">
                            </div>
                            <div class="service-item_content">
                                <h3 class="box-title"><a href="details-service.html">Transformation Digitale</a>
                                </h3>
                                <p class="service-item_text">Accompagnement stratégique pour intégrer les outils
                                    numériques dans votre entreprise.</p>
                                <a href="details-service.html" class="line-btn">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service 5 -->
                    <div class="swiper-slide">
                        <div class="service-item th-ani">
                            <div class="service-item_icon">
                                <img src="/assets/img/icon/service_2_1.svg" alt="Formation">
                            </div>
                            <div class="service-item_content">
                                <h3 class="box-title"><a href="details-service.html">Formation et Accompagnement</a>
                                </h3>
                                <p class="service-item_text">Formations sur les outils numériques pour autonomiser
                                    vos équipes.</p>
                                <a href="details-service.html" class="line-btn">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service 6 -->
                    <div class="swiper-slide">
                        <div class="service-item th-ani">
                            <div class="service-item_icon">
                                <img src="/assets/img/icon/service_2_1.svg" alt="Community Management">
                            </div>
                            <div class="service-item_content">
                                <h3 class="box-title"><a href="details-service.html">Gestion des Réseaux Sociaux</a>
                                </h3>
                                <p class="service-item_text">Stratégie et gestion efficace de vos réseaux sociaux
                                    pour maximiser votre présence en ligne.</p>
                                <a href="details-service.html" class="line-btn">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service 7 -->
                    <div class="swiper-slide">
                        <div class="service-item th-ani">
                            <div class="service-item_icon">
                                <img src="/assets/img/icon/service_2_3.svg" alt="E-Commerce">
                            </div>
                            <div class="service-item_content">
                                <h3 class="box-title"><a href="details-service.html">Solutions E-Commerce</a></h3>
                                <p class="service-item_text">Création de boutiques en ligne performantes avec
                                    intégration de paiements sécurisés.</p>
                                <a href="details-service.html" class="line-btn">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service 8 -->
                    <div class="swiper-slide">
                        <div class="service-item th-ani">
                            <div class="service-item_icon">
                                <img src="/assets/img/icon/service_2_1.svg" alt="Analyse de Données">
                            </div>
                            <div class="service-item_content">
                                <h3 class="box-title"><a href="details-service.html">Analyse de Données</a></h3>
                                <p class="service-item_text">Exploitez vos données pour des décisions stratégiques
                                    efficaces.</p>
                                <a href="details-service.html" class="line-btn">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service 9 -->
                    <div class="swiper-slide">
                        <div class="service-item th-ani">
                            <div class="service-item_icon">
                                <img src="/assets/img/icon/service_2_1.svg" alt="Cloud Solutions">
                            </div>
                            <div class="service-item_content">
                                <h3 class="box-title"><a href="details-service.html">Solutions Cloud</a></h3>
                                <p class="service-item_text">Stockage sécurisé et services cloud adaptés à vos
                                    besoins.</p>
                                <a href="details-service.html" class="line-btn">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button data-slider-prev="#serviceSlider1" class="slider-arrow slider-prev"><i
                    class="far fa-arrow-left"></i></button>
            <button data-slider-next="#serviceSlider1" class="slider-arrow slider-next"><i
                    class="far fa-arrow-right"></i></button>
        </div>
    </div>
</div>
