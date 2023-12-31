<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function registro(): View
    {
        return view('auth._registro', ['docTitle' => 'Registro']);
    }

    public function login(): View
    {
        return view('auth._login', ['docTitle' => 'Login']);
    }

    public function admin(): View
    {
        return view('auth.admin._admin', ['docTitle' => 'Administrador']);
    }

    public function nuevoAuto(): View
    {
        return view('auth.admin._nuevo-auto', ['docTitle' => 'Nuevo Auto']);
    }

    public function editarAuto(): View
    {
        return view('auth.admin._editar-auto', ['docTitle' => 'Editar Auto']);
    }

    public function detalleEditarAuto(Vehiculo $vehiculo): View
    {
        return view('auth.admin._detalle-editar-auto', ['docTitle' => 'Detalle de Auto', 'vehiculo' => $vehiculo]);
    }
}
