<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquiposController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/equipos',[EquiposController::class,'index']);