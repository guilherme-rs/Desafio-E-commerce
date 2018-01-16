<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1"/>
    <meta name="author" content="Guilherme Rodrigues Sousa">

    <title> E-commerce Puzzle Lab </title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #2a2a2a">
    <div class="container">
        <div class="col-xs-5" style="margin-left: 30%">
            <h1 class="text-center" style="color: white;">Login</h1>
            @if($erro == true)
                <div>
                    <p style="color:red"> Usuário e senha não correspondem ou não existe. </p>
                </div>
            @endif
            <form method="post" action="{{ route('login.validarCliente') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label class="sr-only" for="login">Usuário</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-user"></span>
                        </div>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Seu e-mail de login">
                    </div>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="senha">Senha</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-lock"></span>
                        </div>
                        <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua senha">
                    </div>
                </div>
                <button type="submit" class="btn btn-success form-control">Entrar</button>
                <div class="form-group" style="color: white">
                    Não é registrado? <a href="{{ route('clientes.create') }}">Crie uma conta</a>.
                </div>
            </form>
        </div>
    </div>
</body>
</html>