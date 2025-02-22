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


<div class="bg-center bg-cover space" style="background-image: url('/assets/img/about_us/collabo3.png');">
    <div class="p-3 mx-auto max-w-7xl md:p-0">
        <div class="flex flex-col items-center px-8 mx-auto md:flex-row">
            <!-- Texte de présentation -->
            <div class="w-full md:w-1/2">
                <div class="text-left title-area">
                    <span class="sub-title style1">Collaborons Ensemble</span>
                    <h2 class="text-3xl font-bold text-white">Demandez une consultation gratuite dès aujourd'hui</h2>
                    <p class="mt-2 sec-text">
                        Nous sommes là pour répondre à toutes vos questions et vous aider à identifier les solutions
                        adaptées à vos besoins numériques.
                    </p>
                </div>
                <div class="flex items-center mt-6 feature-wrapper style3">
                    <div class="flex items-center justify-center feature-icon">
                        <a href="tel:+1234567890"><img src="/assets/img/icon/call_2.svg" class="" alt="Icône téléphone"></a>
                    </div>
                    <div class="ml-4">
                        <span class="header-info_label">Appelez-nous ou écrivez-nous au :</span>
                        <p class="header-info_link"><a href="tel:+1234567890">+243 813757847</a></p>
                    </div>
                </div>

                <div class="mt-6 work-area">
                    <h5 class="mb-6 text-lg font-semibold text-white">Comment ça fonctionne ?</h5>
                    <div class="space-y-4 work-item_wrapper">
                        <div class="flex items-center work-item">
                            <span class="flex items-center justify-center text-xl font-bold work-item_number">01</span>
                            <p class="ml-3 work-text">Programmez un appel avec notre équipe.</p>
                        </div>
                        <div class="flex items-center work-item">
                            <span class="flex items-center justify-center text-xl font-bold work-item_number">02</span>
                            <p class="ml-3 work-text">Nous analysons vos besoins et objectifs.</p>
                        </div>
                        <div class="flex items-center work-item">
                            <span class="flex items-center justify-center text-xl font-bold work-item_number">03</span>
                            <p class="ml-3 work-text">Nous vous proposons une solution personnalisée.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulaire de contact -->
            <div class="w-full mt-10 md:w-1/2 md:mt-0">
                <div class="bg-white rounded-lg shadow-lg md:p-3 appointment-area-wrapp">
                    <h6 class="mb-4 text-base font-semibold md:text-lg title">Remplissez les informations ci-dessous</h6>
                    <form wire:submit.prevent='save' class="space-y-4 appointment-form3 input-smoke">
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                            <div class="form-group">
                                <label for="name">Nom*</label>
                                <input type="text" class="w-full form-control" wire:model='form.name' id="name"
                                    placeholder="Votre nom">
                                @error('form.name') <span class="text-sm text-red-500 error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Adresse e-mail*</label>
                                <input type="email" class="w-full form-control" wire:model='form.email' id="email"
                                    placeholder="Votre email">
                                @error('form.email') <span class="text-sm text-red-500 error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone">Numéro de téléphone*</label>
                                <input type="tel" class="w-full form-control" wire:model='form.phone' id="phone"
                                    placeholder="Votre téléphone">
                                @error('form.phone') <span class="text-sm text-red-500 error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="website">Votre entreprise/organisation*</label>
                                <input type="text" class="w-full form-control" wire:model='form.entreprise' id="website"
                                    placeholder="www.votreentreprise.com">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="message">Décrivez votre demande*</label>
                            <textarea name="message" wire:model='form.messages' id="message" cols="30" rows="3"
                                class="w-full form-control"
                                placeholder="Dites-nous comment nous pouvons vous aider"></textarea>
                        </div>

                        <div class="form-btn">
                            <button type="submit" class="w-full py-2 th-btn btn-fw" wire:loading.attr="disabled">
                                <span wire:loading.remove>Envoyer ma demande</span>
                                <span wire:loading>Envoi en cours...</span>
                            </button>
                        </div>

                        @if($isSend)
                        <p id="successMessage" class="mt-3 mb-0 font-semibold text-green-600">
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
            setTimeout(() => {
                let message = document.getElementById("successMessage");
                if (message) {
                    message.style.display = "none";
                }
            }, 5000);
        });
    </script>
</div>
