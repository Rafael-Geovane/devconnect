@extends('layouts.home')

@section('content')
    <div style="margin-bottom: 24px;">
        <h2 style="font-size: 20px; font-weight: 700; margin-bottom: 4px;">Explorar Comunidade</h2>
        <p style="font-size: 13.5px; color: #666;">Encontre e conecte-se com novos desenvolvedores da turma CTTI.</p>
    </div>

    <!-- GRID DE EXPLORAÇÃO -->
    <div class="explore-grid">
        @foreach($profiles as $profile)
            <div class="explore-card">
                <img class="explore-card__avatar" src="{{ asset($profile['avatar']) }}" alt="{{ $profile['name'] }}">
                <h4 class="explore-card__name">{{ $profile['name'] }}</h4>
                <span class="explore-card__tech">{{ $profile['tech'] }}</span>
                <p style="font-size: 12px; color: #555; margin-bottom: 14px;">{{ $profile['description'] }}</p>
                <a href="{{ route('mensagens') }}" class="btn {{ $profile['button_style'] }}" style="display: block; width: 100%; font-size: 12px; padding: 6px; text-decoration: none;">
                    {{ $profile['button_text'] }}
                </a>
            </div>
        @endforeach
    </div>
@endsection
