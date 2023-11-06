<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Illuminate\Validation\Rule as rulez;
use App\Models\Vehiculo;
use Livewire\Form;

class EditarVehiculoForm extends Form
{
    public ?Vehiculo $vehiculo;

    #[Rule(['required', 'size:7', 'regex:/^[A-Z0-9]{3}-[A-Z0-9]{3}$/'])]
    public $placa = '';

    #[Rule('alpha:ascii')]
    public $descripcion = '';

    #[Rule(['required', 'digits_between:1,2'])]
    public $cilindros = '';

    #[Rule(['required', 'digits_between:1,8'])]
    public $cilindrada = '';

    #[Rule(['required', 'digits_between:1,2'])]
    public $puertas = '';

    #[Rule(['required', 'lte:50000', 'regex:/^[0-9]+(\.[0-9]+)?$/'])]
    public $precio = '';

    #[Rule(['required', 'digits_between:1,6'])]
    public $kilometraje = '';

    #[Rule('required')]
    public $fecha_fabricacion = '';

    #[Rule('required')]
    public $fecha_modelo = '';

    #[Rule('required')]
    public $condicion_id = '';

    #[Rule('required')]
    public $marca_id = '';

    #[Rule('required')]
    public $modelo_id = '';

    #[Rule('required')]
    public $carroceria_id = '';

    #[Rule('required')]
    public $transmision_id = '';

    #[Rule('required')]
    public $combustible_id = '';

    #[Rule('required')]
    public $traccion_id = '';

    #[Rule('required')]
    public $ubicacion_id = '';

    public $archivos = [];

    public function rules()
    {
        return [
            'placa' => [rulez::unique('App\Models\Vehiculo', 'placa')->ignore($this->vehiculo->id)],
            'fecha_fabricacion' => ['digits:4', 'gte:2010', 'lte:' . date('Y')],
            'fecha_modelo' => ['digits:4', 'gte:2010', 'lte:' . date('Y')],
            'archivos' => ['array', 'between:1,5'],
            'archivos.*' => ['file', 'mimes:jpg,png,mp4,webm', 'max:2048']
        ];
    }

    public function setForm(Vehiculo $vehiculo)
    {
        $this->vehiculo = $vehiculo;
        $this->placa = $vehiculo->placa;
        $this->descripcion = $vehiculo->descripcion;
        $this->cilindros = $vehiculo->cilindros;
        $this->cilindrada = $vehiculo->cilindrada;
        $this->puertas = $vehiculo->puertas;
        $this->precio = $vehiculo->precio;
        $this->kilometraje = $vehiculo->kilometraje;
        $this->fecha_fabricacion = $vehiculo->fecha_fabricacion;
        $this->fecha_modelo = $vehiculo->fecha_modelo;
        $this->condicion_id = $vehiculo->condicion->id;
        $this->marca_id = $vehiculo->marca->id;
        $this->modelo_id = $vehiculo->modelo->id;
        $this->carroceria_id = $vehiculo->carroceria->id;
        $this->transmision_id = $vehiculo->transmision->id;
        $this->combustible_id = $vehiculo->combustible->id;
        $this->traccion_id = $vehiculo->traccion->id;
        $this->ubicacion_id = $vehiculo->ubicacion->id;
    }

    public function update()
    {
        $this->vehiculo->update($this->all());
    }
}
