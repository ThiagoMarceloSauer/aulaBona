@extends('layout.app')

@section('title', 'Cadastrar Produto')

@section('content')
<h2 class="mb-4">Cadastrar Produto</h2>

<form method="POST" action="{{ route('admin.produtos.store') }}" enctype="multipart/form-data">
    @csrf

    <x-input label="Nome" name="nome" />
    <x-input label="Descrição" name="descricao" type="text" />
    <x-input label="Preço" name="preco" type="number" step="0.01" />

    <div class="mb-3">
        <label for="imagem" class="form-label">Imagem</label>
        <input class="form-control" type="file" id="imagem" name="imagem">
    </div>

    <x-botao type="submit">Cadastrar</x-botao>
</form>
@endsection
