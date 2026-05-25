<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExplorarController extends Controller
{
    public function index()
    {
        $profiles = [
            [
                'name' => 'Marcelo Silva',
                'avatar' => 'img/logo_user.jpg',
                'tech' => '#laravel',
                'description' => 'Instrutor no Senai MG, apaixonado por PHP e arquitetura limpa.',
                'button_text' => 'Mensagem',
                'button_style' => 'btn-primary',
            ],
            [
                'name' => 'Beatriz Santos',
                'avatar' => 'img/profile_img.jpg',
                'tech' => '#php',
                'description' => 'Aluna de Desenvolvimento de Sistemas. Focada em backend.',
                'button_text' => 'Conectar',
                'button_style' => 'btn-primary',
            ],
            [
                'name' => 'Gabriel Souza',
                'avatar' => 'img/logo_user.jpg',
                'tech' => '#client_side',
                'description' => 'Curioso por JavaScript, React e interfaces fluidas.',
                'button_text' => '+ Conectar',
                'button_style' => 'btn-outline',
            ],
            [
                'name' => 'Mariana Costa',
                'avatar' => 'img/profile_img.jpg',
                'tech' => '#tailwindcss',
                'description' => 'Criando layouts responsivos e minimalistas. CSS Lover.',
                'button_text' => '+ Conectar',
                'button_style' => 'btn-outline',
            ],
            [
                'name' => 'Lucas Pereira',
                'avatar' => 'img/logo_user.jpg',
                'tech' => '#api',
                'description' => 'Especialista em backend e integração de serviços.',
                'button_text' => 'Mensagem',
                'button_style' => 'btn-primary',
            ],
            [
                'name' => 'Ana Paula',
                'avatar' => 'img/profile_img.jpg',
                'tech' => '#html_css',
                'description' => 'Fazendo a interface ficar bonita e funcional.',
                'button_text' => 'Conectar',
                'button_style' => 'btn-outline',
            ],
        ];

        return view('explorar.explorar', compact('profiles'));
    }
}
