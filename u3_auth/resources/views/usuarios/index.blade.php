@extends('templates.master',['tituloPagina'=>'Gestión de Usuarios'])

@section('contenido-pagina')
{{-- agregar usuario --}}
<div class="row">
    <div class="col text-end mb-2 mt-0">
        <a href="{{ route('usuarios.create') }}" class="btn btn-sm btn-outline-success pb-0">
            <span class="material-icons">add</span>
        </a>
    </div>
</div>
{{-- /agregar usuario --}}

{{-- usuarios --}}
<div class="table-responsive">
    <table class="table table-stripped table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th>Nº</th>
                <th>Email</th>
                <th>Nombre</th>
                <th>Rol</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $index=>$usuario)
            <tr>
                <td class="small text-center">{{ $index+1 }}</td>
                <td class="small">{{ $usuario->email }}</td>
                <td class="small">{{ $usuario->nombre }}</td>
                <td class="small">{{ $usuario->rol->nombre }}</td>
                <td class="small">{{ $usuario->activo?'Activo':'Baneado' }}</td>
                <td class="text-center">
                    @if($usuario->activo)
                    <a href="#" class="btn btn-sm btn-danger pb-0">
                        <i class="material-icons text-white" style="font-size: 1.1em">person_off</i>
                    </a>
                    @else
                    <a href="#" class="btn btn-sm btn-info pb-0">
                        <i class="material-icons text-white" style="font-size: 1.1em">person</i>
                    </a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{-- /usuarios --}}
@endsection
