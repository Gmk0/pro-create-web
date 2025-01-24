<?php

use function Livewire\Volt\{state};

//

?>


<div class="overflow-hidden bg-white space">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="text-center title-area mb-50 text-md-start">
                    <span class="sub-title style1">Études de cas</span>
                    <h2 class="sec-title">Nos projets qui inspirent confiance</h2>
                </div>
                <div class="project-btn">
                    <a href="projets.html" class="th-btn blue-border">Voir tous les projets</a>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="slider-area project-slider2">
                    <div class="swiper th-slider has-shadow" id="projectSlider1"
                        data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
                        <div class="swiper-wrapper">
                            <!-- Exemple 1 -->
                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="project-img">
                                        <img src="/assets/img/project/project_2_1.jpg" alt="Projet 1">
                                    </div>
                                    <div class="project-content">
                                        <div class="media-body">
                                            <h3 class="box-title"><a href="details-projet.html">Transformation
                                                    Digitale</a></h3>
                                            <div class="project-tags">
                                                <a href="details-projet.html">Stratégie</a>
                                                <a href="details-projet.html">Développement</a>
                                                <a href="details-projet.html">Résultats</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Exemple 2 -->
                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="project-img">
                                        <img src="/assets/img/project/project_2_2.jpg" alt="Projet 2">
                                    </div>
                                    <div class="project-content">
                                        <div class="media-body">
                                            <h3 class="box-title"><a href="details-projet.html">Création d'un
                                                    E-Commerce</a></h3>
                                            <div class="project-tags">
                                                <a href="details-projet.html">Design</a>
                                                <a href="details-projet.html">Solutions Cloud</a>
                                                <a href="details-projet.html">Paiements Sécurisés</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Exemple 3 -->
                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="project-img">
                                        <img src="/assets/img/project/project_2_3.jpg" alt="Projet 3">
                                    </div>
                                    <div class="project-content">
                                        <div class="media-body">
                                            <h3 class="box-title"><a href="details-projet.html">Optimisation des
                                                    Réseaux Sociaux</a></h3>
                                            <div class="project-tags">
                                                <a href="details-projet.html">Marketing</a>
                                                <a href="details-projet.html">Augmentation de la visibilité</a>
                                                <a href="details-projet.html">Engagement</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Exemple 4 -->
                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="project-img">
                                        <img src="/assets/img/project/project_2_4.jpg" alt="Projet 4">
                                    </div>
                                    <div class="project-content">
                                        <div class="media-body">
                                            <h3 class="box-title"><a href="details-projet.html">Développement
                                                    d'Applications Mobiles</a></h3>
                                            <div class="project-tags">
                                                <a href="details-projet.html">iOS</a>
                                                <a href="details-projet.html">Android</a>
                                                <a href="details-projet.html">Applications sur mesure</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button data-slider-prev="#projectSlider1" class="slider-arrow slider-prev"><i
                            class="far fa-arrow-left"></i></button>
                    <button data-slider-next="#projectSlider1" class="slider-arrow slider-next"><i
                            class="far fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
