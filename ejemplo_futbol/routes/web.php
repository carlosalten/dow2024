<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

//home
Route::get('/',[HomeController::class,'index'])->name('home.index');

//equipos
Route::get('/equipos',[EquiposController::class,'index'])->name('equipos.index');
Route::post('/equipos',[EquiposController::class,'store'])->name('equipos.store');