<?php
use function Livewire\Volt\{state};


?>

<div class="space" data-bg-src="/assets/img/about_us/collabo3.png">
        <div class="container">
            <div class="row align-items-center">
                <!-- Texte de présentation -->
                <div class="col-xl-6">
                    <div class="title-area mb-30 text-xl-start">
                        <span class="sub-title style1">Collaborons Ensemble</span>
                        <h2 class="text-white sec-title">Demandez une consultation gratuite dès aujourd'hui</h2>
                        <p class="sec-text">
                            Nous sommes là pour répondre à toutes vos questions et vous aider à identifier les solutions
                            adaptées à vos besoins numériques.
                        </p>
                    </div>
                    <div class="feature-wrapper style3">
                        <div class="feature-icon">
                            <a href="tel:+1234567890"><img src="/assets/img/icon/call_2.svg" alt="Icône téléphone"></a>
                        </div>
                        <div class="media-body">
                            <span class="header-info_label">Appelez-nous au :</span>
                            <p class="header-info_link"><a href="tel:+1234567890">+123 456 7890</a></p>
                        </div>
                    </div>
                    <div class="work-area">
                        <h5 class="text-white box-title mb-30">Comment ça fonctionne ?</h5>
                        <div class="work-item_wrapper">
                            <div class="work-item">
                                <span class="work-item_number">01</span>
                                <p class="work-text">Programmez un appel avec notre équipe.</p>
                            </div>
                            <div class="work-item">
                                <span class="work-item_number">02</span>
                                <p class="work-text">Nous analysons vos besoins et objectifs.</p>
                            </div>
                            <div class="work-item">
                                <span class="work-item_number">03</span>
                                <p class="work-text">Nous vous proposons une solution personnalisée.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Formulaire de contact -->
                <div class="col-xl-6 ">
                    <div class="appointment-area-wrapp">
                        <h6 class="title">Remplissez les informations ci-dessous</h6>
                        <form action="mail.php" method="POST" class="appointment-form3 input-smoke ajax-contact">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nom*</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Votre nom">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Adresse e-mail*</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Votre email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Numéro de téléphone*</label>
                                    <input type="tel" class="form-control" name="phone" id="phone"
                                        placeholder="Votre téléphone">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="website">Site web de votre entreprise</label>
                                    <input type="text" class="form-control" name="website" id="website"
                                        placeholder="www.votreentreprise.com">
                                </div>
                                <div class="form-group col-12">
                                    <label for="organization">Votre entreprise/organisation*</label>
                                    <input type="text" class="form-control" name="organization" id="organization"
                                        placeholder="Nom de votre entreprise">
                                </div>
                                <div class="form-group col-12">
                                    <label for="message">Décrivez votre demande*</label>
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                        placeholder="Dites-nous comment nous pouvons vous aider"></textarea>
                                </div>
                                <div class="form-btn col-12">
                                    <button class="th-btn btn-fw">Envoyer ma demande</button>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 form-messages"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
