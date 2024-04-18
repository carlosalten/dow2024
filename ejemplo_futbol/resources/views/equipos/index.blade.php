<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-custom.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                    <a href="http://localhost:8000/login" class="text-white">Cerrar Sesión</a>
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
                            <a class="nav-link " aria-current="page" href="http://localhost:8000">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  active " href="http://localhost:8000/equipos">Equipos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Estadios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Estadísticas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="http://localhost:8000/jugadores">Jugadores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="http://localhost:8000/partidos">Partidos</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Configuración
                            </a>
                            <ul class="dropdown-menu bg-primary dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#">Cambiar Contraseña</a></li>
                                <li><a class="dropdown-item" href="#">Usuarios</a></li>
                                <li><a class="dropdown-item" href="#">Privacidad</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="https://www.usm.cl">UTFSM</a></li>
                            </ul>
                        </li>
                        <li class="nav-item d-lg-none">
                            <a class="nav-link" href="http://localhost:8000/login">Cerrar Sesión</a>
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
        <div class="row">
            <div class="col">
                <h4>Equipos</h4>
            </div>
        </div>

        <div class="row">
            <!-- tabla -->
            <div class="col-12 col-lg-8 order-last order-lg-first">
                <table class="table table striped table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>N°</th>
                            <th>Nombre</th>
                            <th>Entrenador</th>
                            <th>Jugadores</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($equipos as $index=>$equipo)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $equipo->nombre }}</td>
                            <td>{{ $equipo->entrenador }}</td>
                            <td>10</td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <form method="POST" action="http://localhost:8000/equipos/1">
                                            <input type="hidden" name="_method" value="delete"> <input type="hidden" name="_token" value="skrXwOqOq9w7SDl5FFM1Al8I2qDg3SO66QwKjkHm"> <button class="btn btn-sm btn-danger" type="submit" data-bs-toggle="tooltip" data-bs-title="Borrar Curicó Unido">
                                                <span class="material-icons">delete</span>
                                            </button>
                                        </form>

                                    </div>
                                    <div class="col">
                                        <a href="http://localhost:8000/equipos/1/edit" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip" data-bs-title="Editar Curicó Unido">
                                            <span class="material-icons">edit</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="http://localhost:8000/equipos/1" class="btn btn-sm btn-info pb-0 text-white position-relative" data-bs-toggle="tooltip" data-bs-title="Ver Curicó Unido">
                                            <span class="material-icons">group</span>
                                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                                10
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            <!-- form -->
            <div class="col-12 col-lg-4 order-first order-lg-last mb-3">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        Agregar Equipo
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" id="nombre" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="entrenador" class="form-label">Entrenador</label>
                                <input type="text" id="entrenador" class="form-control">
                            </div>
                            <div class="mb-3 d-grid gap-2 d-lg-block">
                                <button class="btn btn-warning">Cancelar</button>
                                <button class="btn btn-success">Agregar Equipo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

    </script>
</body>

</html>
