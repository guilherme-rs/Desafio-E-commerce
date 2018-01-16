@extends('layouts.adm')
@section('titulo', 'Pedidos')
@section('conteudo')
    <h1> Pedidos </h1>

    <a href="{{ route('pedidos.create') }}">
        <span class="glyphicon glyphicon-plus"> Adicionar</span>
    </a>

    <table class="table table-hover">
        <thead>
            <th> ID </th>
            <th> Cliente </th>
            <th> Status pedido </th>
            <th> Status pagamento </th>
            <th> Valor </th>
        </thead>
        <tbody>
            @forelse($pedidos as $item)
                <tr>
                    <td> {{ $item -> id }} </td>
                    <td> {{ $item -> cliente -> nome }} </td>
                    <td> {{ $item -> status_pedido }} </td>
                    <td> {{ $item -> status_pgto }} </td>
                    <td> {{ $item -> vlr_total }} </td>
                    <td class="opcoes">
                        <a href="{{ route('pedidos.edit', ['id' => $item->id]) }}">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('pedidos.destroy',['id' => $item->id]) }}">
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
                    <td colspan="3"> Nenhum pedido cadastrado. </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection