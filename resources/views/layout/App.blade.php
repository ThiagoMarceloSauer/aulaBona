<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Gestão Empresarial')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">

   
    @include('partials.navbar')

   
    <div class="p-6 m-6 bg-white rounded-2xl shadow">
        <button class="px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-xl shadow hover:bg-blue-700">
            Botão de exemplo
        </button>
    </div>

   
    <div class="flex-1 max-w-7xl mx-auto w-full p-6">
        @yield('content')
    </div>

    
    @include('partials.footer')

</body>
</html>
