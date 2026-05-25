<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index()
    {
        return view('perfil.perfil');
    }

    public function edit()
    {
        return view('perfil.editar', [
            'name' => 'DevAluno',
            'handle' => '@devaluno',
            'location' => 'Belo Horizonte, MG',
            'bio' => 'Estudante de Desenvolvimento de Sistemas no SENAI CTTI. Apaixonado por desenvolvimento web, arquitetura MVC, banco de dados e design minimalista em preto e branco.',
            'tech' => '#php, #laravel, #javascript, #html_css',
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'handle' => 'required|string|max:50',
            'location' => 'required|string|max:100',
            'bio' => 'required|string|max:500',
            'tech' => 'nullable|string|max:255',
        ]);

        return redirect()->route('perfil.editar')->with('success', 'Perfil atualizado com sucesso!');
    }
}
