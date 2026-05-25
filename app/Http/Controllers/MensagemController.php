<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensagemController extends Controller
{
    public function index()
    {
        $conversations = [
            [
                'name' => 'Marcelo Silva',
                'avatar' => 'img/logo_user.jpg',
                'preview' => 'Excelente trabalho nos layouts!...',
                'status' => 'online',
                'active' => true,
            ],
            [
                'name' => 'Beatriz Santos',
                'avatar' => 'img/profile_img.jpg',
                'preview' => 'Você conseguiu rodar o comando...',
                'status' => 'offline',
                'active' => false,
            ],
            [
                'name' => 'Joao lucas Souza',
                'avatar' => 'img/logo_user.jpg',
                'preview' => 'Vamos testar o novo layout do feed?',
                'status' => 'online',
                'active' => false,
            ],
            [
                'name' => 'Julia Costa',
                'avatar' => 'img/profile_img.jpg',
                'preview' => 'Adorei sua ideia de usar cards para explorar.',
                'status' => 'offline',
                'active' => false,
            ],
            [
                'name' => 'Cleiton Silva',
                'avatar' => 'img/logo_user.jpg',
                'preview' => 'Excelente trabalho nos layouts!...',
                'status' => 'online',
                'active' => true,
            ],
            [
                'name' => 'RRegina Santos',
                'avatar' => 'img/profile_img.jpg',
                'preview' => 'Você conseguiu rodar o comando...',
                'status' => 'offline',
                'active' => false,
            ],
            [
                'name' => 'Pietro Souza',
                'avatar' => 'img/logo_user.jpg',
                'preview' => 'Vamos testar o novo layout do feed?',
                'status' => 'online',
                'active' => false,
            ],
            [
                'name' => 'juliana Costa',
                'avatar' => 'img/profile_img.jpg',
                'preview' => 'Adorei sua ideia de usar cards para explorar.',
                'status' => 'offline',
                'active' => false,
            ],
        ];

        $activeChat = [
            'name' => 'Marcelo Silva',
            'avatar' => 'img/logo_user.jpg',
            'status' => 'Online',
            'bio' => 'Professor e mentor de projetos Laravel.',
            'messages' => [
                ['type' => 'received', 'text' => 'Olá! Como está o progresso do desenvolvimento da sua rede social DevConnect?'],
                ['type' => 'sent', 'text' => 'Olá, professor! Acabei de estruturar os layouts usando Blade Components e criei as rotas MVC. Adotei a paleta monocromática em tons de cinza, preto e branco que o senhor sugeriu.'],
                ['type' => 'received', 'text' => 'Ficou simplesmente incrível! O contraste visual ficou muito elegante e profissional. Usar componentes para Navbar e Sidebar foi uma ótima decisão de projeto.'],
                ['type' => 'received', 'text' => 'Excelente trabalho nos layouts! Digno de nota máxima nesta entrega da unidade client side. 👏'],
            ],
        ];

        return view('mensagens.mensagens', compact('conversations', 'activeChat'));
    }
}
