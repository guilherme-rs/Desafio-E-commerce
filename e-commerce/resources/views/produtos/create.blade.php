@extends('layouts.adm')
@section('titulo', 'Cadastro de Produtos')
@section('conteudo')
    <div class="container">
        <div class="col-xs-8">
            <h1> Cadastro de Produtos </h1>
            <form method="post" action="{{ route('produtos.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria: </label>
                    <select name="categoria" id="categoria" class="form-control">
                        @forelse($categorias as $item){
                            <option value="{{ $item -> id }}" >{{ $item -> nome }}</option>
                        }
                        @empty{
                            <option disabled> Nenhuma categoria cadastrada. </option>
                        }
                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <label for="preco">Preco: </label>
                    <input type="text" class="form-control" id="preco" name="preco">
                </div>
                <div class="form-group">
                    <label for="quantidade">Quantidade: </label>
                    <input type="text" class="form-control" id="quantidade" name="quantidade">
                </div>
                <div class="form-group">
                    <label for="status">Status: </label>
                    <select name="status" id="status" class="form-control">
                        <option value="1" id="status">Ativo</option>
                        <option value="0" id="status">Inativo</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-default"> Cadastrar </button>
            </form>
        </div>
    </div>
@endsection