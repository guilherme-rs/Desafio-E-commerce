@extends('layouts.adm')
@section('titulo', 'Pagina de Categorias')
@section('conteudo')
    <h1> Categorias </h1>

    <a href="{{ route('categorias.create') }}">
        <span class="glyphicon glyphicon-plus"> Adicionar</span>
    </a>

    <table class="table table-hover">
        <thead>
            <th> ID </th>
            <th> Nome </th>
            <th> Descriçao </th>
        </thead>
        <tbody>
            @forelse($categorias as $item)
                <tr>
                    <td> {{ $item -> id }} </td>
                    <td> {{ $item -> nome }} </td>
                    <td> {{ $item -> descricao }} </td>
                    <td class="opcoes">
                        <a href="{{ route('categorias.edit', ['id' => $item->id]) }}">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('categorias.destroy',['id' => $item->id]) }}">
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
                    <td colspan="3"> Nenhuma categoria cadastrada. </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection