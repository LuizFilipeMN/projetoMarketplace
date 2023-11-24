@extends('layouts.app')

@section('content')
    <h1>Listagem de Produtos</h1>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
                <tr>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td>{{ $produto->preco }}</td>
                    <td>
                        <a href="{{ route('produtos.show', $produto) }}">Ver</a>
                        <a href="{{ route('produtos.edit', $produto) }}">Editar</a>
                        <form action="{{ route('produtos.destroy', $produto) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('produtos.create') }}">Adicionar Produto</a>
@endsection
