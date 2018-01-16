@extends('layouts.adm')
@section('titulo', 'Cadastro de Produtos')
@section('conteudo')
    <div class="container">
        <div class="col-xs-8">
            <h1> Cadastro de Produtos </h1>
            <form method="post" action="{{ route('produtos.update', ['id' => $id]) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $nome }}">
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria: </label>
                    <select name="categoria" id="categoria" class="form-control">
                        @forelse($categorias as $item){
                            @if($item->id == $id)
                                <option value="{{ $item -> id }}" selected>{{ $item -> nome }}</option>
                            @else
                                <option value="{{ $item -> id }}" >{{ $item -> nome }}</option>
                            @endif
                        }
                        @empty{
                            <option disabled> Nenhuma categoria cadastrada. </option>
                        }
                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <label for="preco">Preco: </label>
                    <input type="text" class="form-control" id="preco" name="preco" value="{{ $preco }}">
                </div>
                <div class="form-group">
                    <label for="quantidade">Quantidade: </label>
                    <input type="text" class="form-control" id="quantidade" name="quantidade" value="{{ $quantidade }}">
                </div>
                <div class="form-group">
                    <label for="status">Status: </label>
                    <select name="status" id="status" class="form-control">
                        @if($status == 'Ativo')
                            <option value="1" id="status" selected>Ativo</option>
                            <option value="0" id="status">Inativo</option>
                        @else
                            <option value="1" id="status">Ativo</option>
                            <option value="0" id="status" selected>Inativo</option>
                        @endif
                    </select>
                </div>
                <button type="submit" class="btn btn-default"> Cadastrar </button>
            </form>
        </div>
    </div>
@endsection