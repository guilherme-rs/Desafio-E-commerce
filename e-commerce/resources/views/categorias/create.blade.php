@extends('layouts.adm')
@section('titulo', 'Cadastro de Categorias')
@section('conteudo')
    <div class="container">
        <div class="col-xs-8">
            <h1> Cadastro de Categorias </h1>
            <form method="post" action="{{ route('categorias.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição: </label>
                    <textarea cols="50" rows="5" class="form-control" id="descricao" name="descricao"></textarea>
                </div>
                <button type="submit" class="btn btn-default"> Cadastrar </button>
            </form>
        </div>
    </div>
@endsection