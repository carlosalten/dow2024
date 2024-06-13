@extends('templates.master',['tituloPagina'=>'Mis Solicitudes'])
@inject('carbon','Carbon\Carbon')

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
                <th colspan="2">Ingresada</th>
                <th>Tipo</th>
                <th>Estado</th>
                <th>Resolución</th>
            </tr>
        </thead>
        <tbody>
            @foreach($solicitudes as $index=>$solicitud)
            <tr>
                <td>{{ $index+1 }}</td>
                <td>{{ $carbon::parse($solicitud->created_at)->format('d-m-Y') }}</td>
                <td>{{ $carbon::parse($solicitud->created_at)->format('H:i') }} hrs.</td>
                <td>{{ $solicitud->nombreTipo() }}</td>
                <td>{{ $solicitud->nombreEstado() }}</td>
                <td>{{ $solicitud->nombreResolucion() }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{-- /solicitudes --}}
@endsection
