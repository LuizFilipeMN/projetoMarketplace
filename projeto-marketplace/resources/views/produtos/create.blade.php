@extends('layouts.app')

@section('content')
    <h1>Criar Produto</h1>
    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        <div>
            <label for="nome">Nome do Produto:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <div>
            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" required></textarea>
        </div>
        <div>
            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" step="0.01" required>
        </div>
        <div>
            <button type="submit">Salvar</button>
        </div>
    </form>
    <a href="{{ route('produtos.index') }}">Voltar para a lista de produtos</a>
@endsection