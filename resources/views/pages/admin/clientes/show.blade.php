@extends('layouts.app')

@section('title', 'Detalhes do Cliente')

@section('content')
    <h1>Detalhes do Cliente</h1>

    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Cliente ID: {{ $id }}</h5>
            <p><strong>Nome:</strong> Exemplo Nome</p>
            <p><strong>Email:</strong> exemplo@email.com</p>
            <p><strong>Telefone:</strong> (47) 99999-9999</p>
        </div>
    </div>

    <a href="{{ route('admin.clientes.index') }}" class="btn btn-secondary mt-3">Voltar</a>
@endsection
