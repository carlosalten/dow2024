<?php

namespace App\Http\Controllers;

use App\Models\Partido;
use Illuminate\Http\Request;
use App\Models\Estadio;
use App\Models\Equipo;
use App\Http\Requests\PartidoRequest;

class PartidosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estadios = Estadio::all();//select * from estadios
        $equipos = Equipo::orderBy('nombre')->get();//select * from equipos orderby nombre
        $partidos = Partido::all();
        return view('partidos.index',compact(['estadios','equipos','partidos']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PartidoRequest $request)
    {
        //inserta en tabla partido
        $partido = new Partido();
        $partido->estadio_id = $request->estadio;
        $partido->jugado = false;
        $partido->fecha = $request->fecha;
        $partido->save();

        //inserta en tabla equipo_partido (2 inserts)
        $partido->equipos()->attach($request->equipo_local,['es_local'=>true,'goles'=>0]);
        $partido->equipos()->attach($request->equipo_visita,['es_local'=>false,'goles'=>0]);

        //volver a la pagina
        return redirect()->route('partidos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partido $partido)
    {
        //return $partido;
        //ver detalle de un partido
        //utilizado para indicar resultado
        return view('partidos.show',compact('partido'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partido $partido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partido $partido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partido $partido)
    {
        //borrar registros en tabla de intersección (pivot)
        $partido->equipos()->detach();

        //borrar registro en tabla partido
        $partido->delete();

        //volver a la vista
        return redirect()->route('partidos.index');
    }

    public function resultados(Request $request, Partido $partido)
    {
        // echo $partido->id.' '.$request->equipo_local;
        // exit();
        $equipo_local_id = $partido->equipos->where('pivot.es_local',true)->first()->id;
        $equipo_visita_id = $partido->equipos->where('pivot.es_local',false)->first()->id;

        $partido->equipos()->updateExistingPivot($equipo_local_id,['goles'=>$request->equipo_local]);
        $partido->equipos()->updateExistingPivot($equipo_visita_id,['goles'=>$request->equipo_visita]);

        return redirect()->route('partidos.index');
    }
}
