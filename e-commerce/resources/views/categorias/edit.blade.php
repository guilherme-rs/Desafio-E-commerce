@extends('layouts.adm')
@section('titulo', 'Alteraçao de Categorias')
@section('conteudo')
    <div class="container">
        <div class="col-xs-8">
            <h1> Alteraçao da Categoria {{ $nome }} </h1>
            <form method="post" action="{{ route('categorias.update', ['id' => $id]) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $nome }}">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição: </label>
                    <textarea cols="50" rows="5" class="form-control" id="descricao" name="descricao"> {{ $descricao }}</textarea>
                </div>
                <button type="submit" class="btn btn-default"> Alterar </button>
            </form>
        </div>
    </div>
@endsection