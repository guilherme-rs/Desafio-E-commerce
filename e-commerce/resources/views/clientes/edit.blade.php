@extends('layouts.adm')
@section('titulo', 'Alteraçao de Clientes')
@section('conteudo')
    <div class="container">
        <div class="col-xs-8">
            <h1> Editar cliente {{ $nome }} </h1>
            <form method="post" action="{{ route('clientes.update', ['id' => $id]) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $nome }}">
                </div>
                <div class="form-group">
                    <label for="email">E-mail: </label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $email }}">
                </div>
                <button type="submit" class="btn btn-default"> Cadastrar </button>
            </form>
        </div>
    </div>
@endsection