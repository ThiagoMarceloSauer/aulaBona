<div class="col-md-4 mb-3">
    <div class="card h-100">
        <img src="{{ $imagem ?? 'https://via.placeholder.com/300x200' }}" 
             class="card-img-top" 
             alt="{{ $nome ?? 'Produto' }}">
        <div class="card-body">
            <h5 class="card-title">{{ $nome ?? 'Nome do Produto' }}</h5>
            <p class="card-text">Categoria: {{ $categoria ?? 'Indefinida' }}</p>
            <a href="{{ route('produtos.show', [$id, $nome ?? 'produto', $categoria ?? 'geral']) }}" 
               class="btn btn-primary">
                Ver detalhes
            </a>
        </div>
    </div>
</div>
