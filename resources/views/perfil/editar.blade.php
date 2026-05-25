@extends('layouts.perfil')

@section('content')
    <div class="profile-card" style="margin-bottom: 24px;">
        <div class="profile-card__info">
            <h2 class="profile-card__name">Editar Perfil</h2>
            <p style="margin-top: 8px; color: #666;">Atualize suas informações pessoais e sua bio.</p>
        </div>
    </div>

    @if(session('success'))
        <div style="background: #daf6dc; border: 1px solid #8fd19b; color: #225e26; padding: 16px; border-radius: 10px; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <form action="{{ route('perfil.atualizar') }}" method="POST" style="display: grid; gap: 16px;">
            @csrf

            <label class="form-group">
                <span>Nome</span>
                <input type="text" name="name" value="{{ old('name', $name) }}" placeholder="Nome completo" class="form-control" />
                @error('name')<small style="color: #d32f2f;">{{ $message }}</small>@enderror
            </label>

            <label class="form-group">
                <span>Usuário</span>
                <input type="text" name="handle" value="{{ old('handle', $handle) }}" placeholder="@usuario" class="form-control" />
                @error('handle')<small style="color: #d32f2f;">{{ $message }}</small>@enderror
            </label>

            <label class="form-group">
                <span>Localização</span>
                <input type="text" name="location" value="{{ old('location', $location) }}" placeholder="Cidade, Estado" class="form-control" />
                @error('location')<small style="color: #d32f2f;">{{ $message }}</small>@enderror
            </label>

            <label class="form-group">
                <span>Bio</span>
                <textarea name="bio" rows="5" placeholder="Conte um pouco sobre você" class="form-control">{{ old('bio', $bio) }}</textarea>
                @error('bio')<small style="color: #d32f2f;">{{ $message }}</small>@enderror
            </label>

            <label class="form-group">
                <span>Tech stack</span>
                <input type="text" name="tech" value="{{ old('tech', $tech) }}" placeholder="#php, #laravel, #javascript" class="form-control" />
                @error('tech')<small style="color: #d32f2f;">{{ $message }}</small>@enderror
            </label>

            <button type="submit" class="btn btn-primary" style="width: fit-content;">Salvar Alterações</button>
        </form>
    </div>
@endsection
