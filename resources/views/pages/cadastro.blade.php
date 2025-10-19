@extends('layout.app')

@section('title', 'Cadastro')

@section('content')
<h2 class="mb-4">Crie sua conta</h2>

<form method="POST" action="{{ url('/cadastro') }}">
    @csrf

   
    <x-input label="Nome" name="nome" />
    <x-input label="Sobrenome" name="sobrenome" />
    <x-input label="CPF" name="cpf" />
    <x-input label="E-mail" name="email" type="email" />

 
    <x-input label="CEP" name="cep" id="cep" />
    <x-input label="Logradouro" name="logradouro" id="logradouro" />
    <x-input label="Bairro" name="bairro" id="bairro" />
    <x-input label="Cidade" name="cidade" id="cidade" />
    <x-input label="UF" name="uf" id="uf" maxlength="2" />

    <x-botao type="submit">Cadastrar</x-botao>
</form>


<script>
document.getElementById('cep').addEventListener('blur', function() {
    let cep = this.value.replace(/\D/g, '');
    if (cep.length === 8) {
        fetch(`https://viacep.com.br/ws/${cep}/json/`)
            .then(response => response.json())
            .then(data => {
                if (!data.erro) {
                    document.getElementById('logradouro').value = data.logradouro;
                    document.getElementById('bairro').value = data.bairro;
                    document.getElementById('cidade').value = data.localidade;
                    document.getElementById('uf').value = data.uf;
                } else {
                    alert('CEP não encontrado.');
                }
            });
    }
});
</script>

@endsection
