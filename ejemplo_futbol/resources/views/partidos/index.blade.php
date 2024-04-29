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
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>N°</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Estado</th>
                    <th>Local</th>
                    <th>Visita</th>
                    <th>Resultado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="align-middle">1</td>
                    <td class="align-middle">07/05/2024</td>
                    <td class="align-middle">15:30 hrs</td>
                    <td class="align-middle">Pendiente</td>
                    <td class="align-middle">
                        Equipo 1
                    </td>
                    <td class="align-middle">
                        Equipo 2
                    </td>
                    <td class="align-middle text-center">Sin Resultado</td>
                    <td>
                        <div class="d-flex">
                            {{-- Borrar --}}
                            <div class="col text-center">
                                <a href="#" class="btn btn-sm btn-danger pb-0 text-white" data-bs-toggle="tooltip" data-bs-title="Borrar Partido">
                                    <span class="material-icons">delete</span>
                                </a>
                            </div>
                            {{-- Editar --}}
                            <div class="col text-center">
                                <a href="#" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip" data-bs-title="Editar Partido">
                                    <span class="material-icons">edit</span>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="align-middle">2</td>
                    <td class="align-middle">28/04/2024</td>
                    <td class="align-middle">18:00 hrs</td>
                    <td class="align-middle">Finalizado</td>
                    <td class="align-middle">
                        Equipo 1
                    </td>
                    <td class="align-middle">
                        Equipo 2
                    </td>
                    <td class="align-middle text-center">3 - 2</td>
                    <td>
                        <div class="d-flex">
                            {{-- Borrar --}}
                            <div class="col text-center">
                                <a href="#" class="btn btn-sm btn-danger pb-0 text-white" data-bs-toggle="tooltip" data-bs-title="Borrar Partido">
                                    <span class="material-icons">delete</span>
                                </a>
                            </div>
                            {{-- Editar --}}
                            <div class="col text-center">
                                <a href="#" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip" data-bs-title="Editar Partido">
                                    <span class="material-icons">edit</span>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!--formulario crear partido-->
    <div class="col-12 col-lg-4 order-first order-lg-last">
        <div class="card">
            <div class="card-header bg-dark text-white">Crear un nuevo partido</div>
            <div class="card-body">
                <form method="POST" action="">
                    @csrf
                    {{-- fecha del partido --}}
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" id="fecha" name="fecha" class="form-control">
                    </div>
                    {{-- estado del partido --}}
                    <div class="mb-3">
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
                    </div>
                    {{-- equipo local --}}
                    <div class="mb-3">
                        <label class="form-label" for="equipo_local">Equipo Local</label>
                        <select id="equipo_local" name="equipo_local" class="form-control">
                            <option value="">Equipo</option>
                        </select>
                    </div>

                    {{-- equipo visita --}}
                    <div class="mb-3">
                        <label class="form-label" for="equipo_visita">Equipo Visita</label>
                        <select id="equipo_visita" name="equipo_visita" class="form-control">
                            <option value="">Equipo</option>
                        </select>
                    </div>

                    {{-- botones --}}
                    <div class="mb-3 d-grid gap-2">
                        <button class="btn btn-warning" type="reset">Cancelar</button>
                        <button class="btn btn-success" type="submit">Agregar Partido</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
