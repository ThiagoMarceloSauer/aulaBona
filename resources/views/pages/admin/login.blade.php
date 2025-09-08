

@extends('layout.app')

@section('title', 'Login Administrativo')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
        <h1 class="mb-4">Área Administrativa</h1>
        <form>
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuário</label>
                <input type="text" id="usuario" class="form-control" placeholder="Digite seu usuário">
            </div>

            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" id="senha" class="form-control" placeholder="Digite sua senha">
            </div>

            <x-botao cor="primary" texto="Entrar no Painel" href="{{ route('admin.dashboard') }}" />
        </form>
    </div>
</div>
@endsection
