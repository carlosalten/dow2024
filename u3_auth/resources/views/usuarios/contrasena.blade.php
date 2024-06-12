@extends('templates.master',['tituloPagina'=>'Cambiar Mi Contraseña'])

@section('contenido-pagina')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form method="POST">
                    @csrf
                    {{-- contraseña actual --}}
                    <div class="mb-3">
                        <label for="contrasena_actual">Contraseña Actual</label>
                        <input type="password" class="form-control" id="contrasena_actual" name="contrasena_actual">
                    </div>

                    {{-- contraseña nueva --}}
                    <div class="mb-3">
                        <label for="contrasena_nueva">Contraseña Nueva</label>
                        <input type="password" class="form-control" id="contrasena_nueva" name="contrasena_nueva">
                    </div>

                    {{-- confirmar contraseña nueva --}}
                    <div class="mb-3">
                        <label for="repetir_contrasena_nueva">Repetir Contraseña Nueva</label>
                        <input type="password" class="form-control" id="repetir_contrasena_nueva" name="repetir_contrasena_nueva">
                    </div>

                    {{-- botones --}}
                    <div class="mb-3 d-grid gap-2 d-md-block text-end">
                        <button type="reset" class="btn btn-warning">Restablecer</button>
                        <button type="submit" class="btn btn-success">Cambiar Contraseña</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
