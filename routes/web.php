<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WebController::class, 'inicio'])->name('inicio');
Route::get('/inicio', [WebController::class, 'inicio'])->name('inicio');
Route::get('/auto-disponible', [WebController::class, 'comprar'])->name('comprar');
Route::get('/auto-disponible/{id}', [WebController::class, 'detalleAuto'])->name('detalle-auto');
Route::get('/blog', [WebController::class, 'blog'])->name('blog');

Route::get('/vender', [WebController::class, 'vender'])->name('vender');
Route::get('/contacto', [WebController::class, 'contacto'])->name('contacto');

require __DIR__ . '/auth.php';
