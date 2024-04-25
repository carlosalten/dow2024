@extends('templates.master')

@section('contenido-principal')
<div class="row">
    <div class="col">
        <h4>Equipos</h4>
    </div>
</div>

<div class="row">
    <!-- tabla -->
    <div class="col-12 col-lg-8 order-last order-lg-first">
        <table class="table table striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>Entrenador</th>
                    <th>Jugadores</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($equipos as $index=>$equipo)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $equipo->nombre }}</td>
                    <td>{{ $equipo->entrenador }}</td>
                    <td>10</td>
                    <td>
                        <div class="row">
                            <div class="col">
                                <form method="POST" action="http://localhost:8000/equipos/1">
                                    <input type="hidden" name="_method" value="delete"> <input type="hidden" name="_token" value="skrXwOqOq9w7SDl5FFM1Al8I2qDg3SO66QwKjkHm"> <button class="btn btn-sm btn-danger" type="submit" data-bs-toggle="tooltip" data-bs-title="Borrar {{ $equipo->nombre }}">
                                        <span class="material-icons">delete</span>
                                    </button>
                                </form>

                            </div>
                            <div class="col">
                                <a href="http://localhost:8000/equipos/1/edit" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip" data-bs-title="Editar {{ $equipo->nombre }}">
                                    <span class="material-icons">edit</span>
                                </a>
                            </div>
                            <div class="col">
                                <a href="http://localhost:8000/equipos/1" class="btn btn-sm btn-info pb-0 text-white position-relative" data-bs-toggle="tooltip" data-bs-title="Ver {{ $equipo->nombre }}">
                                    <span class="material-icons">group</span>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                        10
                                    </span>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <!-- form -->
    <div class="col-12 col-lg-4 order-first order-lg-last mb-3">
        <div class="card">
            <div class="card-header bg-dark text-white">
                Agregar Equipo
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('equipos.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="entrenador" class="form-label">Entrenador</label>
                        <input type="text" id="entrenador" name="entrenador" class="form-control">
                    </div>
                    <div class="mb-3 d-grid gap-2 d-lg-block">
                        <button class="btn btn-warning" type="reset">Cancelar</button>
                        <button class="btn btn-success" type="submit">Agregar Equipo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
