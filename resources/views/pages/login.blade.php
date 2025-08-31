@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h1 class="mb-4">Login</h1>
        <form>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" id="email" class="form-control" placeholder="Digite seu e-mail">
            </div>

            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" id="senha" class="form-control" placeholder="Digite sua senha">
            </div>

            <x-botao cor="primary" texto="Entrar" href="#" />
        </form>
    </div>
</div>
@endsection