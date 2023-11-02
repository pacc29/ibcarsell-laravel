<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Rule; 
use App\Jobs\EnviarContactoMail;
use App\Livewire\Forms\ContactoForm;

new class extends Component {

    public ContactoForm $form;

    public function send() {
        $this->validate();
        $form = $this->form->all();

        // Enviar por correo
        $form = ['sendTo' => env('CORREO_CONTACTO_IBCARSELL'),
                    ...$form];

        dispatch(new EnviarContactoMail($form));

        // Success
        $this->form->reset();
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
    <form wire:submit="send" class="card px-4 pb-4">
        @csrf
        <div class="row my-4">
            <div class="col col-6">
                <x-form-field name="form.nombre" label="Nombre" classes="d-flex flex-column">
                    <x-input name="form.nombre" />
                </x-form-field>
            </div>
            <div class="col col-6">
                <x-form-field name="form.email" label="Email" classes="d-flex flex-column">
                    <x-input name="form.email" />
                </x-form-field>
            </div>
        </div>

        <div class="row my-4">
            <div class="col col-6">
                <x-form-field name="form.telefono" label="Telefono" classes="d-flex flex-column">
                    <x-input name="form.telefono" />
                </x-form-field>

            </div>
            <div class="col col-6">
                <x-form-field name="form.interes" label="Interés" classes=''>
                    <x-select name="form.interes" model=".live.debounce.250ms">
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
            <x-form-field name="form.mensaje" label="Mensaje" classes=''>
                <x-textarea name="form.mensaje" />
            </x-form-field>
        </div>

        <x-button>Enviar Consulta</x-button>
    </form>
</div>