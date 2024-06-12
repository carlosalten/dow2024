<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::orderBy('rol_id')->orderBy('email')->get();
        return view('usuarios.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Rol::all();
        return view('usuarios.create',compact('roles'));
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
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }

    //muestra página con formulario de login
    public function login()
    {
        return view('usuarios.login');
    }

    //revisa credenciales
    public function autenticar(Request $request)
    {
     
    }

    //cerrar sesión
    public function logout()
    {
        
    }

    //muestra página con formulario para cambiar password
    public function contrasena()
    {
        return view('usuarios.contrasena');
    }


}
