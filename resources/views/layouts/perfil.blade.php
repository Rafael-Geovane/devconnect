@extends('layouts.app')

@section('layout-grid')
<div class="layout">
    <!-- Sidebar / Menu lateral -->
    @include('layouts.components.sidebar')

    <!-- Conteúdo Principal do Perfil (Sem painel direito para mais espaço) -->
    <main class="main">
        @yield('content')
    </main>
</div>
@endsection
