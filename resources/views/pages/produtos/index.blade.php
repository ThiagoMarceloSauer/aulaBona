@extends('layouts.app')

@section('title', 'Produtos')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Lista de Produtos</h1>

    <a href="{{ route('produtos.create') }}" 
       class="inline-block mb-4 px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700">
        + Novo Produto
    </a>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="p-3">ID</th>
                    <th class="p-3">Nome</th>
                    <th class="p-3">Preço</th>
                    <th class="p-3">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3">{{ $produto->id }}</td>
                    <td class="p-3">{{ $produto->nome }}</td>
                    <td class="p-3">R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                    <td class="p-3 flex gap-2">
                        <a href="{{ route('produtos.edit', $produto) }}" 
                           class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">
                            Editar
                        </a>
                        <form action="{{ route('produtos.destroy', $produto) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
