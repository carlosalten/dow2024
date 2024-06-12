@extends('templates.master',['tituloPagina'=>'Bienvenido al Sistema de Solicitudes de Estudiantes'])

@section('contenido-pagina')
{{-- card opciones navegación --}}
<div class="row mt-3">
    <x-card-inicio titulo="Mis Solicitudes" descripcion="Ingreso y rastreo de solicitudes académicas que has ingresado." url="solicitudes.estudiante" texto-boton="Ver Mis Solicitudes" />
    <x-card-inicio titulo="Solicitudes de Estudiantes" descripcion="Ingreso, rastreo y gestiuón de solicitudes académicas ingresadas por estudiantes." url="solicitudes.index" texto-boton="Ver Solicitudes" />
    <x-card-inicio titulo="Gestión de Usuarios" descripcion="Mantención de usuarios, incluyendo opción para activar/desactivar cuentas" url="usuarios.index" texto-boton="Gestionar Usuarios" />
    <x-card-inicio titulo="Cambiar mi Contraseña" descripcion="Use está opción en caso de necesitar cambiar su contraseña de acceso al sistema" url="usuarios.contrasena" texto-boton="Cambiar Mi Contraseña" />
</div>
{{-- /card opciones navegación --}}
@endsection
