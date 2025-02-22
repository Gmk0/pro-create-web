<?php

use function Livewire\Volt\{state};

//

?>

<div class="footer-wrapper footer-layout3">
    <div class="container px-8">
        <!-- Newsletter Section -->
        <div class="footer-top">
            <div class="w-full">
                <div class="">
                    <div class="flex flex-col items-center justify-between md:flex-row footer-newsletter">
                        <div class="footer-newsletter-content">
                            <h2 class="newsletter-title">Inscrivez-vous pour recevoir nos mises à jour</h2>
                        </div>
                        <form class="newsletter-form">
                            <i class="fa-sharp fa-light fa-envelope"></i>
                            <input class="form-control" type="email" placeholder="Votre adresse email" required="">
                            <button type="submit" class="th-btn">S'abonner</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Widgets -->
        <div class="widget-area">
            <div class="container">
                <div class="flex flex-col justify-between md:flex-row">
                    <!-- About Section -->
                    <div class="w-auto md:w-6/12 lg:w-3/12 ">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">À propos de nous</h3>
                            <div class="th-widget-about">
                                <p class="footer-text">Nous offrons des solutions technologiques innovantes et
                                    personnalisées pour accompagner la transformation digitale de votre entreprise.
                                </p>
                                <div class="th-social">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="w-auto md:w-6/12">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Contactez-nous</h3>
                            <div class="th-widget-about">
                                <div class="footer-info">
                                    <p class="footer-info_text">
                                        <a href="tel:+2430000000" class="text-inherit">+243 813657847</a>
                                    </p>
                                </div>
                                <p class="footer-info"><a class="text-inherit"
                                        href="mailto:contact@votreentreprise.com">contact@pro-create-drc.com</a>
                                </p>
                                <p class="footer-info">32 avenue du stade, Kinshasa, RDC</p>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="w-auto md:w-6/12">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Liens rapides</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{route('services')}}">Nos Services</a></li>
                                    <li><a href="{{route('about')}}">À propos</a></li>
                                    <li><a href="{{route('blog')}}">Blog</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- App Download -->
                    <div class="hidden col-md-6 col-lg-auto">
                        <div class="widget widget_offer footer-widget">
                            <h3 class="widget_title">Téléchargez notre application</h3>
                            <div class="download-btn-wrap">
                                <div class="mb-10">
                                    <a target="_blank" href="https://play.google.com/" class="download-btn">
                                        <img src="/assets/img/normal/google-play.png" alt="Google Play">
                                    </a>
                                </div>
                                <div>
                                    <a target="_blank" href="https://www.apple.com/store" class="download-btn">
                                        <img src="/assets/img/normal/app.png" alt="Apple Store">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="copyright-wrap">
            <div class="flex flex-col items-center md:flex-row gy-2">
                <div class="lg:w-6/12">
                    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2025 <a
                            href="/">PRO-CREATE</a>. Tous droits réservés.</p>
                </div>
                <div class="text-center lg:w-6/12 md:text-end">
                    <ul class="footer-menu">
                        <li><a href="{{route('services')}}">Services</a></li>
                        <li><a href="{{route('about')}}">À propos</a></li>
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup" data-top="0%" data-left="0%"><img src="/assets/img/shape/footer_shape_1.png" alt="shape"></div>
        <div class="shape-mockup d-none d-xl-block" data-top="0%" data-right="0%"><img
            src="/assets/img/shape/footer_shape_2.png" alt="shape">
        </div>
</div>
