<?php

namespace App\Http\Controllers;

use App\Models\Estadistica;
use Illuminate\Http\Request;

class EstadisticasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('estadisticas.index');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Estadistica $estadistica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estadistica $estadistica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estadistica $estadistica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estadistica $estadistica)
    {
        //
    }
}
