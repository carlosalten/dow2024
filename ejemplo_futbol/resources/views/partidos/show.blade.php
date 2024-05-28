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
                                <li class="list-group-item"><strong>Fecha: </strong>28-05-2024</li>
                                <li class="list-group-item"><strong>Estadio: </strong>Nacional Julio Martínez</li>
                                <li class="list-group-item"><strong>Equipo Local: </strong>Audax Italiano</li>
                                <li class="list-group-item"><strong>Equipo Visita: </strong>Universidad de Chile</li>
                                <li class="list-group-item"><strong>Estado: </strong>Pendiente</li>
                                <li class="list-group-item"><strong>Resultado: 0-0</strong></li>
                            </ul>
                        </div>
                        {{-- /datos partido --}}

                        {{-- imagen estadio --}}
                        <div class="col-12 col-lg-3 order-lg-first mb-3 mb-lg-0">
                            <img class="img-fluid rounded" src="/storage/estadios/YYZsdTSwavlJTB8hVOr7viP04D3gRjwISjE4ZzLR.jpg">
                        </div>
                        {{-- /imagen estadio --}}

                        {{-- formulario modificar resultado --}}
                        <div class="col-12 col-lg-3">
                            <h4>Goles</h4>
                            <form>
                                <div class="mb-3">
                                    <label for="equipo_local" class="form-label">Audax Italiano</label>
                                    <input type="number" id="equipo_local" name="equipo_local" class="form-control" value="0">
                                </div>
                                <div class="mb-3">
                                    <label for="equipo_visita" class="form-label">Universidad de Chile</label>
                                    <input type="number" id="equipo_visita" name="equipo_visita" class="form-control" value="0">
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
