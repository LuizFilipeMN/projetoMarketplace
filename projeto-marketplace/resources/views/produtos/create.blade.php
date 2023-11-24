@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Criar Produto</h1>
        <form action="{{ route('produtos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Produto:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição:</label>
                <textarea class="form-control" id="descricao" name="descricao" required></textarea>
            </div>
            <div class="mb-3">
                <label for="preco" class="form-label">Preço:</label>
                <input type="number" class="form-control" id="preco" name="preco" step="0.01" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
        <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Voltar para a lista de produtos</a>
    </div>
@endsection
