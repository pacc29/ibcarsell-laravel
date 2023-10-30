<?php

use Livewire\Volt\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;
use App\Models\Vehiculo;

new class extends Component {

    use WithPagination;

    private $vehiculosLista;
    public $vehiculosFiltro;
    public $modelos = [];

    public $condicion = '', $marca = '', $modelo = '', $carroceria = '', $transmision = '', $combustible = '', $traccion = '', $ubicacion = '', $orden = '';
    
    public $minYear = '2000', $maxYear = '2023';
    public $minYearValue = '2000', $maxYearValue = '2023';

    public $minKilometraje = '0', $maxKilometraje = '500000';
    public $minKilometrajeValue = '0', $maxKilometrajeValue = '500000';

    public $minPrecio = '0', $maxPrecio = '50000';
    public $minPrecioValue = '0', $maxPrecioValue = '50000';

    public function actualizaListado() {
        $atributos = [
            'condicion' => $this->condicion,
            'marca' => $this->marca,
            'modelo' => $this->modelo,
            'carroceria' => $this->carroceria,
            'transmision' => $this->transmision,
            'combustible' => $this->combustible,
            'traccion' => $this->traccion,
            'ubicacion' => $this->ubicacion,
            'orden' => $this->orden,
            'minYear' => $this->minYearValue,
            'maxYear' => $this->maxYearValue,
            'minKilometraje' => $this->minKilometrajeValue,
            'maxKilometraje' => $this->maxKilometrajeValue,
            'minPrecio' => $this->minPrecioValue,
            'maxPrecio' => $this->maxPrecioValue
        ];
        $this->vehiculosLista = Vehiculo::Search($atributos)->paginate(env('COMPRA_MAX_VEHICULO_DISPLAY'));
        // dd( $this->vehiculosLista);
        
    }

    public function limpiarCampos() {
        $this->reset([
            'condicion', 'marca', 'modelo', 'carroceria', 'transmision', 'combustible', 'traccion', 'ubicacion', 'orden', 'minYear', 'maxYear', 'minKilometraje', 'maxKilometraje', 'minPrecio', 'maxPrecio'
        ]);
        $this->resetPage();
    }

    public function handleModelo() {
        $this->reset(['modelo']);
        $this->modelos = Vehiculo::where('marca_id', $this->marca)->get();
    }

    public function mount() {
        $this->vehiculosFiltro = Vehiculo::all();
    }
    
    public function with(): array {
        $this->actualizaListado();
        return ['vehiculosLista' => $this->vehiculosLista];
    }
}; ?>

<div class="row text-center my-4">
    <div class="col col-3">
        <x-button wire:click.prevent="limpiarCampos" type="" classes="btn btn-success mb-4 btn-limpiar w-100">Limpiar
            Filtros</x-button>

        <div wire:change.prevent="actualizaListado" class="d-flex flex-column justify-content-center align-items-center"
            id="filter-select">
            <x-select name="condicion" classes="select__dropdown mb-4">
                <x-option value=" " item="Condición" />
                <x-slot:list>
                    @foreach ($vehiculosFiltro->unique('condicion') as $vehiculo)
                    <x-option :value="$vehiculo->condicion->id" :item="$vehiculo->condicion->condicion" />
                    @endforeach
                </x-slot:list>
            </x-select>

            <x-select wire:change.prevent="handleModelo" name="marca" classes="select__dropdown mb-4">
                <x-option value=" " item="Marca" />
                <x-slot:list>
                    @foreach ($vehiculosFiltro->unique('marca') as $vehiculo)
                    <x-option :value="$vehiculo->marca->id" :item="$vehiculo->marca->marca" />
                    @endforeach
                </x-slot:list>
            </x-select>

            <x-select name="modelo" classes="select__dropdown mb-4" :status="$marca ? '' : 'disabled'">
                <x-option value=" " item="Modelo" />
                <x-slot:list>
                    @if(!empty($modelos))
                    @foreach ($modelos->unique('modelo') as $vehiculo)
                    <x-option :value="$vehiculo->modelo->id" :item="$vehiculo->modelo->modelo" />
                    @endforeach
                    @endempty
                </x-slot:list>
            </x-select>

            <x-select name="carroceria" classes="select__dropdown mb-4">
                <x-option value=" " item="Carrocería" />
                <x-slot:list>
                    @foreach ($vehiculosFiltro->unique('carroceria') as $vehiculo)
                    <x-option :value="$vehiculo->carroceria->id" :item="$vehiculo->carroceria->carroceria" />
                    @endforeach
                </x-slot:list>
            </x-select>

            <x-select name="transmision" classes="select__dropdown mb-4">
                <x-option value=" " item="Transmisión" />
                <x-slot:list>
                    @foreach ($vehiculosFiltro->unique('transmision') as $vehiculo)
                    <x-option :value="$vehiculo->transmision->id" :item="$vehiculo->transmision->transmision" />
                    @endforeach
                </x-slot:list>
            </x-select>

            <x-select name="combustible" classes="select__dropdown mb-4">
                <x-option value=" " item="Combustible" />
                <x-slot:list>
                    @foreach ($vehiculosFiltro->unique('combustible') as $vehiculo)
                    <x-option :value="$vehiculo->combustible->id" :item="$vehiculo->combustible->combustible" />
                    @endforeach
                </x-slot:list>
            </x-select>

            <x-select name="traccion" classes="select__dropdown mb-4">
                <x-option value=" " item="Tracción" />
                <x-slot:list>
                    @foreach ($vehiculosFiltro->unique('traccion') as $vehiculo)
                    <x-option :value="$vehiculo->traccion->id" :item="$vehiculo->traccion->traccion" />
                    @endforeach
                </x-slot:list>
            </x-select>

            <x-select name="ubicacion" classes="select__dropdown mb-4">
                <x-option value=" " item="Ubicación" />
                <x-slot:list>
                    @foreach ($vehiculosFiltro->unique('ubicacion') as $vehiculo)
                    <x-option :value="$vehiculo->ubicacion->id" :item="$vehiculo->ubicacion->ubicacion" />
                    @endforeach
                </x-slot:list>
            </x-select>

            <div class="sliders" id="sliders">
                <x-double-slider name="Year" placeholder="Año" :min="$minYear" :max="$maxYear" :minValue="$minYearValue"
                    :maxValue="$maxYearValue" step="1" />

                <x-double-slider name="Kilometraje" placeholder="Kilometraje" :min="$minKilometraje"
                    :max="$maxKilometraje" :minValue="$minKilometrajeValue" :maxValue="$maxKilometrajeValue"
                    step="10000" />

                <x-double-slider name="Precio" placeholder="Precio" :min="$minPrecio" :max="$maxPrecio"
                    :minValue="$minPrecioValue" :maxValue="$maxPrecioValue" step="1000" />
            </div>
        </div>
    </div>
    <div class="col col-9">
        <div class="row">
            <div class="d-flex filter_header justify-content-between align-items-center">
                <div class="filter_header__results">
                    <span class="fs-4">Mostrando resultados</span>
                </div>
                <div class="filter_header__order">
                    <x-select name="orden" wire:change.prevent="actualizaListado">
                        <x-option value=" " item="Ordenar Por" />
                        <x-slot:list>
                            <x-option value="p_asc" item="Precio Ascendente" />
                            <x-option value="p_desc" item="Precio Descendente" />
                            <x-option value="a_asc" item="Año Ascendente" />
                            <x-option value="a_desc" item="Año Descendente" />
                        </x-slot:list>
                    </x-select>
                </div>
            </div>
        </div>
        <div class="row" id="lista">
            @forelse ($vehiculosLista as $vehiculo)
            <div id="{{$vehiculo->id}}" class="d-flex list_car">
                <div class="list_car__img">
                    <a href="{{route('detalle-auto', ['id' => $vehiculo->id])}}" wire:navigate><img
                            src="{{ asset('storage/images/imagenes_vehiculos/'.$vehiculo->id.'/principal.jpg') }}"
                            alt="vehiculo_{{$vehiculo->id}}"></a>
                </div>
                <div class="list_car__description">
                    <div class="d-flex justify-content-between align-items-center list_car__title">
                        <h5>{{$vehiculo->marca->marca}} {{$vehiculo->modelo->modelo}}</h5>
                        <span>$ {{$vehiculo->precio}}</span>
                    </div>
                    <div class="row list_car__detail">
                        <div class="d-flex flex-column col col-3 align-items-center">
                            <i class="bi bi-speedometer list_car__detail-icon"></i>
                            <span class="list_car__detail--type">kilometraje</span>
                            <span class="list_car__detail--value">{{$vehiculo->kilometraje}} KM</span>
                        </div>
                        <div class="d-flex flex-column col col-3">
                            <i class="bi bi-fuel-pump list_car__detail-icon"></i>
                            <span class="list_car__detail--type">Combustible</span>
                            <span class="list_car__detail--value">{{$vehiculo->combustible->combustible}}</span>
                        </div>
                        <div class="d-flex flex-column col col-3">
                            <i class="bi bi-joystick list_car__detail-icon"></i>
                            <span class="list_car__detail--type">Transmision</span>
                            <span class="list_car__detail--value">{{$vehiculo->transmision->transmision}}</span>
                        </div>
                        <div class="d-flex flex-column col col-3">
                            <i class="bi bi-calendar3 list_car__detail-icon"></i>
                            <span class="list_car__detail--type">Año</span>
                            <span class="list_car__detail--value">{{$vehiculo->fecha_modelo}}</span>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <p>No se encontraron resultados de busqueda</p>
            @endforelse
        </div>
        <div id="pagination">
            {{$vehiculosLista->links()}}
        </div>
    </div>
</div>