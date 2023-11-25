@extends('layouts.app')

@section('content')
    <div class="container">
        <h1><i class="bi bi-house-door"></i> Listagem de Produtos</h1>
        <a class="btn btn-success mt-2 mb-3" href="{{ route('produtos.create') }}">Adicionar Produto</a>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produtos as $produto)
                        <tr>
                            <td>
                                <img src="{{ $produto->foto_url }}" alt="{{ $produto->nome }}" width="100">
                            </td>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->descricao }}</td>
                            <td>{{ $produto->preco }}</td>
                            <td class="">
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
        </div>
    </div>
@endsection
