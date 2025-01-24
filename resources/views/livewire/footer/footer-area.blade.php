<?php

use function Livewire\Volt\{state};

//

?>

<div class="footer-wrapper footer-layout3">
    <div class="container">
        <!-- Newsletter Section -->
        <div class="footer-top">
            <div class="row gx-0 align-items-center">
                <div class="col-xl">
                    <div class="footer-newsletter">
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
                <div class="row justify-content-between">
                    <!-- About Section -->
                    <div class="col-md-6 col-lg-3">
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
                    <div class="col-md-6 col-lg-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Contactez-nous</h3>
                            <div class="th-widget-about">
                                <div class="footer-info">
                                    <p class="footer-info_text">
                                        <a href="tel:+2430000000" class="text-inherit">+243 000 000 000</a>
                                    </p>
                                </div>
                                <p class="footer-info"><a class="text-inherit"
                                        href="mailto:contact@votreentreprise.com">contact@votreentreprise.com</a>
                                </p>
                                <p class="footer-info">123 Avenue de l'Innovation, Kinshasa, RDC</p>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="col-md-6 col-lg-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Liens rapides</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="services.html">Nos Services</a></li>
                                    <li><a href="about.html">À propos</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- App Download -->
                    <div class="col-md-6 col-lg-auto">
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
            <div class="row gy-2 align-items-center">
                <div class="col-lg-6">
                    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2025 <a
                            href="home.html">VotreEntreprise</a>. Tous droits réservés.</p>
                </div>
                <div class="text-center col-lg-6 text-md-end">
                    <ul class="footer-menu">
                        <li><a href="services.html">Services</a></li>
                        <li><a href="about.html">À propos</a></li>
                        <li><a href="contact.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup" data-top="0%" data-left="0%"><img src="/assets/img/shape/footer_shape_1.png" alt="shape">
    </div>
    <div class="shape-mockup d-none d-xl-block" data-top="0%" data-right="0%"><img
            src="/assets/img/shape/footer_shape_2.png" alt="shape"></div>
</class>
