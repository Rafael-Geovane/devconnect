@extends('layouts.app')

@section('layout-grid')
<div class="layout">
    <!-- Sidebar / Menu lateral -->
    @include('layouts.components.sidebar')

    <!-- Conteúdo Principal -->
    <main class="main">
        @yield('content')
    </main>

    <!-- Painel de Tendências/Widgets à direita -->
    @include('layouts.components.aside')
</div>
@endsection
