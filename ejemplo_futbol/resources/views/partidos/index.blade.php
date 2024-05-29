@inject('carbon','Carbon\Carbon')

@extends('templates.master')

@section('hojas-estilo')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('contenido-principal')
<div class="row mt-3">
    <div class="col">
        <h3>Partidos</h3>
    </div>
</div>

<div class="row">
    <!-- tabla -->
    <div class="col-12 col-lg-8 order-last order-lg-first">
        @if(count($partidos)==0)
        <div class="alert alert-info" role="alert">
            No hay partidos
        </div>
        @else
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>N°</th>
                    <th>Fecha</th>
                    {{-- <th>Hora</th> --}}
                    <th>Estado</th>
                    <th>Local</th>
                    <th>Visita</th>
                    <th>Resultado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach($partidos as $nume=>$partido)
                <tr>
                    <td class="align-middle">{{ $nume+1 }}</td>
                    <td class="align-middle">{{ $carbon::parse($partido->fecha)->format('d/m/Y') }}</td>
                    {{-- <td class="align-middle">15:30 hrs</td> --}}
                    <td class="align-middle">
                        @if($partido->jugado==0)
                        Pendiente
                        @else
                        Finalizado
                        @endif
                    </td>
                    <td class="align-middle">
                        {{ $partido->equipos->where('pivot.es_local',true)->first()->nombre }}
                    </td>
                    <td class="align-middle">
                        {{ $partido->equipos->where('pivot.es_local',false)->first()->nombre }}
                    </td>
                    <td class="align-middle text-center">
                        {{ $partido->equipos->where('pivot.es_local',true)->first()->pivot->goles }}
                        -
                        {{ $partido->equipos->where('pivot.es_local',false)->first()->pivot->goles }}
                    </td>
                    <td>
                        <div class="d-flex">
                            {{-- Borrar --}}
                            <div class="col text-center">
                                <a href="#" class="btn btn-sm btn-danger pb-0 text-white" data-bs-toggle="modal" data-bs-target="#borrarModal{{$partido->id}}">
                                    <span class="material-icons">delete</span>
                                </a>
                            </div>
                            {{-- Editar --}}
                            <div class="col text-center">
                                <a href="#" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip" data-bs-title="Editar Partido">
                                    <span class="material-icons">edit</span>
                                </a>
                            </div>
                            {{-- Modificar Estado y Resultados --}}
                            <div class="col text-center">
                                <a href="{{ route('partidos.show',$partido->id) }}" class="btn btn-sm btn-info pb-0 text-white" data-bs-toggle="tooltip" data-bs-title="Modificar Estado y Resultados">
                                    <span class="material-icons">sports_soccer</span>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                {{-- modal --}}
                <div class="modal fade" id="borrarModal{{$partido->id}}" tabindex="-1" aria-labelledby="borrarModal{{$partido->id}}Label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="borrarModal{{$partido->id}}Label">
                                    Confirmar Borrado de Partido
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                            </div>
                            <div class="modal-body">
                                ¿Borrar el partido <strong>{{ $partido->equipos->where('pivot.es_local',true)->first()->nombre }} vs {{ $partido->equipos->where('pivot.es_local',false)->first()->nombre }}</strong>?
                                <p><small>Estadio {{ $partido->estadio->nombre }} el {{ $partido->fecha }}</small></p>
                            </div>
                            <div class="modal-footer">
                                <form method="POST" action="{{ route('partidos.destroy',$partido->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-danger">Borrar Partido</button>
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

    <!--formulario crear partido-->
    <div class="col-12 col-lg-4 order-first order-lg-last">
        <div class="card">
            <div class="card-header bg-dark text-white">Crear un nuevo partido</div>
            <div class="card-body">
                <form method="POST" action="">
                    @csrf
                    {{-- estadio --}}
                    <div class="mb-3">
                        <label class="form-label" for="estadio">Estadio</label>
                        <select id="estadio" name="estadio" class="form-control @error('estadio') is-invalid @enderror">
                            <option value="0">Seleccione</option>
                            @foreach($estadios as $estadio)
                            <option value="{{ $estadio->id }}">{{ $estadio->nombre }}</option>
                            @endforeach
                        </select>
                        @error('estadio')
                        <div id="estadioFeedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    {{-- fecha del partido --}}
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" id="fecha" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha') }}">
                        @error('fecha')
                        <div id="fechaFeedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    {{-- estado del partido --}}
                    {{-- <div class="mb-3">
                        <label class="form-label">Estado</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="estado" id="estado_pendiente" value="0" checked>
                            <label class="form-check-label" for="estado_pendiente">
                                Pendiente
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="estado" id="estado_finalizado" value="2">
                            <label class="form-check-label" for="estado_finalizado">
                                Finalizado
                            </label>
                        </div>
                    </div> --}}
                    {{-- equipo local --}}
                    <div class="mb-3">
                        <label class="form-label" for="equipo_local">Equipo Local</label>
                        <select id="equipo_local" name="equipo_local" class="form-control @error('equipo_local') is-invalid @enderror">
                            @foreach($equipos as $equipo)
                            <option value="{{$equipo->id}}">{{ $equipo->nombre }}</option>
                            @endforeach
                        </select>
                        @error('equipo_local')
                        <div id="equipo_localFeedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    {{-- equipo visita --}}
                    <div class="mb-3">
                        <label class="form-label" for="equipo_visita">Equipo Visita</label>
                        <select id="equipo_visita" name="equipo_visita" class="form-control @error('equipo_visita') is-invalid @enderror">
                            @foreach($equipos as $equipo)
                            <option value="{{$equipo->id}}">{{ $equipo->nombre }}</option>
                            @endforeach
                        </select>
                        @error('equipo_visita')
                        <div id="equipo_visitaFeedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    {{-- botones --}}
                    <div class="mb-3 d-grid gap-2 d-lg-block">
                        <button class="btn btn-warning" type="reset">Cancelar</button>
                        <button class="btn btn-success" type="submit">Agregar Partido</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

</script>
@endsection
