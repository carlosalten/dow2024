@extends('templates.master')

@section('contenido-principal')
<div class="row mt-3">
    <div class="col">
        <h4>Sistema de Campeonato de Fútbol</h4>
    </div>
</div>

<div class="row">
    <!-- equipos -->
    <div class="col-12 col-md-6 col-lg-4 col-xl-2 mb-3">
        <div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('images/equipos.jpg') }}">
                <div class="card-body">
                    <h5 class="card-title">Equipos</h5>
                    <div class="btn-group d-flex">
                        <a class="btn btn-outline-success" href="#">Ver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- estadios -->
    <div class="col-12 col-md-6 col-lg-4 col-xl-2 mb-3">
        <div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('images/estadios.jpg') }}">
                <div class="card-body">
                    <h5 class="card-title">Estadios</h5>
                    <div class="btn-group d-flex">
                        <a class="btn btn-outline-success" href="#">Ver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- estadisticas -->
    <div class="col-12 col-md-6 col-lg-4 col-xl-2 mb-3">
        <div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('images/estadisticas.jpg') }}">
                <div class="card-body">
                    <h5 class="card-title">Estadísticas</h5>
                    <div class="btn-group d-flex">
                        <a class="btn btn-outline-success" href="#">Ver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jugadores -->
    <div class="col-12 col-md-6 col-lg-4 col-xl-2 mb-3">
        <div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('images/jugadores.jpg') }}">
                <div class="card-body">
                    <h5 class="card-title">Jugadores</h5>
                    <div class="btn-group d-flex">
                        <a class="btn btn-outline-success" href="#">Ver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partidos -->
    <div class="col-12 col-md-6 col-lg-4 col-xl-2 mb-3">
        <div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('images/partidos.jpg') }}">
                <div class="card-body">
                    <h5 class="card-title">Partidos</h5>
                    <div class="btn-group d-flex">
                        <a class="btn btn-outline-success" href="#">Ver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- config -->
    <div class="col-12 col-md-6 col-lg-4 col-xl-2 mb-3">
        <div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('images/configuracion.jpg') }}">
                <div class="card-body">
                    <h5 class="card-title">Configuración</h5>
                    <div class="btn-group d-flex">
                        <a class="btn btn-outline-success" href="#">Ver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
