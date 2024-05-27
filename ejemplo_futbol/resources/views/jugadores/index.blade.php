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
        @if(count($jugadores)==0)
        <div class="alert alert-warning" role="alert">
            No hay jugadores
        </div>
        @else
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
                    <td class="align-middle">{{ $jugador->equipo->nombre }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-danger pb-0" data-bs-toggle="modal" data-bs-target="#borrarModal{{$jugador->rut}}">
                            <span class="material-icons">delete</span>
                        </a>
                        {{-- <form method="POST" action="{{ route('jugadores.destroy',$jugador->rut) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Borrar Jugador">
                            <span class="material-icons">delete</span>
                        </button>
                        </form> --}}
                    </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip" data-bs-title="Editar Jugador">
                            <span class="material-icons">edit</span>
                        </a>
                    </td>
                </tr>
                {{-- modal --}}
                <div class="modal fade" id="borrarModal{{$jugador->rut}}" tabindex="-1" aria-labelledby="borrarModal{{$jugador->rut}}Label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="borrarModal{{$jugador->rut}}Label">
                                    Confirmar Borrado de Jugador de {{$jugador->equipo->nombre}}
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ¿Borrar el jugador <strong>{{ $jugador->nombre }} {{ $jugador->apellido }}</strong>?
                            </div>
                            <div class="modal-footer">
                                <form method="POST" action="{{ route('jugadores.destroy',$jugador->rut) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-danger">Borrar Jugador</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- /modal --}}
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection

@section('scripts')
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

</script>
@endsection
