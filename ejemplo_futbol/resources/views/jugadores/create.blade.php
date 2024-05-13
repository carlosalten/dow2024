@extends('templates.master')

@section('contenido-principal')
{{-- titulo --}}
<div class="row mt-3">
    <div class="col-8">
        <h3>Agregar Jugador</h3>
    </div>
    <div class="col-4 d-flex align-items-center justify-content-end">
        <a href="{{route('jugadores.index')}}" class="btn btn-warning">Cancelar</a>
    </div>
</div>

{{-- formulario --}}
<div class="col">
    <div class="card">
        <div class="card-header bg-dark text-white">Ingrese los datos del nuevo jugador</div>
        <div class="card-body">
            {{-- mensajes de error --}}
            @if($errors->any())
            <div class="alert alert-danger">
                <p>Por favor solucione los siguientes problemas:</p>
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            {{-- /mensajes de error --}}
            <form method="POST" action="{{ route('jugadores.store') }}">
                @csrf
                <div class="row">
                    {{-- nombre --}}
                    <div class="mb-3 col-12 col-md-6">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}">
                        @error('nombre')
                        <div id="nombreFeedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    {{-- apellido --}}
                    <div class="mb-3 col-12 col-md-6">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" id="apellido" name="apellido" class="form-control @error('apellido') is-invalid @enderror" value="{{ old('apellido') }}">
                        @error('apellido')
                        <div id="apellidoFeedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    {{-- rut --}}
                    <div class="mb-3 col-12 col-md-6">
                        <label for="rut" class="form-label">RUT</label>
                        <input type="text" id="rut" name="rut" class="form-control @error('rut') is-invalid @enderror" value="{{old('rut')}}">
                        @error('rut')
                        <div id="rutFeedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    {{-- número de camiseta --}}
                    <div class="mb-3 col-12 col-md-6">
                        <label for="numero_camiseta" class="form-label">Número de Camiseta</label>
                        <input type="text" id="numero_camiseta" name="numero_camiseta" class="form-control @error('numero_camiseta') is-invalid @enderror" value="{{old('numero_camiseta')}}">
                        @error('numero_camiseta')
                        <div id="numero_camisetaFeedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    {{-- posición en la que juega --}}
                    <div class="mb-3 row px-3">
                        <div class="col-12 ps-0">
                            <label class="form-label">Posición</label>
                        </div>

                        <div class="form-check col-12 col-md-3 is-invalid">
                            <input class="form-check-input" type="radio" name="posicion" id="pos_arquero" value="Arquero" checked>
                            <label class="form-check-label" for="pos_arquero">
                                Arquero
                            </label>
                        </div>
                        <div class="form-check col-12 col-md-3">
                            <input class="form-check-input" type="radio" name="posicion" id="pos_defensa" value="Defensa">
                            <label class="form-check-label" for="pos_defensa">
                                Defensa
                            </label>
                        </div>
                        <div class="form-check col-12 col-md-3">
                            <input class="form-check-input" type="radio" name="posicion" id="pos_volante" value="Volante">
                            <label class="form-check-label" for="pos_volante">
                                Volante
                            </label>
                        </div>
                        <div class="form-check col-12 col-md-3">
                            <input class="form-check-input" type="radio" name="posicion" id="pos_delantero" value="Delantero">
                            <label class="form-check-label" for="pos_delantero">
                                Delantero
                            </label>
                        </div>
                    </div>
                    {{-- equipo --}}
                    <div class="mb-3">
                        <label class="form-label" for="equipo">Equipo</label>
                        <select id="equipo" name="equipo" class="form-control @error('equipo') is-invalid @enderror">
                            <option value="0">Seleccione</option>
                            @foreach($equipos as $equipo)
                            <option value="{{$equipo->id}}" @if(old('equipo')==$equipo->id) selected @endif>{{ $equipo->nombre }}</option>
                            @endforeach
                        </select>
                        @error('equipo')
                        <div id="equipoFeedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    {{-- botones --}}
                    <div class="mb-3 d-grid gap-2 d-lg-block">
                        <button class="btn btn-warning" type="reset">Restablecer</button>
                        <button class="btn btn-success" type="submit">Agregar Jugador</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
