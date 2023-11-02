<?php

use Livewire\Volt\Component;
use App\Livewire\Forms\VenderForm;
use Livewire\Attributes\Rule; 
use Livewire\WithFileUploads;
use App\Jobs\EnviarVentaMail;
use App\Models\Venta;
use App\Models\Vehiculo;


new class extends Component {

    use WithFileUploads;
    public VenderForm $form;

    public function updatedFormFechaFabricacion() {
        $this->validateOnly('form.fecha_fabricacion');
    }

    // public function updatedFormArchivos() {
    //     $this->validateOnly('form.archivos');
    // }

    public function send() {
        $this->validate();
        $form = $this->form->all();
        $venta = Venta::create($form);

        Vehiculo::saveImg($this->form->archivos, "ventas/{$venta->id}");
        
        unset($form['archivos']);

        $form = [
            'sendTo' => env('CORREO_VENTAS_IBCARSELL'),
            'id' => $venta->id,
            ...$form
        ];

        dispatch(new EnviarVentaMail($form));
        
        $this->form->reset();
        session()->flash('success', "Contacto para venta enviado satisfactoriamente");            
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
                <x-form-field name="form.apellido" label="Apellido" classes="d-flex flex-column">
                    <x-input name="form.apellido" />
                </x-form-field>
            </div>
        </div>

        <div class="row my-4">
            <div class="col col-6">
                <x-form-field name="form.email" label="Email" classes="d-flex flex-column">
                    <x-input name="form.email" />
                </x-form-field>
            </div>
            <div class="col col-6">
                <x-form-field name="form.telefono" label="Telefono" classes="d-flex flex-column">
                    <x-input name="form.telefono" />
                </x-form-field>
            </div>
        </div>

        <div class="row my-4">
            <div class="col col-6">
                <x-form-field name="form.marca" label="Marca" classes="d-flex flex-column">
                    <x-input name="form.marca" />
                </x-form-field>
            </div>
            <div class="col col-6">
                <x-form-field name="form.modelo" label="Modelo" classes="d-flex flex-column">
                    <x-input name="form.modelo" />
                </x-form-field>
            </div>
        </div>

        <div class="row my-4">
            <div class="col col-4">
                <x-form-field name="form.kilometraje" label="Kilometraje" classes="d-flex flex-column">
                    <x-input name="form.kilometraje" />
                </x-form-field>
            </div>
            <div class="col col-4">
                <x-form-field name="form.fecha_fabricacion" label="Año de fabricación" classes="d-flex flex-column">
                    <x-input name="form.fecha_fabricacion" />
                </x-form-field>
            </div>
            <div class="col col-4">
                <x-form-field name="form.placa" label="Placa" classes="d-flex flex-column">
                    <x-input name="form.placa" />
                </x-form-field>
            </div>
        </div>

        <div class="row my-4">
            <x-form-field name="form.mensaje" label="Mensaje" classes=''>
                <x-textarea name="form.mensaje" />
            </x-form-field>
        </div>

        <div class="row my-4">
            <x-form-field name="form.archivos" label="Subir Archivos" classes=''>
                <x-input name="form.archivos" type="file" />
                @error("form.archivos.*")
                <x-error-message :message="$errors->first('form.archivos.*')" />
                @enderror
            </x-form-field>
        </div>

        <x-prev-images :form="$form" />
        
        <x-button>Enviar</x-button>
    </form>
</div>