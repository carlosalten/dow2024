<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

//cuando cliente pida / (portada) ir a HomeController y ejecutar index
Route::get('/',[HomeController::class,'index']);