<?php

use Livewire\Volt\Component;
use App\Livewire\Forms\VehiculoForm;
use App\Models\Modelo;
use App\Models\Condicion;
use App\Models\Marca;
use App\Models\Carroceria;
use App\Models\Transmision;
use App\Models\Combustible;
use App\Models\Traccion;
use App\Models\Ubicacion;
use App\Models\Vehiculo;
use Livewire\WithFileUploads;

new class extends Component {
    use WithFileUploads;

    public VehiculoForm $form;
    public $modelos = [];
    
    public function handleModelo() {
        $this->reset(['form.modelo_id']);
        $this->modelos = Modelo::where('marca_id', $this->form->marca_id)->get();
    }

    // public function updatedFormArchivos() {
    //     $this->validateOnly('form.archivos');
    // }
    
    public function updatedFormFechaFabricacion() {
        $this->validateOnly('form.fecha_fabricacion');
    }
    
    public function updatedFormFechaModelo() {
        $this->validateOnly('form.fecha_modelo');
    }
    
    public function send() {
        $this->validate();
        $form = $this->form->all();
        $vehiculo = Vehiculo::create($form);

        Vehiculo::saveImg($this->form->archivos, "public/images/imagenes_vehiculos/{$vehiculo->id}", true);      

        $this->form->reset();
        session()->flash('success', "Vehículo creado satisfactoriamente");
    }

    public function with(): array {
        return [
            'condiciones' => Condicion::all(),
            'marcas' => Marca::all(),
            'carrocerias' => Carroceria::all(),
            'transmisiones' => Transmision::all(),
            'combustibles' => Combustible::all(),
            'tracciones' => Traccion::all(),
            'ubicaciones' => Ubicacion::all(),
        ];
    }
}; ?>

<div>
    <x-alert-message />
    <form wire:submit="send" class="card px-4 pb-4">
        @csrf
        <div class="row justify-content-center mb-5">
            <x-form-field name="form.placa" label="Placa" classes="d-flex flex-column align-items-start col col-4">
                <x-input name="form.placa" />
            </x-form-field>

            <x-form-field name="form.descripcion" label="Descripción"
                classes="d-flex flex-column align-items-start col col-4">
                <x-input name="form.descripcion" />
            </x-form-field>

            <x-form-field name="form.cilindros" label="Cilindros"
                classes="d-flex flex-column align-items-start col col-4">
                <x-input name="form.cilindros" />
            </x-form-field>
        </div>

        <div class="row justify-content-center mb-5">
            <x-form-field name="form.kilometraje" label="Kilometraje"
                classes="d-flex flex-column align-items-start col col-4">
                <x-input name="form.kilometraje" />
            </x-form-field>

            <x-form-field name="form.fecha_fabricacion" label="Año de fabricación"
                classes="d-flex flex-column align-items-start col col-4">
                <x-input name="form.fecha_fabricacion" />
            </x-form-field>

            <x-form-field name="form.fecha_modelo" label="Año del modelo"
                classes="d-flex flex-column align-items-start col col-4">
                <x-input name="form.fecha_modelo" />
            </x-form-field>
        </div>

        <div class="row justify-content-center mb-5">
            <x-form-field name="form.precio" label="Precio" classes="d-flex flex-column align-items-start col col-4">
                <x-input name="form.precio" />
            </x-form-field>

            <x-form-field name="form.cilindrada" label="Cilindrada"
                classes="d-flex flex-column align-items-start col col-4">
                <x-input name="form.cilindrada" />
            </x-form-field>

            <x-form-field name="form.puertas" label="Puertas" classes="d-flex flex-column align-items-start col col-4">
                <x-input name="form.puertas" />
            </x-form-field>
        </div>

        <div class="row justify-content-center mb-5">
            <x-form-field name="form.condicion_id" label="Condición"
                classes="d-flex flex-column align-items-start col col-4">
                <x-select model=".live.debounce.250ms" name="form.condicion_id">
                    <x-option value=" " item="Condición" />
                    <x-slot:list>
                        @foreach ($condiciones as $condicion)
                        <x-option :value="$condicion->id" :item="$condicion->condicion" />
                        @endforeach
                    </x-slot:list>
                </x-select>
            </x-form-field>

            <x-form-field name="form.marca_id" label="Marca" classes="d-flex flex-column align-items-start col col-4">
                <x-select wire:change.prevent="handleModelo" name="form.marca_id">
                    <x-option value=" " item="Marca" />
                    <x-slot:list>
                        @foreach ($marcas as $marca)
                        <x-option :value="$marca->id" :item="$marca->marca" />
                        @endforeach
                    </x-slot:list>
                </x-select>
            </x-form-field>

            <x-form-field name="form.modelo_id" label="Modelo" classes="d-flex flex-column align-items-start col col-4">
                <x-select model=".live.debounce.250ms" name="form.modelo_id"
                    :status="$form->marca_id ? '' : 'disabled'">
                    <x-option value=" " item="Modelo" />
                    <x-slot:list>
                        @if(!empty($modelos))
                        @foreach ($modelos as $modelo)
                        <x-option :value="$modelo->id" :item="$modelo->modelo" />
                        @endforeach
                        @endif
                    </x-slot:list>
                </x-select>
            </x-form-field>
        </div>

        <div class="row justify-content-center mb-5">
            <x-form-field name="form.carroceria_id" label="Carrocería"
                classes="d-flex flex-column align-items-start col col-4">
                <x-select model=".live.debounce.250ms" name="form.carroceria_id">
                    <x-option value=" " item="Carrocería" />
                    <x-slot:list>
                        @foreach ($carrocerias as $carroceria)
                        <x-option :value="$carroceria->id" :item="$carroceria->carroceria" />
                        @endforeach
                    </x-slot:list>
                </x-select>
            </x-form-field>

            <x-form-field name="form.transmision_id" label="Transmisión"
                classes="d-flex flex-column align-items-start col col-4">
                <x-select model=".live.debounce.250ms" name="form.transmision_id">
                    <x-option value=" " item="Transmisión" />
                    <x-slot:list>
                        @foreach ($transmisiones as $transmision)
                        <x-option :value="$transmision->id" :item="$transmision->transmision" />
                        @endforeach
                    </x-slot:list>
                </x-select>
            </x-form-field>

            <x-form-field name="form.combustible_id" label="Combustible"
                classes="d-flex flex-column align-items-start col col-4">
                <x-select model=".live.debounce.250ms" name="form.combustible_id">
                    <x-option value=" " item="Combustible" />
                    <x-slot:list>
                        @foreach ($combustibles as $combustible)
                        <x-option :value="$combustible->id" :item="$combustible->combustible" />
                        @endforeach
                    </x-slot:list>
                </x-select>
            </x-form-field>
        </div>

        <div class="row justify-content-center mb-5">
            <x-form-field name="form.traccion_id" label="Tracción"
                classes="d-flex flex-column align-items-start col col-4">
                <x-select model=".live.debounce.250ms" name="form.traccion_id">
                    <x-option value=" " item="Tracción" />
                    <x-slot:list>
                        @foreach ($tracciones as $traccion)
                        <x-option :value="$traccion->id" :item="$traccion->traccion" />
                        @endforeach
                    </x-slot:list>
                </x-select>
            </x-form-field>

            <x-form-field name="form.ubicacion_id" label="Ubicación"
                classes="d-flex flex-column align-items-start col col-4">
                <x-select model=".live.debounce.250ms" name="form.ubicacion_id">
                    <x-option value=" " item="Ubicación" />
                    <x-slot:list>
                        @foreach ($ubicaciones as $ubicacion)
                        <x-option :value="$ubicacion->id" :item="$ubicacion->ubicacion" />
                        @endforeach
                    </x-slot:list>
                </x-select>
            </x-form-field>

            <x-form-field name="form.archivos" label="Subir archivos"
                classes="d-flex flex-column align-items-start col col-4">
                <x-input name="form.archivos" type="file" />
                @error("form.archivos.*")
                <x-error-message :message="$errors->first('form.archivos.*')" />
                @enderror
            </x-form-field>
        </div>
        
        <x-prev-images :form="$form" />

        <x-button>Guardar nuevo auto</x-button>
    </form>
</div>