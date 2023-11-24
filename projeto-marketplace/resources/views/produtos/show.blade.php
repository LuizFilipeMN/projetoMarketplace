@extends('layouts.app')

@section('content')
    <h1>Detalhes do Produto</h1>
    <p><strong>Nome:</strong> {{ $produto->nome }}</p>
    <p><strong>Descrição:</strong> {{ $produto->descricao }}</p>
    <p><strong>Preço:</strong> {{ $produto->preco }}</p>
    <a href="{{ route('produtos.index') }}">Voltar para a lista de produtos</a>
@endsection
