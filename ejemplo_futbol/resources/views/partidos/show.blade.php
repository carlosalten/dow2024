@extends('templates.master')

@section('contenido-principal')
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
                    <div class="col-3">
                        <img class="img-fluid rounded" src="{{ Storage::url($partido->estadio->imagen) }}">
                    </div>
                    <div class="col-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Fecha: </strong>{{ $partido->fecha }}</li>
                            <li class="list-group-item"><strong>Estadio: </strong>{{ $partido->estadio->nombre }}</li>
                            <li class="list-group-item"><strong>Equipo Local: </strong>{{ $partido->equipos->where('pivot.es_local',true)->first()->nombre }}</li>
                            <li class="list-group-item"><strong>Equipo Visita: </strong>{{ $partido->equipos->where('pivot.es_local',false)->first()->nombre }}</li>
                            <li class="list-group-item"><strong>Estado: </strong>{{ $partido->jugado==0?'Pendiente':'Finalizado' }}</li>
                        </ul>
                    </div>
                    <div class="col-5">
                        <h4>Equipo Local</h4>
                        <form>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="number" id="nombre" name="nombre" class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="d-grid gap-2 d-lg-block">
                    <a href="{{ route('partidos.index') }}" class="btn btn-warning">Volver a Partidos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
