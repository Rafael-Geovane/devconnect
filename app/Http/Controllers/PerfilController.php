<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    private function getProfileData()
    {
        return session()->get('profile', [
            'name' => 'DevAluno',
            'handle' => '@devaluno',
            'location' => 'Belo Horizonte, MG',
            'bio' => 'Estudante de Desenvolvimento de Sistemas no SENAI CTTI. Apaixonado por desenvolvimento web, arquitetura MVC, banco de dados e design minimalista em preto e branco.',
            'tech' => '#php, #laravel, #javascript, #html_css'
        ]);
    }

    public function index()
    {
        $profile = $this->getProfileData();

        // Convert the tech string (e.g., "#php, #laravel") into an array of tags
        $techTags = array_filter(
            array_map('trim', preg_split('/[\s,]+/', $profile['tech']))
        );

        return view('perfil.perfil', [
            'name' => $profile['name'],
            'handle' => $profile['handle'],
            'location' => $profile['location'],
            'bio' => $profile['bio'],
            'tech_tags' => $techTags,
        ]);
    }

    public function edit()
    {
        $profile = $this->getProfileData();

        return view('perfil.editar', [
            'name' => $profile['name'],
            'handle' => $profile['handle'],
            'location' => $profile['location'],
            'bio' => $profile['bio'],
            'tech' => $profile['tech'],
        ]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'handle' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'bio' => 'nullable|string|max:1000',
            'tech' => 'nullable|string|max:255',
        ]);

        // Standardize the @ symbol in handle
        if (!str_starts_with($validated['handle'], '@')) {
            $validated['handle'] = '@' . $validated['handle'];
        }

        session()->put('profile', $validated);

        return redirect()->route('perfil')->with('success', 'Perfil atualizado com sucesso!');
    }
}
