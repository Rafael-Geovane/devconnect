@extends('layouts.mensagem')

@section('content')
    <div class="chat-container">
        
        <!-- SIDEBAR DE CONVERSAS (ESQUERDA) -->
        <div class="chat-sidebar">
            <div class="chat-sidebar__header">
                Conversas
            </div>
            <ul class="chat-sidebar__list">
                @foreach($conversations as $conversation)
                    <li class="chat-user-item {{ $conversation['active'] ? 'active' : '' }}">
                        <img class="chat-user-item__avatar" src="{{ asset($conversation['avatar']) }}" alt="{{ $conversation['name'] }}">
                        <div class="chat-user-item__info">
                            <span class="chat-user-item__name">{{ $conversation['name'] }}</span>
                            <span class="chat-user-item__msg">{{ $conversation['preview'] }}</span>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- JANELA DE CONVERSA ATIVA (DIREITA) -->
        <div class="chat-main">
            <!-- Cabeçalho do Chat -->
            <div class="chat-main__header">
                <img class="chat-main__avatar" src="{{ asset($activeChat['avatar']) }}" alt="{{ $activeChat['name'] }}">
                <div>
                    <span class="chat-main__username">{{ $activeChat['name'] }}</span>
                    <div style="font-size: 11px; color: #44b678; font-weight: 500;">&bull; {{ $activeChat['status'] }}</div>
                    <div style="font-size: 12px; color: #666; margin-top: 4px;">{{ $activeChat['bio'] }}</div>
                </div>
            </div>

            <!-- Balões de Mensagem -->
            <div class="chat-messages">
                @foreach($activeChat['messages'] as $message)
                    <div class="chat-bubble {{ $message['type'] }}">
                        {{ $message['text'] }}
                    </div>
                @endforeach
            </div>

            <!-- Entrada de Texto -->
            <div class="chat-input-area">
                <input type="text" placeholder="Escreva uma mensagem de desenvolvedor...">
                <button type="button">
                    <img src="{{ asset('img/send.png') }}" alt="Enviar">
                </button>
            </div>
        </div>

    </div>
@endsection
