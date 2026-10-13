<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\AlquilerController;
use App\Http\Controllers\DetalleAlquilerController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/categorias/{id}/equipos', [CategoriaController::class,'equipos'])->name('categorias.equipos');
Route::get('/equipos', [App\Http\Controllers\EquipoController::class, 'index'])->name('equipos.index');
Route::get('/equipos/{id}/categoria', [App\Http\Controllers\EquipoController::class, 'categoria'])->name('equipos.categoria');
Route::get('/clientes', [App\Http\Controllers\ClientesController::class, 'index'])->name('clientes.index');
Route::get('/clientes/{id}/alquileres', [App\Http\Controllers\ClientesController::class, 'alquileres'])->name('clientes.alquileres');
Route::get('/empleados', [App\Http\Controllers\EmpleadoController::class, 'index'])->name('empleados.index');
Route::get('/empleados/{id}/alquileres', [App\Http\Controllers\EmpleadoController::class, 'alquileres'])->name('empleados.alquileres');
Route::get('/alquileres', [App\Http\Controllers\AlquilerController::class, 'index'])->name('alquileres.index');
Route::get('/alquileres/{id}/detalles', [App\Http\Controllers\AlquilerController::class, 'detalles'])->name('alquileres.detalles');
Route::get('/detalles_alquiler', [App\Http\Controllers\DetalleAlquilerController::class, 'index'])->name('detalles_alquiler.index');
Route::get('/equipos/{id}/detalles', [EquipoController::class,'detalles'])->name('equipos.detalles');
