@extends('templates.master',['tituloPagina'=>'Crear Usuario'])

@section('contenido-pagina')
{{-- volver a lista de usuarios --}}
<div class="row">
    <div class="col text-end mb-2 mt-0">
        <a href="{{ route('usuarios.index') }}" class="btn btn-sm btn-outline-warning pb-0">
            <span class="material-icons">arrow_back</span>
        </a>
    </div>
</div>
{{-- /volver a lista de usuarios --}}

{{-- formulario --}}
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form method="POST">
                    @csrf
                    {{-- email --}}
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    {{-- nombre --}}
                    <div class="mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>

                    {{-- rol --}}
                    <div class="mb-3">
                        <label for="rol">Rol</label>
                        <select name="rol" id="rol" class="form-control">
                            @foreach($roles as $rol)
                            <option value="{{ $rol->id }}">{{ $rol->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- contraseña --}}
                    <div class="mb-3">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    {{-- confirmar contraseña --}}
                    <div class="mb-3">
                        <label for="password2">Repetir Contraseña</label>
                        <input type="password" class="form-control" id="password2" name="password2">
                    </div>

                    {{-- botones --}}
                    <div class="mb-3 d-grid gap-2 d-md-block text-end">
                        <button type="reset" class="btn btn-warning">Restablecer</button>
                        <button type="submit" class="btn btn-success">Crear Usuario</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- /formulario --}}
@endsection
