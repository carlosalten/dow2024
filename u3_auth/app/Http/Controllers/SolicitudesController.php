<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use Illuminate\Http\Request;

class SolicitudesController extends Controller
{
    //retorna todas las solicitudes
    public function index(){
        $solicitudes = Solicitud::orderBy('created_at')->get();
        return view('solicitudes.index',compact('solicitudes'));
    }

    //retorna las solicitudes del estudiante que inició sesión
    public function solicitudesEstudiante()
    {
        return view('solicitudes.estudiante');
    }
}
