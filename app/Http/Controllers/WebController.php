<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Contracts\View\View;

class WebController extends Controller
{
    public function inicio(): View
    {
        $vehiculos = Vehiculo::vehiculosRecientes(env('INICIO_MAX_VEHICULO_DISPLAY'));
        return view('_inicio', ['docTitle' => 'Inicio', 'vehiculos' => $vehiculos]);
    }

    public function comprar(): View
    {
        return view('_comprar', ['docTitle' => 'Comprar']);
    }

    public function vender(): View
    {
        return view('_vender', ['docTitle' => 'Vender']);
    }

    public function contacto(): View
    {
        return view('_contacto', ['docTitle' => 'Contacto']);
    }

    public function detalleAuto(Vehiculo $vehiculo): View
    {
        $imagesPath = Vehiculo::imagePath($vehiculo->id);
        return view('_detalle-auto', ['docTitle' => 'Comprar Auto', 'vehiculo' => $vehiculo, 'imagesPath' => $imagesPath]);
    }
}
