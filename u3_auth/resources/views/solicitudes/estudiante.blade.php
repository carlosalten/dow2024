@extends('templates.master',['tituloPagina'=>'Mis Solicitudes'])

@section('contenido-pagina')
{{-- agregar solicitud --}}
<div class="row">
    <div class="col text-end mb-2 mt-0">
        <a href="#" class="btn btn-sm btn-outline-success pb-0">
            <span class="material-icons">add</span>
        </a>
    </div>
</div>
{{-- /agregar solicitud --}}

{{-- solicitudes --}}
<div class="table-responsive mt-3">
    <table class="table table-stripped table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th>Nº</th>
                <th>Ingresada</th>
                <th>Tipo</th>
                <th>Estado</th>
                <th>Resolución</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
{{-- /solicitudes --}}
@endsection
