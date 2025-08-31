@extends('layouts.app')

@section('title', 'Clientes - Admin')

@section('content')
    <h1>Lista de Clientes</h1>

    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            {{-- Exemplo estático (substituir depois por dados do banco) --}}
            <tr>
                <td>1</td>
                <td>João Silva</td>
                <td>joao@email.com</td>
                <td>
                    <a href="{{ route('admin.clientes.show', 1) }}" class="btn btn-sm btn-primary">Ver</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Maria Oliveira</td>
                <td>maria@email.com</td>
                <td>
                    <a href="{{ route('admin.clientes.show', 2) }}" class="btn btn-sm btn-primary">Ver</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
