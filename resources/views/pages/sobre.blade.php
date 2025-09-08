@extends('layout.app')

@section('title', 'Sobre Nós')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Sobre Nós</h1>

    <div class="row align-items-center">
        <div class="col-md-6">
            <img src="{{ asset('https://finger.ind.br/wp-content/uploads/2022/07/por-que-escolher-uma-fabrica-sustentavel-de-moveis.jpg') }}" alt="Sobre" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <p class="lead">
               Somos uma fábrica de móveis com longa tradição no mercado, dedicada a transformar ambientes em espaços de conforto, beleza e funcionalidade. 
               Ao longo dos anos, construímos nossa reputação com base em eficiência,
                inovação e compromisso com a qualidade em cada peça que produzimos.
                Nosso time de profissionais qualificados trabalha diariamente para garantir acabamento impecável, materiais duráveis e design sofisticado, 
                atendendo às necessidades de clientes residenciais e comerciais.
            </p>
            <p>
                Desde 2004 trazendo qualidade aos brasileiros.
            </p>

            <a href="{{ route('home') }}" class="btn btn-secondary btn-lg mt-3">Voltar ao Início</a>
        </div>
    </div>
</div>
@endsection
