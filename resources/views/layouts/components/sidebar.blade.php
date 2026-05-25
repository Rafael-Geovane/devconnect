<aside class="sidebar">
    <ul class="sidebar__menu">
        <li class="sidebar__item">
            <a href="{{ route('feed') }}" class="sidebar__link {{ request()->routeIs('feed') || request()->is('/') ? 'active' : '' }}">
                <img src="{{ asset('img/accueil.png') }}" alt="Feed">
                <span>Feed</span>
            </a>
        </li>
        <li class="sidebar__item">
            <a href="{{ route('explorar') }}" class="sidebar__link {{ request()->routeIs('explorar') || request()->is('explorar') ? 'active' : '' }}">
                <img src="{{ asset('img/compass.png') }}" alt="Explorar">
                <span>Explorar</span>
            </a>
        </li>
        <li class="sidebar__item">
            <a href="{{ route('mensagens') }}" class="sidebar__link {{ request()->routeIs('mensagens') || request()->is('mensagens') ? 'active' : '' }}">
                <img src="{{ asset('img/bubble-chat.png') }}" alt="Mensagens">
                <span>Mensagens</span>
            </a>
        </li>
        <li class="sidebar__item">
            <a href="{{ route('perfil') }}" class="sidebar__link {{ request()->routeIs('perfil') || request()->is('perfil') ? 'active' : '' }}">
                <img src="{{ asset('img/logo_user.jpg') }}" alt="Perfil" style="border-radius: 50%;">
                <span>Meu Perfil</span>
            </a>
        </li>
    </ul>
</aside>
