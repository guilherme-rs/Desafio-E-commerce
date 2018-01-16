@extends('layouts.adm')
@section('titulo', 'Pagina de Clientes')
@section('conteudo')
    <h1> Clientes </h1>

    <table class="table table-hover">
        <thead>
            <th> ID </th>
            <th> Nome </th>
            <th> E-mail </th>
        </thead>
        <tbody>
            @forelse($clientes as $item)
                <tr>
                    <td> {{ $item -> id }} </td>
                    <td> {{ $item -> nome }} </td>
                    <td> {{ $item -> email }} </td>
                    <td class="opcoes">
                        <a href="{{ route('clientes.edit', ['id' => $item->id]) }}">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('clientes.destroy',['id' => $item->id]) }}">
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
                    <td colspan="3"> Nenhum cliente cadastrado. </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection