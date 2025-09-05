@extends('layouts.app')

@section('title', 'Bem-vindo')

@section('content')
    <!-- Hero -->
    <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white rounded-2xl shadow p-10 mb-10">
        <h1 class="text-4xl font-bold mb-4">Bem-vindo ao Sistema de Gestão Empresarial</h1>
        <p class="text-lg text-blue-100 mb-6">
            Organize seus produtos, categorias e pedidos de forma rápida e eficiente.
        </p>
        <a href="{{ route('produtos.index') }}" 
           class="px-6 py-3 bg-white text-blue-700 font-semibold rounded-lg shadow hover:bg-gray-100">
            Começar agora →
        </a>
    </section>

    <!-- Cards de Atalhos -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Produtos -->
        <div class="bg-white rounded-2xl shadow p-6 hover:shadow-lg transition">
            <h2 class="text-xl font-semibold mb-2">📦 Produtos</h2>
            <p class="text-gray-600 mb-4">Gerencie seus produtos de forma prática e organizada.</p>
            <a href="{{ route('produtos.index') }}" 
               class="text-blue-600 font-semibold hover:underline">Acessar →</a>
        </div>

        <!-- Categorias -->
        <div class="bg-white rounded-2xl shadow p-6 hover:shadow-lg transition">
            <h2 class="text-xl font-semibold mb-2">🗂 Categorias</h2>
            <p class="text-gray-600 mb-4">Organize seus produtos em categorias personalizadas.</p>
            <a href="{{ route('categorias.index') }}" 
               class="text-blue-600 font-semibold hover:underline">Acessar →</a>
        </div>

        <!-- Pedidos -->
        <div class="bg-white rounded-2xl shadow p-6 hover:shadow-lg transition">
            <h2 class="text-xl font-semibold mb-2">📝 Pedidos</h2>
            <p class="text-gray-600 mb-4">Controle e acompanhe os pedidos realizados no sistema.</p>
            <a href="{{ route('pedidos.index') }}" 
               class="text-blue-600 font-semibold hover:underline">Acessar →</a>
        </div>
    </section>
@endsection
