<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class VenderForm extends Form
{
    #[Rule('required|min:3|max:25')]
    public $nombre;

    #[Rule('required|min:3|max:25')]
    public $apellido;

    #[Rule('required|email|unique:users,email')]
    public $email;

    #[Rule('required|digits:9')]
    public $telefono;

    #[Rule('required|max:36|alpha:ascii')]
    public $marca;

    #[Rule('required|max:36|alpha_dash:ascii')]
    public $modelo;

    #[Rule('required|digits_between:1,6')]
    public $kilometraje;

    public $fecha_fabricacion;

    #[Rule('required|size:7|regex:/^[A-Z0-9]{3}-[A-Z0-9]{3}$/|unique:App\Models\Venta,placa')]
    public $placa;

    #[Rule('required|min:100|max:500|regex:/^[A-Za-z0-9,;: ]+$/')]
    public $mensaje;

    public $archivos = [];

    public function rules()
    {
        return [
            'fecha_fabricacion' => ['required', 'digits:4', 'gte:2010', 'lte:' . date('Y')],
            'archivos' => ['required', 'array', 'between:1,5'],
            'archivos.*' => ['file', 'mimes:jpg,png,mp4,webm', 'max:2048']
        ];
    }
}
