@extends('layout.app')

@section('title', 'Lista de Clientes')

@section('content')
<h2 class="mb-4">Clientes Cadastrados</h2>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>CPF</th>
            <th>E-mail</th>
            <th>CEP</th>
            <th>Logradouro</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>UF</th>
        </tr>
    </thead>
    <tbody>
        @forelse($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->nome }}</td>
            <td>{{ $cliente->sobrenome }}</td>
            <td>{{ $cliente->cpf }}</td>
            <td>{{ $cliente->email }}</td>
            <td>{{ $cliente->cep }}</td>
            <td>{{ $cliente->logradouro }}</td>
            <td>{{ $cliente->bairro }}</td>
            <td>{{ $cliente->cidade }}</td>
            <td>{{ $cliente->uf }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="10" class="text-center">Nenhum cliente cadastrado.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
