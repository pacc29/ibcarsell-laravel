<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Rule; 


new class extends Component {
    #[Rule('required|email')] 
    public $email;

     #[Rule('required')] 
     public $password;

     public function attemptLogin() {   
        $validated = $this->validate();
        if(auth()->attempt($validated)) {
            session()->regenerate();
            return redirect()->route('inicio');
        } else {
            $this->reset();
            session()->flash('fail', "Credenciales Incorrectas");
        }
     }
}; ?>

<div>
    <x-alert-message />
    <form wire:submit="attemptLogin" class="card px-4 pb-4">
        @csrf
        <x-form-field name="email" label="Email" classes="my-4">
            <x-input name="email" />
        </x-form-field>

        <x-form-field name="password" label="Contraseña" classes="my-4">
            <x-input name="password" type="password" />
        </x-form-field>

        <x-button>LOGIN</x-button>

    </form>
</div>