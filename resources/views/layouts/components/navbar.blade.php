<nav class="navbar">
    <div class="navbar__brand">
        <a href="{{ route('feed') }}" style="display: flex; align-items: center; gap: 8px;">
            <img src="{{ asset('img/logo_menu.png') }}" alt="DevConnect Logo">
            <span>DevConnect</span>
        </a>
    </div>

    <div class="navbar__search">
        <input type="text" placeholder="Pesquisar desenvolvedores, stacks...">
    </div>

    <a href="{{ route('perfil') }}" class="navbar__user" style="display: flex; align-items: center; gap: 10px; text-decoration: none; color: inherit;">
        <span>DevAluno</span>
        <img class="navbar__user-img" src="{{ asset('img/profile_img.jpg') }}" alt="Foto do Usuário">
    </a>
</nav>
