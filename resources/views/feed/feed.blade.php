@extends('layouts.home')

@section('content')
    <!-- CAIXA DE NOVO POST -->
    <div class="card new-post-box">
        <h3 class="card__title" style="border: none; padding-bottom: 0;">Compartilhe seu código</h3>
        <form action="#" method="POST" onsubmit="event.preventDefault();">
            <textarea placeholder="O que você está codando hoje?"></textarea>
            <div class="new-post-box__actions">
                <span style="font-size: 12px; color: #777;">
                    💡 Dica: Use Markdown para formatar código!
                </span>
                <button type="submit" class="btn btn-primary">Compartilhar</button>
            </div>
        </form>
    </div>

    <!-- FEED DE POSTS -->
    <div class="feed-list">
        @foreach ($posts as $post)
            <div class="card post">
                <div class="post__header">
                    <a href="{{ route('explorar') }}" style="display: flex; align-items: center; gap: 12px; text-decoration: none; color: inherit;">
                        <img class="post__avatar" src="{{ asset($post['avatar']) }}" alt="Avatar de {{ $post['author_name'] }}">
                        <div class="post__user-info">
                            <span class="post__username">{{ $post['author_name'] }}</span>
                            <span class="post__time">Postado há {{ $post['time'] }} &bull; {{ $post['author_role'] }}</span>
                        </div>
                    </a>
                </div>
                <div class="post__content">
                    <p>{{ $post['content'] }}</p>
                    @if (!empty($post['description']))
                        <p style="margin-top: 8px;">{{ $post['description'] }}</p>
                    @endif
                </div>
                @if (!empty($post['image']))
                    <div class="post__image" style="margin-top: 16px;">
                        <img src="{{ asset($post['image']) }}" alt="Imagem do post" style="width: 100%; border-radius: 14px; object-fit: cover; max-height: 280px;">
                    </div>
                @endif
                @if (!empty($post['tags']))
                    <div class="post__tags" style="margin-top: 12px; display: flex; gap: 8px; flex-wrap: wrap;">
                        @foreach ($post['tags'] as $tag)
                            <span class="explore-card__tech">{{ $tag }}</span>
                        @endforeach
                    </div>
                @endif
                <div class="post__actions">
                    <button class="post__action-btn">
                        <img src="{{ asset('img/heart.png') }}" alt="Curtir">
                        <span>{{ $post['likes'] }} Curtidas</span>
                    </button>
                    <a href="{{ route('mensagens') }}" class="post__action-btn" style="text-decoration: none;">
                        <img src="{{ asset('img/bubble-chat.png') }}" alt="Comentar">
                        <span>{{ $post['comments'] }} Comentários</span>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
