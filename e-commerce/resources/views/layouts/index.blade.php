<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1"/>
    <meta name="author" content="Guilherme Rodrigues Sousa">

    <title> E-commerce Puzzle Lab - @yield('titulo', 'Home Page') </title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="conteudo">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('home') }}"> E-commerce Puzzle Lab </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('clientes.create') }}"><span class="glyphicon glyphicon-user"></span> Registre-se </a></li>
                <li><a href="{{ route('login.cliente') }}"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
                <li><a href="{{ route('login.admin') }}"><span class="glyphicon glyphicon-lock"></span> Acesso Restrito </a></li>
            </ul>
        </div>
    </nav>
    @yield('conteudo')
</div>
</body>
</html>