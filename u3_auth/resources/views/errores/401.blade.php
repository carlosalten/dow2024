<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>No Autorizado</title>
</head>
<body class="vh-100" style="background-color:#FEA917">
    <div class="d-flex flex-column justify-content-center align-items-center h-100">
        <img class="img-fluid" src="{{ asset('images/unauthorized.png') }}" style="width:15rem">
        <div>
            <a href="{{ route('home.index') }}" class="btn btn-outline-light">Continuar</a>
        </div>
    </div>
</body>
</html>
