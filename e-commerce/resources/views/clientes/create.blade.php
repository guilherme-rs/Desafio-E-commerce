@extends('layouts.index')
@section('titulo', 'Registro de Clientes')
@section('conteudo')
    <div class="container">
        <div class="col-xs-8">
            <h1> Cadastro de Clientes </h1>
            @if($erro == true)
                <div>
                    <p style="color:red"> Senhas informadas não coincidem. </p>
                </div>
            @endif
            <form method="post" action="{{ route('clientes.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="form-group">
                    <label for="senha">Senha: </label>
                    <input type="password" class="form-control" id="senha" name="senha">
                </div>
                <div class="form-group">
                    <label for="senha2">Confirme sua senha: </label>
                    <input type="password" class="form-control" id="senha2" name="senha2">
                </div>
                <div class="form-group">
                    <label for="email">E-mail: </label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <button type="submit" class="btn btn-default"> Cadastrar </button>
            </form>
        </div>
    </div>
@endsection