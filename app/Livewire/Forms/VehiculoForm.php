<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class VehiculoForm extends Form
{
    #[Rule(['required', 'size:7', 'regex:/^[A-Z0-9]{3}-[A-Z0-9]{3}$/', 'unique:App\Models\Venta,placa'])]
    public $placa;

    #[Rule(['alpha:ascii'])]
    public $descripcion;

    #[Rule(['required', 'digits_between:1,2'])]
    public $cilindros;

    #[Rule(['required', 'digits_between:1,8'])]
    public $cilindrada;

    #[Rule(['required', 'digits_between:1,2'])]
    public $puertas;

    #[Rule(['required', 'lte:50000', 'regex:/^[0-9]+(\.[0-9]+)?$/'])]
    public $precio;

    #[Rule(['required', 'digits_between:1,6'])]
    public $kilometraje;

    public $fecha_fabricacion;

    public $fecha_modelo;

    #[Rule(['required'])]
    public $condicion_id = '';

    #[Rule(['required'])]
    public $marca_id = '';

    #[Rule(['required'])]
    public $modelo_id = '';

    #[Rule(['required'])]
    public $carroceria_id = '';

    #[Rule(['required'])]
    public $transmision_id = '';

    #[Rule(['required'])]
    public $combustible_id = '';

    #[Rule(['required'])]
    public $traccion_id = '';

    #[Rule(['required'])]
    public $ubicacion_id = '';

    public $archivos = [];

    public function rules()
    {
        return [
            'fecha_fabricacion' => ['required', 'digits:4', 'gte:2010', 'lte:' . date('Y')],
            'fecha_modelo' => ['required', 'digits:4', 'gte:2010', 'lte:' . date('Y')],
            'archivos' => ['required', 'array', 'between:1,5'],
            'archivos.*' => ['file', 'mimes:jpg,png,mp4,webm', 'max:2048']
        ];
    }
}
