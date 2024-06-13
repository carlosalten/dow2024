<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        //obtener las solicitudes del estudiante que inició sesión
        //SELECT * FROM solicitudes WHERE usuario_email = 'estu1@usm.cl'
        $solicitudes = Solicitud::where('usuario_email',Auth::user()->email)->get();
        return view('solicitudes.estudiante',compact('solicitudes'));
    }
}
