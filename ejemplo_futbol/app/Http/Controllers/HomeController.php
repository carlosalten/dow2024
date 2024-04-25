<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //lleva a portada del sitio
    public function index(){
        return view('home.index');
    }
}
