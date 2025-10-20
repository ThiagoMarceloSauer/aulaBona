@extends('layout.app')

@section('title', 'Produtos')

@section('content')
  <h2 class="mb-4">Lista de Produtos</h2>

  
  <div class="row g-3">
@foreach($produtos as $p)
    <x-card-produto
      :titulo="$p->nome"
      :imagem="asset('storage/' . $p->imagem)"
      :link="url('/produtos/'.$p->id)"
    />
@endforeach

  </div>
@endsection