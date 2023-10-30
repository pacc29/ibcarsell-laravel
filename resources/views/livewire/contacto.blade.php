<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Rule; 
use App\Jobs\EnviarContactoMail;


new class extends Component {
    
    #[Rule('required|min:3|max:25')]
    public $nombre;

    #[Rule('required|email|unique:users,email')] 
     public $email;

    #[Rule('required|digits:9')]
    public $telefono;
    
    #[Rule('required')]
    public $interes = 'Compra';

    #[Rule('required|min:100|max:500|regex:/^[A-Za-z0-9,;: ]+$/')]
    public $mensaje;

    public function send() {
        $validated = $this->validate();

        // Enviar por correo
        $validated = ['sendTo' => env('CORREO_CONTACTO_IBCARSELL'),
                    ...$validated];

        dispatch(new EnviarContactoMail($validated));

        // Success
        $this->reset();
        session()->flash('success', "Email de contacto enviado satisfactoriamente");   
    }
    
    public function with(): array {
        return [
            'arr' => ['Compra', 'Venta']
        ];
    }
}; ?>

<div>
    <x-alert-message />
    <form wire:submit="send">
        @csrf
        <div class="row my-4">
            <div class="col col-6">
                <x-form-field name="nombre" label="Nombre" classes="d-flex flex-column">
                    <x-input name="nombre" />
                </x-form-field>
            </div>
            <div class="col col-6">
                <x-form-field name="email" label="Email" classes="d-flex flex-column">
                    <x-input name="email" />
                </x-form-field>
            </div>
        </div>

        <div class="row my-4">
            <div class="col col-6">
                <x-form-field name="telefono" label="Telefono" classes="d-flex flex-column">
                    <x-input name="telefono" />
                </x-form-field>

            </div>
            <div class="col col-6">
                <x-form-field name="interes" label="Interés" classes=''>
                    <x-select name="interes" model=".live.blur">
                        <x-option item="Seleccione..." status="disabled" />
                        <x-slot:list>
                            @foreach ($arr as $item)
                            <x-option :item="$item" />
                            @endforeach
                        </x-slot:list>
                    </x-select>
                </x-form-field>
            </div>
        </div>

        <div class="row my-4">
            <x-form-field name="mensaje" label="Mensaje" classes=''>
                <x-textarea name="mensaje" />
            </x-form-field>
        </div>

        <x-button>Enviar Consulta</x-button>
    </form>
</div>