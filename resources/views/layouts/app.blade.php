<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevConnect - Rede Social de Desenvolvedores</title>
    <!-- Importação de Estilos do Laravel via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <!-- Navbar Global -->
    @include('layouts.components.navbar')

    <!-- Área Principal de Conteúdo -->
    @yield('layout-grid')

    <!-- Footer Global -->
    @include('layouts.components.footer')

</body>
</html>
