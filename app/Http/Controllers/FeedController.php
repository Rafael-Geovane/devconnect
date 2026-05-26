<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function index()
    {
        $posts = [
            [
                'avatar' => 'img/profile_img.jpg',
                'author_name' => 'DevAluno',
                'author_role' => 'Estudante @ SENAI CTTI',
                'time' => '2 horas',
                'content' => 'Acabei de estruturar o layout do DevConnect usando Blade Templates! O Laravel torna a reutilização de layouts extremamente simples com @extends e @section. 🚀',
                'description' => 'A arquitetura MVC deixa tudo no seu devido lugar. Próximo passo: integrar as rotas com controllers dinamizados.',
                'image' => 'img/screenshot1.png',
                'tags' => ['#laravel', '#mvc', '#blade', '#webdev'],
                'likes' => 18,
                'comments' => 4,
            ],
            [
                'avatar' => 'img/logo_user.jpg',
                'author_name' => 'Marcel Silva',
                'author_role' => 'Instrutor @ SENAI',
                'time' => '4 horas',
                'content' => 'Lembrem-se, pessoal: a identação e organização do código no controller são fundamentais. Mantenham o foco em estruturar as rotas e views de forma limpa antes de pensarmos em banco de dados.',
                'description' => 'Quem aí já conseguiu subir a página de perfil editável usando dados simulados?',
                'image' => '',
                'tags' => ['#dica', '#educacao', '#clean-code', '#ctti'],
                'likes' => 32,
                'comments' => 12,
            ],
            [
                'avatar' => 'img/logo_user.jpg',
                'author_name' => 'Ana Clara Costa',
                'author_role' => 'UI/UX Designer & Dev',
                'time' => '1 dia',
                'content' => 'Fiz um mockup rápido do painel de administração para a nossa rede social. O que acharam desse tema escuro com detalhes em preto e branco?',
                'description' => '',
                'image' => 'img/screenshot3.png',
                'tags' => ['#design', '#figma', '#darkmode', '#uidesign'],
                'likes' => 25,
                'comments' => 8,
            ]
        ];

        return view('feed.feed', compact('posts'));
    }
}
