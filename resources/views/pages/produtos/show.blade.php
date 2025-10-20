@extends('layout.app')

@section('title', $produto->nome)

@section('content')
<div class="card mb-4" style="max-width: 600px;">
    <img src="{{ Str::startsWith($produto->imagem, 'http') ? $produto->imagem : asset('storage/' . $produto->imagem) }}" class="card-img-top" alt="{{ $produto->nome }}">
    <div class="card-body">
        <h5 class="card-title">{{ $produto->nome }}</h5>
        <p class="card-text">{{ $produto->descricao }}</p>
        <p class="card-text"><strong>Preço:</strong> R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
    </div>
</div>
@endsection
