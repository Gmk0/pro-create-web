<?php

use function Livewire\Volt\{state};

//

?>

<div>

    <x-breadcumb-wrapper title="a propos de nous" />

   <div class="overflow-hidden bg-white about-area4 space" id="about-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="img-box1">
                    <div class="img1 th-anim global-img">
                        <img src="assets/img/normal/about_1.jpg" alt="Équipe IT">
                    </div>
                    <div class="img2 th-anim global-img jump">
                        <img src="assets/img/normal/about_2.jpg" alt="Solutions digitales">
                    </div>
                    <div class="about-shape"></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-content-area ps-xl-4 ms-xl-2">
                    <div class="title-area mb-35">
                        <span class="sub-title">Notre expertise</span>
                        <h2 class="sec-title">Simplifiez votre transformation digitale avec notre expertise</h2>
                        <p class="">Nous accompagnons les entreprises dans leur mutation technologique, des PME aux
                            grands groupes. Notre objectif : proposer des solutions sur mesure qui accélèrent votre
                            croissance et sécurisent vos opérations.</p>
                    </div>
                    <div class="about-counter-wrapper">
                        <div class="th-experience style2">
                            <div class="th-experience_content">
                                <h2 class="experience-year"><span class="counter-number">5</span>+</h2>
                                <p class="experience-text">Ans d'expertise</p>
                            </div>
                        </div>

                        <div class="checklist">
                            <ul>
                                <li>Solutions cloud et infrastructure sécurisées</li>
                                <li>Cybersécurité sur-mesure pour votre activité</li>
                                <li>Intégration d'ERP et outils de gestion</li>
                                <li>Automatisation des processus métiers</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-40 btn-group justify-content-start">
                        <a href="about.html" class="th-btn">Démarrer maintenant</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--==============================
    Counter Area
    ==============================-->
    <div class="bg-theme ">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 counter-card-wrap style2">
                    <div class="counter-card style2">
                        <div class="box-icon">
                            <img src="assets/img/icon/counter_card_2_1.svg" alt="Icon">
                        </div>
                        <div class="media-body">
                            <h2 class="text-white box-number"><span class="counter-number">40</span>+</h2>
                            <p class="text-white box-text">Our Total Products</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap style2">
                    <div class="counter-card style2">
                        <div class="box-icon">
                            <img src="assets/img/icon/counter_card_2_2.svg" alt="Icon">
                        </div>
                        <div class="media-body">
                            <h2 class="text-white box-number"><span class="counter-number">200</span>+</h2>
                            <p class="text-white box-text">Team Members</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap style2">
                    <div class="counter-card style2">
                        <div class="box-icon">
                            <img src="assets/img/icon/counter_card_2_3.svg" alt="Icon">
                        </div>
                        <div class="media-body">
                            <h2 class="text-white box-number"><span class="counter-number">68</span>+</h2>
                            <p class="text-white box-text">Satisfied Customers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap style2">
                    <div class="counter-card style2">
                        <div class="box-icon">
                            <img src="assets/img/icon/counter_card_2_4.svg" alt="Icon">
                        </div>
                        <div class="media-body">
                            <h2 class="text-white box-number"><span class="counter-number">99</span>+</h2>
                            <p class="text-white box-text">Awards Winning</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Video Area
    ==============================-->
  <!-- ============================== -->
<div class="space" data-bg-src="assets/img/bg/video_bg_1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="text-center title-area">
                    <span class="sub-title">Regarder la vidéo</span>
                    <h2 class="sec-title">Nous aidons nos clients à concrétiser leurs idées d'entreprise et à obtenir
                        d'excellents résultats</h2>
                </div>
            </div>
        </div>
        <div class="video-box1 th-anim">
            <img src="assets/img/normal/video_1.jpg" alt="vidéo">
            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video">
                <i class="fa-sharp fa-solid fa-play"></i>
            </a>
        </div>
    </div>
</div>
    <!--==============================
    Team Area
    ==============================-->
    <section class="team-area d-none">
        <div class="container z-index-common">
            <div class="row justify-content-lg-between justify-content-center align-items-end">
                <div class="col-xxl-4 col-xl-6">
                    <div class="text-center title-area text-lg-start">
                        <span class="sub-title style1">Team Members</span>
                        <h2 class="sec-title">Meet some of our 80+ team members</h2>
                    </div>
                </div>
                <div class="col-lg-auto d-none d-xl-block">
                    <div class="sec-btn">
                        <div class="icon-box">
                            <button data-slider-prev="#teamSlider1" class="slider-arrow default"><i
                                    class="far fa-arrow-left"></i></button>
                            <button data-slider-next="#teamSlider1" class="slider-arrow default"><i
                                    class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="teamSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img">
                                    <img src="assets/img/team/team_1_1.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="team-details.html">David London</a></h3>
                                        <span class="team-desig">Marketer</span>
                                    </div>
                                    <div class="th-social">
                                        <a target="_blank" href="https://facebook.com/"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i
                                                class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img">
                                    <img src="assets/img/team/team_1_2.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="team-details.html">Jasmin Mentara</a></h3>
                                        <span class="team-desig">Designer</span>
                                    </div>
                                    <div class="th-social">
                                        <a target="_blank" href="https://facebook.com/"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i
                                                class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img">
                                    <img src="assets/img/team/team_1_3.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="team-details.html">Danial Facundo</a></h3>
                                        <span class="team-desig">CEO, of Founder</span>
                                    </div>
                                    <div class="th-social">
                                        <a target="_blank" href="https://facebook.com/"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i
                                                class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img">
                                    <img src="assets/img/team/team_1_4.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="team-details.html">Ema Margret</a></h3>
                                        <span class="team-desig">Developer</span>
                                    </div>
                                    <div class="th-social">
                                        <a target="_blank" href="https://facebook.com/"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i
                                                class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img">
                                    <img src="assets/img/team/team_1_1.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="team-details.html">Henry Haninkot</a></h3>
                                        <span class="team-desig">Head Manager</span>
                                    </div>
                                    <div class="th-social">
                                        <a target="_blank" href="https://facebook.com/"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i
                                                class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Testimonial Area
    ==============================-->


    @livewire("service.testimonial-area")
</div>
