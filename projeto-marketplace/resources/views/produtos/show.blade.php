@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalhes do Produto</h1>
        <div class="mb-3">
            <p><strong>Nome:</strong> {{ $produto->nome }}</p>
        </div>
        <div class="mb-3">
            <p><strong>Descrição:</strong> {{ $produto->descricao }}</p>
        </div>
        <div class="mb-3">
            <p><strong>Preço:</strong> {{ $produto->preco }}</p>
        </div>
        <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Voltar para a lista de produtos</a>
    </div>
@endsection
