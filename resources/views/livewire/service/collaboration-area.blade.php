<?php
use function Livewire\Volt\{state,rules};
//use App\Livewire\Forms\ContactForm;

//form(ContactForm::class);

state(['form'=>[], 'isSend'=>false]);

rules([
'form.name' => 'required|min:6',
'form.email' => 'required|email',
'form.phone' => 'required'
])->messages([
'form.name.required' => 'Le champ :attribute ne peut pas être vide.',
'form.name.min' => 'Le champ :attribute doit contenir au moins 6 caractères.',
'form.email.required' => 'Le champ :attribute ne peut pas être vide.',
'form.email.email' => 'Le format de :attribute est invalide.',
'form.phone.required' => 'Le champ :attribute ne peut pas être vide.'
])->attributes([
'form.email' => 'adresse e-mail',
'form.name' => 'votre nom',
'form.phone' => 'numéro de téléphone'
]);

$save = function () {
    $this->validate();
    try{

        \App\Models\Contact::create($this->form);
        $this->form=[];

        $this->isSend=true;

       $this->dispatch('hideMessage', ['delay' => 10000]);
    }catch(\Exception $e){

    }
    // ...
};


?>

<div class="space" data-bg-src="/assets/img/about_us/collabo3.png" style="background-image: url(/assets/img/about_us/collabo3.png);">
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
                            <span class="header-info_label">Appelez-nous ou ecrivez nous au :</span>
                            <p class="header-info_link"><a href="tel:+1234567890">+243 813757847</a></p>
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
                        <form wire:submit.prevent='save' class="appointment-form3 input-smoke">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nom*</label>
                                    <input type="text" class="form-control" wire:model='form.name'  id="name" placeholder="Votre nom">
                                    @error('form.name') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Adresse e-mail*</label>
                                    <input type="email" class="form-control" wire:model='form.email'  id="email"
                                        placeholder="Votre email">

                                        @error('form.email') <span class="error">{{ $message }}</span> @enderror

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Numéro de téléphone*</label>
                                    <input type="tel" class="form-control" wire:model='form.phone'  id="phone"
                                        placeholder="Votre téléphone">

                                        @error('form.phone') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="website">Votre entreprise/organisation*</label>
                                    <input type="text" class="form-control" wire:model='form.entreprise'  id="website"
                                        placeholder="www.votreentreprise.com">
                                </div>

                                <div class="form-group col-12">
                                    <label for="message">Décrivez votre demande*</label>
                                    <textarea name="message" wire:model='form.messages' id="message" cols="30" rows="3" class="form-control"
                                        placeholder="Dites-nous comment nous pouvons vous aider"></textarea>


                                </div>
                                <div class="form-btn col-12">
                                    <button type="submit" class="th-btn btn-fw" wire:loading.attr="disabled">
                                        <span wire:loading.remove>Envoyer ma demande</span>
                                        <span wire:loading>Envoi en cours...</span>
                                    </button>
                                </div>
                            </div>

                          @if($isSend)
                        <p id="successMessage" class="mt-3 mb-0 success">
                            Votre message a été envoyé avec succès. Nous vous répondrons dans les plus brefs délais.
                        </p>

                        @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            window.addEventListener('hideMessage', event => {

               // alert('ok');
                setTimeout(() => {
                    let message = document.getElementById("successMessage");
                    if (message) {
                        message.style.display = "none";
                    }
                }, 50000);
            });
        </script>
    </div>
