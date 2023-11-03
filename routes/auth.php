<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/registro', [AuthController::class, 'registro'])->name('registro');
Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/admin', [AuthController::class, 'admin'])->name('admin');

Route::get('/admin/nuevo-auto', [AuthController::class, 'nuevoAuto'])->name('nuevo-auto');

Route::get('/admin/editar-auto', [AuthController::class, 'editarAuto'])->name('editar-auto');
Route::get('/admin/editar-auto/{vehiculo}', [AuthController::class, 'detalleEditarAuto'])->name('detalle-editar-auto');