@extends('layout.app')

@section('title', 'Produtos')

@section('content')
  <h2 class="mb-4">Lista de Produtos</h2>

  @php
    $produtos = [
      ['id' => 1, 'nome' => 'Mesa de Cabeceira', 'img' => 'https://www.havan.com.br/media/catalog/product/cache/73a52df140c4d19dbec2b6c485ea6a50/m/e/mesa-de-cabeceira-mdf-havan-casa_1067203.jpg'],
      ['id' => 2, 'nome' => 'Escrivaninha', 'img' => 'https://www.havan.com.br/media/catalog/product/cache/73a52df140c4d19dbec2b6c485ea6a50/e/s/escrivaninha-com-2-gavetas-90x45cm-ferbatke_348798.webp'],
      ['id' => 3, 'nome' => 'Mesa de Centro', 'img' => 'https://www.havan.com.br/media/catalog/product/m/e/mesa-de-apoio-alta-havan_1142106.jpg'],
    ];
  @endphp

  <div class="row g-3">
    @foreach($produtos as $p)
      <div class="col-12 col-sm-6 col-lg-4">
        <x-card-produto
          :titulo="$p['nome']"
          :imagem="$p['img']"
          :link="url('/produtos/'.$p['id'])"
        />
      </div>
    @endforeach
  </div>
@endsection