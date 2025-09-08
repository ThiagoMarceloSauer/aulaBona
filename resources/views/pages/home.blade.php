@extends('layout.app')

@section('title', 'Página Inicial')

@section('content')
<div class="container text-center mt-5">
    <h1>
    Controle:
    </h1>

    <div class="d-flex justify-content-center gap-3 mt-4 flex-wrap">
        <a href="{{ route('produtos.index') }}" class="btn btn-secondary btn-lg px-4 py-3">Produtos</a>
        <a href="{{ route('cadastro') }}" class="btn btn-secondary btn-lg px-4 py-3">Cadastro</a>
        <a href="{{ route('login') }}" class="btn btn-secondary btn-lg px-4 py-3">Login</a>
        <a href="{{ route('sobre') }}" class="btn btn-secondary btn-lg px-4 py-3">Sobre</a>
    </div>
</div>
@endsection

