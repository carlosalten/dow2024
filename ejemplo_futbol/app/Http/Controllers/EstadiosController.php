<?php

namespace App\Http\Controllers;

use App\Models\Estadio;
use Illuminate\Http\Request;
use App\Http\Requests\EstadioRequest;

class EstadiosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estadios = Estadio::all();
        return view('estadios.index',compact('estadios'));
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
    public function store(EstadioRequest $request)
    {
        $estadio = new Estadio();
        $estadio->nombre = $request->nombre;
        $estadio->imagen = $request->file('imagen')->store('public/estadios');
        $estadio->save();
        return redirect()->route('estadios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Estadio $estadio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estadio $estadio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estadio $estadio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estadio $estadio)
    {
        //
    }
}
