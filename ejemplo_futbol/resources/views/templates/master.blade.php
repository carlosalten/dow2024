<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-custom.min.css') }}">
    @yield('hojas-estilo')
    <title>Sistema de Campeonato de Fútbol</title>
</head>

<body>
    <!-- usuario -->
    <div class="container-fluid">
        <div class="row bg-dark text-white">
            <div class="row">
                <!-- user activo -->
                <div class="col-8">
                    Bienvenido <span class="fw-bold">User1</span>
                </div>

                <!-- último  login -->
                <div class="col-3 text-end d-none d-lg-block">
                    Último inicio de sesión: 4 de abril de 2023 a las 9:25
                </div>

                <!-- cerrar sesión -->
                <div class="col-1 text-end d-none d-lg-block">
                    <a href="#" class="text-white">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </div>

    <!-- navbar -->
    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">EIN133_A</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='home.index') active @endif" aria-current="page" href="{{ route('home.index') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='equipos.index') active @endif" href="{{ route('equipos.index') }}">Equipos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='estadios.index') active @endif" href="{{ route('estadios.index') }}">Estadios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='estadisticas.index') active @endif" href="{{ route('estadisticas.index') }}">Estadísticas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='jugadores.index' || Route::current()->getName()=='jugadores.create') active @endif" href="{{ route('jugadores.index') }}">Jugadores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='partidos.index') active @endif" href="{{ route('partidos.index') }}">Partidos</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Configuración
                            </a>
                            <ul class="dropdown-menu bg-primary dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#">Cambiar Contraseña</a></li>
                                <li><a class="dropdown-item" href="#">Usuarios</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="https://www.usm.cl">UTFSM</a></li>
                            </ul>
                        </li>
                        <li class="nav-item d-lg-none">
                            <a class="nav-link" href="#">Cerrar Sesión</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <!-- contenido principal -->
    <div class="container-fluid">
        @yield('contenido-principal')
    </div>
    <!-- /contenido principal-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @yield('scripts')
</body>

</html>
