<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensagemController extends Controller
{
    public function index()
    {
        $conversations = [
            [
                'active' => true,
                'avatar' => 'img/logo_user.jpg',
                'name' => 'Marcel Silva',
                'preview' => 'Excelente! O código do seu controller está...',
            ],
            [
                'active' => false,
                'avatar' => 'img/logo_user.jpg',
                'name' => 'Ana Clara Costa',
                'preview' => 'Você viu aquele componente que mandei?',
            ],
            [
                'active' => false,
                'avatar' => 'img/logo_user.jpg',
                'name' => 'Lucas Mendes',
                'preview' => 'Cara, deu erro no npm run dev aqui kkk',
            ]
        ];

        $activeChat = [
            'avatar' => 'img/logo_user.jpg',
            'name' => 'Marcel Silva',
            'status' => 'Online',
            'bio' => 'Instrutor @ SENAI CTTI | Especialista em Arquitetura de Software',
            'messages' => [
                [
                    'type' => 'received',
                    'text' => 'Olá, Dev! Vi o seu repositório do DevConnect e o layout está ficando fantástico.',
                ],
                [
                    'type' => 'sent',
                    'text' => 'Obrigado, professor! Estou gostando muito de estruturar as views com Blade.',
                ],
                [
                    'type' => 'received',
                    'text' => 'Que bom! A separação de responsabilidades no MVC é um conceito chave.',
                ],
                [
                    'type' => 'received',
                    'text' => 'Excelente! O código do seu controller está muito bem organizado.',
                ]
            ]
        ];

        return view('mensagens.mensagens', compact('conversations', 'activeChat'));
    }
}
