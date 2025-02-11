<?php

use function Livewire\Volt\{state};

//

?>

<div>

    <x-breadcumb-wrapper title="Contact" />
    <!--==============================
    Contact Area
    ==============================-->
  <div class="space-top space-extra-bottom">
    <div class="container">
        <div class="flex-row-reverse row gy-40">
            <div class="col-lg-6 col-xl-7">
                <form action="mail.php" method="POST" class="contact-form input-smoke ajax-contact">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Votre Nom">
                            <i class="fal fa-user"></i>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Adresse Email">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="tel" class="form-control" name="number" id="number"
                                placeholder="Numéro de Téléphone">
                            <i class="fal fa-phone"></i>
                        </div>
                        <div class="form-group col-md-6">
                            <select name="subject" id="subject" class="form-select nice-select">
                                <option value="" disabled selected hidden>Sélectionner un Service</option>
                                <option value="Développement Web">Développement Web</option>
                                <option value="Cybersécurité">Cybersécurité</option>
                                <option value="Développement d'Applications">Développement d'Applications</option>
                                <option value="Services Cloud">Services Cloud</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                placeholder="Votre Message"></textarea>
                            <i class="fal fa-pencil"></i>
                        </div>
                        <div class="form-btn col-12">
                            <button class="th-btn">Envoyer le Message</button>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 form-messages"></p>
                </form>
            </div>
            <div class="col-lg-6 col-xl-5">
                <div class="contact-info-wrap">
                    <div class="mb-10 title-area mt-n2">
                        <span class="sub-title style1">Contactez-nous</span>
                        <h3 class="sec-title">Travaillons ensemble</h3>
                        <p class="">Merci pour votre intérêt envers Pro create. Nous sommes ravis de vous
                            entendre et de discuter...</p>
                    </div>
                    <div class="contact-info">
                        <div class="contact-info_icon"><i class=""><img src="assets/img/icon/phone.svg" alt=""></i>
                        </div>
                        <div class="media-body">
                            <span class="contact-info_title">Appelez-nous pour toute question</span>
                            <span class="contact-info_text"><a href="tel:+243813657847">(+243)813657847</a></span>
                        </div>
                    </div>
                    <div class="contact-info">
                        <div class="contact-info_icon"><i class=""><img src="assets/img/icon/message.svg" alt=""></i>
                        </div>
                        <div class="media-body">
                            <span class="contact-info_title">Envoyez un email à tout moment</span>
                            <span class="contact-info_text"><a
                                    href="mailto:contact@pro-create-drc.com">contact@pro-create-drc.com</a></span>
                        </div>
                    </div>
                    <div class="contact-info">
                        <div class="contact-info_icon"><i class=""><img src="assets/img/icon/location.svg" alt=""></i>
                        </div>
                        <div class="media-body">
                            <span class="contact-info_title">Visitez notre bureau</span>
                            <span class="contact-info_text">15 Maniel Lane, Front Line Berlin</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--==============================
    Map Area
    ==============================-->
    <div class="space-bottom">
        <div class="container">
            <div class="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuztheme!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
                    allowfullscreen="" loading="lazy"></iframe>
                <div class="contact-icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
            </div>
        </div>
    </div>
</div>
