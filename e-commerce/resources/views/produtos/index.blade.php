@extends('layouts.adm')
@section('titulo', 'Pagina de Produtos')
@section('conteudo')
    <h1> Produtos </h1>

    <a href="{{ route('produtos.create') }}">
        <span class="glyphicon glyphicon-plus"> Adicionar</span>
    </a>

    <table class="table table-hover">
        <thead>
            <th> ID </th>
            <th> Nome </th>
            <th> Categoria </th>
            <th> Preco </th>
            <th> Quantidade </th>
            <th> Status </th>
        </thead>
        <tbody>
            @forelse($produtos as $item)
                <tr>
                    <td> {{ $item -> id }} </td>
                    <td> {{ $item -> nome }} </td>
                    <td> {{ $item -> categoria -> nome }}</td>
                    <td> {{ $item -> preco }} </td>
                    <td> {{ $item -> quantidade }} </td>
                    <td> {{ $item -> status }} </td>
                    <td class="opcoes">
                        <a href="{{ route('produtos.edit', ['id' => $item->id]) }}">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('produtos.destroy',['id' => $item->id]) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-sm btn-danger">
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6"> Nenhum produto cadastrado. </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection