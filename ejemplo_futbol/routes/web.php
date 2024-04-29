<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EstadiosController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\PartidosController;


//home
Route::get('/',[HomeController::class,'index'])->name('home.index');

//equipos
Route::get('/equipos',[EquiposController::class,'index'])->name('equipos.index');
Route::post('/equipos',[EquiposController::class,'store'])->name('equipos.store');

//estadios
Route::get('/estadios',[EstadiosController::class,'index'])->name('estadios.index');
Route::post('/estadios',[EquiposController::class,'store'])->name('estadios.store');

//jugadores
Route::get('/jugadores',[JugadoresController::class,'index'])->name('jugadores.index');
Route::get('/jugadores/crear',[JugadoresController::class,'create'])->name('jugadores.create');
Route::post('/jugadores',[JugadoresController::class,'store'])->name('jugadores.store');

//partidos
Route::get('/partidos',[PartidosController::class,'index'])->name('partidos.index');
