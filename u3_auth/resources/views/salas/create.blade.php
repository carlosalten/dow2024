@extends('templates.master',['tituloPagina'=>'Crear Sala'])

@section('contenido-pagina')
{{-- volver a lista de salas --}}
<div class="row">
    <div class="col text-end mb-2 mt-0">
        <a href="{{ route('salas.index') }}" class="btn btn-sm btn-outline-warning pb-0">
            <span class="material-icons">arrow_back</span>
        </a>
    </div>
</div>
{{-- /volver a lista de salas --}}
@endsection
