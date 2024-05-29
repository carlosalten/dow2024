@inject('carbon','Carbon\Carbon')

@extends('templates.master')

@section('contenido-principal')
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col">
            <h3>Resultado Partido</h3>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        {{-- datos partido --}}
                        <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Fecha: </strong>{{ $carbon::parse($partido->fecha)->format('d/m/Y') }}</li>
                                <li class="list-group-item"><strong>Estadio: </strong>{{ $partido->estadio->nombre }}</li>
                                <li class="list-group-item"><strong>Equipo Local: </strong>{{ $partido->equipos->where('pivot.es_local',true)->first()->nombre }}</li>
                                <li class="list-group-item"><strong>Equipo Visita: </strong>{{ $partido->equipos->where('pivot.es_local',false)->first()->nombre }}</li>
                                <li class="list-group-item"><strong>Estado: </strong>
                                    {{ $partido->jugado==0?'Pendiente':'Finalizado' }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Resultado: </strong>
                                    {{ $partido->equipos->where('pivot.es_local',true)->first()->pivot->goles }}
                                    -
                                    {{ $partido->equipos->where('pivot.es_local',false)->first()->pivot->goles }}
                                </li>
                            </ul>
                        </div>
                        {{-- /datos partido --}}

                        {{-- imagen estadio --}}
                        <div class="col-12 col-lg-3 order-lg-first mb-3 mb-lg-0">
                            <img class="img-fluid rounded" src="{{ Storage::url($partido->estadio->imagen) }}">
                        </div>
                        {{-- /imagen estadio --}}

                        {{-- formulario modificar resultado --}}
                        <div class="col-12 col-lg-3">
                            <h4>Goles</h4>
                            <form method="POST" action="{{ route('partidos.resultados',$partido->id) }}">
                                @csrf
                                @method('PATCH')
                                <div class="mb-3">
                                    <label for="equipo_local" class="form-label">{{ $partido->equipos->where('pivot.es_local',true)->first()->nombre }}</label>
                                    <input type="number" id="equipo_local" name="equipo_local" class="form-control" value="{{ $partido->equipos->where('pivot.es_local',true)->first()->pivot->goles }}">
                                </div>
                                <div class="mb-3">
                                    <label for="equipo_visita" class="form-label">{{ $partido->equipos->where('pivot.es_local',false)->first()->nombre }}</label>
                                    <input type="number" id="equipo_visita" name="equipo_visita" class="form-control" value="{{ $partido->equipos->where('pivot.es_local',false)->first()->pivot->goles }}">
                                </div>
                                <div class="mb-3 d-grid gap-2 d-lg-block text-end">
                                    <button type="submit" class="btn btn-success">Modificar Resultados</button>
                                </div>
                            </form>
                        </div>
                        {{-- /formulario modificar resultado --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- boton volver a partidos --}}
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-grid gap-2 d-lg-block">
                        <a href="http://localhost:8000/partidos" class="btn btn-warning">Volver a Partidos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- /boton volver a partidos --}}
</div>
@endsection
