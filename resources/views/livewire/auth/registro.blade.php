<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Rule; 
use App\Models\User;


new class extends Component {

    #[Rule('required|min:3|max:25')]
    public $nombre;
    
    #[Rule('required|min:3|max:25')] 
    public $apellido;

    #[Rule('required|email|unique:users,email')] 
    public $email;

    #[Rule('required|min:8|confirmed')] 
    public $password;
    
    #[Rule('required|min:8')] 
    public $password_confirmation;
    
    public function save() {
        $validated = $this->validate();
        $user = User::create($validated);
        return redirect()->route('login');
    }
}; ?>

<div>
    <form wire:submit="save" class="card p-4">
        @csrf
        <x-form-field name="nombre" label="Nombre" classes="my-4">
            <x-input name="nombre" />
        </x-form-field>

        <x-form-field name="apellido" label="Apellido" classes="my-4">
            <x-input name="apellido" />
        </x-form-field>

        <x-form-field name="email" label="Email" classes="my-4">
            <x-input name="email" />
        </x-form-field>

        <x-form-field name="password" label="Contraseña" classes="my-4">
            <x-input name="password" type="password" />
        </x-form-field>

        <x-form-field name="password_confirmation" label="Verificar Contraseña" classes="my-4">
            <x-input name="password_confirmation" type="password" />
        </x-form-field>
        
        <x-button>Registrar</x-button>

    </form>
</div>