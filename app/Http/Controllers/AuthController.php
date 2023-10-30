<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
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
}
