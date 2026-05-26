<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExplorarController extends Controller
{
    public function index()
    {
        $profiles = [
            [
                'avatar' => 'img/logo_user.jpg',
                'name' => 'Marcel Silva',
                'tech' => '#php #laravel #teaching',
                'description' => 'Instrutor de desenvolvimento web no SENAI CTTI. Focado em arquitetura MVC e Clean Code.',
                'button_style' => 'btn-primary',
                'button_text' => 'Enviar Mensagem',
            ],
            [
                'avatar' => 'img/logo_user.jpg',
                'name' => 'Ana Clara Costa',
                'tech' => '#figma #uidesign #tailwind',
                'description' => 'Estudante de web design. Amo criar interfaces minimalistas e dinâmicas com micro-interações.',
                'button_style' => 'btn-secondary',
                'button_text' => 'Conectar',
            ],
            [
                'avatar' => 'img/logo_user.jpg',
                'name' => 'Lucas Mendes',
                'tech' => '#javascript #react #node',
                'description' => 'Apoio a comunidade open-source. Desenvolvedor Front-end nas horas vagas.',
                'button_style' => 'btn-primary',
                'button_text' => 'Enviar Mensagem',
            ],
            [
                'avatar' => 'img/profile_img.jpg',
                'name' => 'Beatriz Rocha',
                'tech' => '#python #datascience #sql',
                'description' => 'Explorando o mundo dos dados e automação de processos. Apaixonada por resolver problemas.',
                'button_style' => 'btn-secondary',
                'button_text' => 'Conectar',
            ]
        ];

        return view('explorar.explorar', compact('profiles'));
    }
}
