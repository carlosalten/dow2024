@extends('templates.master',['tituloPagina'=>'Salas de Clases'])

@section('contenido-pagina')
{{-- agregar sala --}}
<div class="row">
    <div class="col text-end mb-2 mt-0">
        <a href="{{ route('salas.create') }}" class="btn btn-sm btn-outline-success pb-0">
            <span class="material-icons">add</span>
        </a>
    </div>
</div>
{{-- /agregar sala --}}

{{-- salas --}}
<div class="table-responsive mt-3">
    <table class="table table-stripped table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th>Nº</th>
                <th>Edificio</th>
                <th>Número</th>
                <th>Tipo</th>
                <th>Capacidad</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>G</td>
                <td>207</td>
                <td>Laboratorio Computadores</td>
                <td>40</td>
            </tr>
            <tr>
                <td>2</td>
                <td>G</td>
                <td>208</td>
                <td>Laboratorio Computadores</td>
                <td>40</td>
            </tr>
            <tr>
                <td>3</td>
                <td>U</td>
                <td>100</td>
                <td>Laboratorio Computadores</td>
                <td>35</td>
            </tr>
            <tr>
                <td>4</td>
                <td>U</td>
                <td>101</td>
                <td>Laboratorio Computadores</td>
                <td>35</td>
            </tr>
        </tbody>
    </table>
</div>
{{-- /salas --}}
@endsection
