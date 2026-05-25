@extends('layouts.app')

@section('layout-grid')
<div class="layout">
    <!-- Sidebar / Menu lateral -->
    @include('layouts.components.sidebar')

    <!-- Conteúdo Principal do Chat -->
    <main class="main" style="padding: 12px 16px;">
        @yield('content')
    </main>
</div>
@endsection
