@extends('templates.master')

@section('contenido-principal')
<div class="row mt-3">
    <div class="col">
        <h3>Tabla de Posiciones</h3>
    </div>
</div>

<div class="row">
    <!-- tabla -->
    <div class="table-responsive">
        <div class="col-12">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="bg-dark text-white d-md-none">Pos.</th>
                        <th class="bg-dark text-white d-none d-md-table-cell">Posición</th>
                        <th class="bg-dark text-white">Equipo</th>
                        <th style="background-color:#00B7D8" class="d-lg-none">PJ</th>
                        <th style="background-color:#00B7D8" class="d-lg-none">PG</th>
                        <th style="background-color:#00B7D8" class="d-lg-none">PE</th>
                        <th style="background-color:#00B7D8" class="d-lg-none">PP</th>
                        <th style="background-color:#00B7D8" class="d-none d-lg-table-cell">Jugados</th>
                        <th style="background-color:#00B7D8" class="d-none d-lg-table-cell">Ganados</th>
                        <th style="background-color:#00B7D8" class="d-none d-lg-table-cell">Empatados</th>
                        <th style="background-color:#00B7D8" class="d-none d-lg-table-cell">Perdidos</th>
                        <th style="background-color:#EC9B00" class="d-none d-lg-table-cell">Goles Favor</th>
                        <th style="background-color:#EC9B00" class="d-none d-lg-table-cell">Goles En Contra</th>
                        <th style="background-color:#EC9B00" class="d-lg-none">Dif. Gol</th>
                        <th style="background-color:#EC9B00" class="d-none d-lg-table-cell">Diferencia</th>
                        <th style="background-color:#6DD77A" class="d-md-none">Pts.</th>
                        <th style="background-color:#6DD77A" class="d-none d-md-table-cell">Puntos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle text-center">1</td>
                        <td class="align-middle">Universidad de Chile</td>
                        <td class="align-middle text-center">11</td>
                        <td class="align-middle text-center">7</td>
                        <td class="align-middle text-center">4</td>
                        <td class="align-middle text-center">0</td>
                        <td class="align-middle text-center d-none d-lg-table-cell">21</td>
                        <td class="align-middle text-center d-none d-lg-table-cell">9</td>
                        <td class="align-middle text-center">12</td>
                        <td class="align-middle text-center fw-bold" style="background-color:#C8F1D0">25</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-center">2</td>
                        <td class="align-middle">Palestino</td>
                        <td class="align-middle text-center">11</td>
                        <td class="align-middle text-center">6</td>
                        <td class="align-middle text-center">3</td>
                        <td class="align-middle text-center">2</td>
                        <td class="align-middle text-center d-none d-lg-table-cell">18</td>
                        <td class="align-middle text-center d-none d-lg-table-cell">7</td>
                        <td class="align-middle text-center">11</td>
                        <td class="align-middle text-center fw-bold" style="background-color:#C8F1D0">21</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-center">3</td>
                        <td class="align-middle">Coquimbo Unido</td>
                        <td class="align-middle text-center">11</td>
                        <td class="align-middle text-center">6</td>
                        <td class="align-middle text-center">3</td>
                        <td class="align-middle text-center">2</td>
                        <td class="align-middle text-center d-none d-lg-table-cell">18</td>
                        <td class="align-middle text-center d-none d-lg-table-cell">7</td>
                        <td class="align-middle text-center">11</td>
                        <td class="align-middle text-center fw-bold" style="background-color:#C8F1D0">21</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
