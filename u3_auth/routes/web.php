<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\SolicitudesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalasController;

//Home
Route::get('/',[HomeController::class,'index'])->name('home.index')->middleware('auth');

//Usuarios
Route::middleware(['auth'])->group(function(){
    Route::get('/usuarios',[UsuariosController::class,'index'])->name('usuarios.index');
    Route::get('/usuarios/contrasena',[UsuariosController::class,'contrasena'])->name('usuarios.contrasena');
    Route::get('/usuarios/crear',[UsuariosController::class,'create'])->name('usuarios.create');
    Route::get('/usuarios/logout',[UsuariosController::class,'logout'])->name('usuarios.logout');
});

Route::get('/usuarios/login',[UsuariosController::class,'login'])->name('usuarios.login');
Route::post('/usuarios/autenticar',[UsuariosController::class,'autenticar'])->name('usuarios.autenticar');


//Solicitudes
Route::middleware(['auth'])->group(function(){
    Route::get('/solicitudes',[SolicitudesController::class,'index'])->name('solicitudes.index');
    Route::get('/solicitudes/estudiante',[SolicitudesController::class,'solicitudesEstudiante'])->name('solicitudes.estudiante');
});


//Salas
Route::resource('/salas',SalasController::class,['except'=>['index','show']])->middleware('auth');
Route::resource('/salas',SalasController::class,['only'=>['index','show']]);