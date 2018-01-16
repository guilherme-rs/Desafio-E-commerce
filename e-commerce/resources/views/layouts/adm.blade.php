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
                <a class="navbar-brand" href="{{ route('adm') }}"> E-commerce Puzzle Lab </a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{ route('categorias.index') }}"> Categorias </a></li>
                <li><a href="{{ route('produtos.index') }}"> Produtos </a></li>
                <li><a href="{{ route('clientes.index') }}"> Clientes </a></li>
				<li><a href="{{ route('pedidos.index') }}"> Pedidos </a></li>
            </ul>
        </div>
    </nav>
    @yield('conteudo')
</div>
</body>
</html>