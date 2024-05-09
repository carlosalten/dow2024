<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EstadiosController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\PartidosController;
use App\Http\Controllers\EstadisticasController;


//home
Route::get('/',[HomeController::class,'index'])->name('home.index');

//equipos
// Route::get('/equipos',[EquiposController::class,'index'])->name('equipos.index');
// Route::post('/equipos',[EquiposController::class,'store'])->name('equipos.store');
// Route::delete('/equipos/{equipo}',[EquiposController::class,'destroy'])->name('equipos.destroy');
Route::resource('/equipos',EquiposController::class);

//estadios
Route::get('/estadios',[EstadiosController::class,'index'])->name('estadios.index');
Route::post('/estadios',[EquiposController::class,'store'])->name('estadios.store');

//jugadores
Route::get('/jugadores',[JugadoresController::class,'index'])->name('jugadores.index');
Route::get('/jugadores/crear',[JugadoresController::class,'create'])->name('jugadores.create');
Route::post('/jugadores',[JugadoresController::class,'store'])->name('jugadores.store');
Route::delete('/jugadores/{jugador}',[JugadoresController::class,'destroy'])->name('jugadores.destroy');

//partidos
Route::get('/partidos',[PartidosController::class,'index'])->name('partidos.index');

//estadisticas
Route::get('/estadisticas',[EstadisticasController::class,'index'])->name('estadisticas.index');