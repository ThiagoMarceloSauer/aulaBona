<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Gestão Empresarial')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('partials.navbar')

    <div class="p-5 mb-4 bg-white rounded-3 shadow-sm">
        <button class="btn btn-primary btn-lg" type="button">
            botão de exemplo
        </button>
    </div>

    <div class="container mt-4">
        @yield('content')
    </div>

    @include('partials.footer')
</body>
</html>
