<?php

use function Livewire\Volt\{state};

//

?>

<div>
<div class="breadcumb-wrapper " data-bg-src="/assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-web-agency.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
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
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email Address">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="subject" id="subject" class="form-select nice-select">
                                    <option value="" disabled selected hidden>Select Service</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="Cyber Security">Cyber Security</option>
                                    <option value="App Development">App Development</option>
                                    <option value="Cloud Service">Cloud Service</option>
                                    <option value="Cloud Service">Cloud Service</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                    placeholder="Your Message"></textarea>
                                <i class="fal fa-pencil"></i>
                            </div>
                            <div class="form-btn col-12">
                                <button class="th-btn">Send Message</button>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 form-messages"></p>
                    </form>
                </div>
                <div class="col-lg-6 col-xl-5">
                    <div class="contact-info-wrap">
                        <div class="mb-10 title-area mt-n2">
                            <span class="sub-title style1">Contact Us</span>
                            <h3 class="sec-title">Let’s working together</h3>
                            <p class="">Thank you for your interest in Attach Web Agency. We're excited to hear from you and
                                discuss...</p>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon"><i class=""><img src="assets/img/icon/phone.svg" alt=""></i>
                            </div>
                            <div class="media-body">
                                <span class="contact-info_title">Call Us For Query</span><span class="contact-info_text"><a
                                        href="tel:+58125253158">(+58-125) 25-3158</a></span>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon"><i class=""><img src="assets/img/icon/message.svg" alt=""></i>
                            </div>
                            <div class="media-body">
                                <span class="contact-info_title">Email Anytime</span><span class="contact-info_text"><a
                                        href="mailto:info@webteck.chat.com">info@webteck.chat.com</a></span>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon"><i class=""><img src="assets/img/icon/location.svg" alt=""></i>
                            </div>
                            <div class="media-body">
                                <span class="contact-info_title">Visit Our Office</span><span class="contact-info_text">15
                                    Maniel Lane, Front Line Berlin</span>
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
