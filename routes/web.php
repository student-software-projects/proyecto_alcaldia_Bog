<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Equipo\EquipoController;
use App\Http\Controllers\Jugador\JugadorController;
use App\Http\Controllers\Localidad\LocalidadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('equipo',[EquipoController::class,'index'])->name('equipo.index');
Route::get('jugador',[JugadorController::class,'index'])->name('jugador.index');
Route::get('localidad',[LocalidadController::class,'index'])->name('localidad.index');

Route::get('equipo/create',[EquipoController::class,'create'])->name('equipo.create');
Route::get('jugador/create',[JugadorController::class,'create'])->name('jugador.create');
Route::get('localidad/create',[LocalidadController::class,'create'])->name('localidad.create');

Route::post('equipo',[EquipoController::class,'store'])->name('equipo.store');
Route::post('jugador',[JugadorController::class,'store'])->name('jugador.store');
Route::post('localidad',[LocalidadController::class,'store'])->name('localidad.store');

Route::get('equipo/{id}',[EquipoController::class,'show'])->name('equipo.show');
Route::get('jugador/{id}',[JugadorController::class,'show'])->name('jugador.show');
Route::get('localidad/{id}',[LocalidadController::class,'show'])->name('localidad.show');
