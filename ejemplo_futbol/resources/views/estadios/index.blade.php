@extends('templates.master')

@section('contenido-principal')
<div class="row mt-3">
    <div class="col">
        <h4>Estadios</h4>
    </div>
</div>

<div class="row">
    <!-- tabla -->
    <div class="col-12 col-lg-8 order-last order-lg-first">
        <div class="row">
            {{-- card estadio --}}
            <div class="col-12 col-md-6 col-xl-3 d-flex align-items-stretch">
                <div class="card mb-3">
                    <img src="{{ asset('images/estadios/julio_martinez_pradanos.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">Nacional Julio Martínez Prádanos</h5>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-success">
                                Partidos <span class="badge bg-white text-primary">14</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- card estadio --}}
            <div class="col-12 col-md-6 col-xl-3 d-flex align-items-stretch">
                <div class="card mb-3">
                    <img src="{{ asset('images/estadios/elias_figueroa_brander.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">Elías Figueroa Brander</h5>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-success">
                                Partidos <span class="badge bg-white text-primary">7</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- card estadio --}}
            <div class="col-12 col-md-6 col-xl-3 d-flex align-items-stretch">
                <div class="card mb-3">
                    <img src="{{ asset('images/estadios/ester_roa.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">Ester Roa</h5>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-success">
                                Partidos <span class="badge bg-white text-primary">17</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- card estadio --}}
            <div class="col-12 col-md-6 col-xl-3 d-flex align-items-stretch">
                <div class="card mb-3">
                    <img src="{{ asset('images/estadios/francisco_sanchez_rumoroso.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">Francisco Sánchez Rumoroso</h5>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-success">
                                Partidos <span class="badge bg-white text-primary">3</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- form -->
    <div class="col-12 col-lg-4 order-first order-lg-last mb-3">
        <div class="card">
            <div class="card-header bg-dark text-white">
                Agregar Estadio
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('estadios.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Imagen</label>
                        <input type="text" id="imagen" name="imagen" class="form-control">
                    </div>
                    <div class="mb-3 d-grid gap-2 d-lg-block">
                        <button class="btn btn-warning" type="reset">Cancelar</button>
                        <button class="btn btn-success" type="submit">Agregar Estadio</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
