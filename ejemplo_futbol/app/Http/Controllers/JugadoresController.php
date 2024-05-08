<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use App\Models\Equipo;
use Illuminate\Http\Request;
use App\Http\Requests\JugadorRequest;


class JugadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jugadores = Jugador::all();
        return view('jugadores.index',compact('jugadores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //obtener equipos en el orden que están ingresados a la tabla
        // $equipos = Equipo::all();

        $equipos = Equipo::orderBy('nombre')->get();
        return view('jugadores.create',compact('equipos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JugadorRequest $request)
    {
        //crear un jugador
        $jugador = new Jugador();

        //asignar valor a sus atributos
        $jugador->rut = $request->rut;
        $jugador->nombre = $request->nombre;
        $jugador->apellido = $request->apellido;
        $jugador->numero_camiseta = $request->numero_camiseta;
        $jugador->posicion = $request->posicion;
        $jugador->equipo_id = $request->equipo;

        //guardar en BD
        $jugador->save();

        //redireccion
        return redirect()->route('jugadores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jugador $jugador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jugador $jugador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jugador $jugador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jugador $jugador)
    {
        $jugador->delete();
        return redirect()->route('jugadores.index');
    }
}
