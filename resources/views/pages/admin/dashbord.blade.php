@extends('layouts.app')

@section('title', 'Painel Administrativo')

@section('content')
    <h1>Painel Administrativo</h1>
    <p>Bem-vindo, administrador!</p>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card text-bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Clientes</h5>
                    <p class="card-text">Gerencie os clientes cadastrados.</p>
                    <a href="{{ route('admin.clientes.index') }}" class="btn btn-light">Ver clientes</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Produtos</h5>
                    <p class="card-text">Gerencie os produtos cadastrados.</p>
                    <a href="{{ route('produtos.index') }}" class="btn btn-light">Ver produtos</a>
                </div>
            </div>
        </div>
    </div>
@endsection
