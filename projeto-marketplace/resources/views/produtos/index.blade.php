@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listagem de Produtos</h1>
        <table class="table table-bordered">
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
                            <a class="btn btn-primary" href="{{ route('produtos.show', $produto) }}">Ver</a>
                            <a class="btn btn-warning" href="{{ route('produtos.edit', $produto) }}">Editar</a>
                            <form action="{{ route('produtos.destroy', $produto) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-success" href="{{ route('produtos.create') }}">Adicionar Produto</a>
    </div>
@endsection
