@extends('layouts.perfil')

@section('content')
    <!-- BANNER DO PERFIL -->
    <div class="profile-banner"></div>

    <!-- CARTÃO DO PERFIL -->
    <div class="profile-card">
        <!-- Avatar do Perfil -->
        <img class="profile-card__avatar" src="{{ asset('img/profile_img.jpg') }}" alt="Foto do DevAluno">

        <!-- Ações do Perfil -->
        <div class="profile-card__actions">
            <a href="{{ route('perfil.editar') }}" class="btn" style="border-color: #000; display: inline-flex; align-items: center; text-decoration: none; color: inherit;">
                <img src="{{ asset('img/edit.png') }}" alt="Editar" style="width: 14px; height: 14px; margin-right: 4px; vertical-align: middle;">
                Editar Perfil
            </a>
            <button class="btn btn-primary">Portfólio</button>
        </div>

        <!-- Informações do Perfil -->
        <div class="profile-card__info">
            <h2 class="profile-card__name">{{ $name }}</h2>
            <div class="profile-card__handle">{{ $handle }} &bull; {{ $location }}</div>
            
            <p class="profile-card__bio">
                {{ $bio }}
            </p>

            <!-- Badges de Tech Stack -->
            <div style="margin-bottom: 16px;">
                @foreach ($tech_tags as $tag)
                    <span class="explore-card__tech" style="margin-right: 4px;">{{ $tag }}</span>
                @endforeach
            </div>

            <!-- Estatísticas do Desenvolvedor -->
            <div class="profile-card__stats">
                <div class="stat">
                    <strong>248</strong>
                    <span>commits</span>
                </div>
                <div class="stat">
                    <strong>42</strong>
                    <span>conexões</span>
                </div>
                <div class="stat">
                    <strong>15</strong>
                    <span>repositórios</span>
                </div>
            </div>
        </div>
    </div>

    <!-- TÍTULO DAS POSTAGENS DO PERFIL -->
    <h3 style="font-size: 16px; font-weight: 700; margin-bottom: 12px; padding-left: 4px;">Minhas Publicações</h3>

    <!-- POST DE EXEMPLO DO PRÓPRIO DEV -->
    <div class="card post">
        <div class="post__header">
            <img class="post__avatar" src="{{ asset('img/profile_img.jpg') }}" alt="Foto do {{ $name }}">
            <div class="post__user-info">
                <span class="post__username">{{ $name }}</span>
                <span class="post__time">Postado há 1 dia &bull; Você</span>
            </div>
        </div>
        <div class="post__content">
            <p>Mais uma aula produtiva de Client Side hoje! Consegui entender perfeitamente o fluxo do MVC e como as rotas interagem com os Controllers para retornar as views Blade. Organizar tudo com <code>@@extends</code> e <code>@@yield</code> facilita muito a manutenção do projeto.</p>
        </div>
        <div class="post__actions">
            <button class="post__action-btn">
                <img src="{{ asset('img/heart.png') }}" alt="Curtir">
                <span>8 Curtidas</span>
            </button>
            <button class="post__action-btn">
                <img src="{{ asset('img/bubble-chat.png') }}" alt="Comentar">
                <span>1 Comentário</span>
            </button>
        </div>
    </div>
@endsection
