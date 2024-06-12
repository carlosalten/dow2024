@inject('carbon','Carbon\Carbon')

@extends('templates.master',['tituloPagina'=>'Solicitudes de Estudiantes'])

@php
$tipos = [1 => 'Convalidación',2 => 'Cambio de Carrera',3 => 'Inscripción de Asignatura',4 => 'Desinscripción de Asignatura'];
$estados = [0 => 'Pendiente',1=>'Procesando',2=>'Finalizada'];
$resoluciones = [0 => 'Sin resolución',1 => 'Rechazada',2 => 'Aceptada',3 => 'Aceptada con condiciones'];
@endphp

@section('contenido-pagina')
{{-- solicitudes --}}
<div class="table-responsive mt-3">
    <table class="table table-stripped table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th>Nº</th>
                <th>Estudiante</th>
                <th>Ingresada</th>
                <th>Tipo</th>
                <th>Estado</th>
                <th>Resolución</th>
                <th>Última Actualización</th>
            </tr>
        </thead>
        <tbody>
            @foreach($solicitudes as $index=>$solicitud)
            <tr>
                <td class="small text-center">{{ $index+1 }}</td>
                <td class="small">{{ $solicitud->estudiante->nombre }}</td>
                <td class="small text-center">{{ $carbon::parse($solicitud->created_at)->format('d-m-Y h:i a') }}</td>
                <td class="small">{{ $tipos[$solicitud->tipo] }}</td>
                <td class="small">{{ $estados[$solicitud->estado] }}</td>
                <td class="small">{{ $resoluciones[$solicitud->resolucion] }}</td>
                <td class="small text-center">{{ $carbon::parse($solicitud->updated_at)->format('d-m-Y h:i a') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{-- /solicitudes --}}
@endsection
