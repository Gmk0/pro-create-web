<?php

namespace App\Livewire\Forms;

use App\Models\Contact;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactForm extends Form
{

    #[Validate('required|min:5')]
    public $name = '';

    #[Validate('required|email')]
    public $email = '';

    #[Validate('required|min:13')]
    public $phone = '';

    #[Validate('required')]
    public $messages = '';

   // public $entreprise = '';

    public function store()
    {

        dd($this->all());
       // $this->validate();

       // Contact::create($this->all());
    }


    //
}
