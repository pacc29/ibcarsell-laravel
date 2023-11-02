<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class ContactoForm extends Form
{
    #[Rule('required|min:3|max:25')]
    public $nombre = '';

    #[Rule('required|email|unique:users,email')] 
     public $email = '';

    #[Rule('required|digits:9')]
    public $telefono = '';
    
    #[Rule('required')]
    public $interes = 'Compra';

    #[Rule('required|min:100|max:500|regex:/^[A-Za-z0-9,;: ]+$/')]
    public $mensaje = '';
}
