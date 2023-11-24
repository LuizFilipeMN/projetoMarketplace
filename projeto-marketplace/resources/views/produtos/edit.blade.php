@extends('layouts.app')

@section('content')
    <h1>Editar Produto</h1>
    <form action="{{ route('produtos.update', $produto) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nome">Nome do Produto:</label>
            <input type="text" id="nome" name="nome" value="{{ $produto->nome }}" required>
        </div>
        <div>
            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" required>{{ $produto->descricao }}</textarea>
        </div>
        <div>
            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" step="0.01" value="{{ $produto->preco }}" required>
        </div>
        <div>
            <button type="submit">Atualizar</button>
        </div>
    </form>
    <a href="{{ route('produtos.index') }}">Voltar para a lista de produtos</a>
@endsection
