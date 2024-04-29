@extends('templates.master')

@section('hojas-estilo')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('contenido-principal')
{{-- titulo --}}
<div class="row mt-3">
    <div class="col-8">
        <h3>Jugadores</h3>
        <p>Lista de todos los jugadores ingresados</p>
    </div>
    <div class="col-4 d-flex align-items-center justify-content-end">
        <a href="{{ route('jugadores.create') }}" class="btn btn-success">Agregar Jugador</a>
    </div>
</div>

{{-- tabla --}}
<div class="row">
    <div class="col">
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>N°</th>
                    <th>RUT</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>Camiseta</th>
                    <th>Posición</th>
                    <th>Equipo</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jugadores as $num=>$jugador)
                <tr>
                    <td class="align-middle">{{$num+1}}</td>
                    <td class="align-middle">{{$jugador->rut}}</td>
                    <td class="align-middle">{{$jugador->apellido}}</td>
                    <td class="align-middle">{{$jugador->nombre}}</td>
                    <td class="align-middle">{{$jugador->numero_camiseta}}</td>
                    <td class="align-middle">{{$jugador->posicion}}</td>
                    <td class="align-middle"></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-danger pb-0" data-bs-toggle="tooltip" data-bs-title="Borrar Jugador">
                            <span class="material-icons">delete</span>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip" data-bs-title="Editar Jugador">
                            <span class="material-icons">edit</span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
