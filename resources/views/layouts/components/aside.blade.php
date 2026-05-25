<aside class="aside">
    <!-- WIDGET 1: TECNOLOGIAS EM ALTA -->
    <div class="card">
        <h3 class="card__title">Stacks em Alta</h3>
        <ul class="widget__list">
            <li class="widget__item">
                <img class="widget__item-img" src="{{ asset('img/star.png') }}" alt="Hashtag">
                <div class="widget__text">
                    <span class="widget__tag">#laravel</span>
                    <span class="widget__meta">1,243 posts esta semana</span>
                </div>
            </li>
            <li class="widget__item">
                <img class="widget__item-img" src="{{ asset('img/star.png') }}" alt="Hashtag">
                <div class="widget__text">
                    <span class="widget__tag">#client_side</span>
                    <span class="widget__meta">842 posts esta semana</span>
                </div>
            </li>
            <li class="widget__item">
                <img class="widget__item-img" src="{{ asset('img/star.png') }}" alt="Hashtag">
                <div class="widget__text">
                    <span class="widget__tag">#tailwindcss</span>
                    <span class="widget__meta">512 posts esta semana</span>
                </div>
            </li>
            <li class="widget__item">
                <img class="widget__item-img" src="{{ asset('img/star.png') }}" alt="Hashtag">
                <div class="widget__text">
                    <span class="widget__tag">#php</span>
                    <span class="widget__meta">419 posts esta semana</span>
                </div>
            </li>
        </ul>
    </div>

    <!-- WIDGET 2: QUEM SEGUIR -->
    <div class="card">
        <h3 class="card__title">Conectar</h3>
        <ul class="widget__list">
            <li class="widget__item" style="justify-content: space-between; width: 100%;">
                <div style="display: flex; align-items: center; gap: 10px;">
                    <img class="widget__dev-img" src="{{ asset('img/logo_user.jpg') }}" alt="Dev">
                    <div class="widget__text">
                        <span class="widget__tag" style="font-size:13px;">Marcelo Silva</span>
                        <span class="widget__meta">Professor & Dev</span>
                    </div>
                </div>
                <a href="#" class="btn" style="padding: 4px 8px; font-size: 11px;">+ Conectar</a>
            </li>
            <li class="widget__item" style="justify-content: space-between; width: 100%;">
                <div style="display: flex; align-items: center; gap: 10px;">
                    <img class="widget__dev-img" src="{{ asset('img/profile_img.jpg') }}" alt="Dev">
                    <div class="widget__text">
                        <span class="widget__tag" style="font-size:13px;">Beatriz Santos</span>
                        <span class="widget__meta">Full Stack Laravel</span>
                    </div>
                </div>
                <a href="#" class="btn" style="padding: 4px 8px; font-size: 11px;">+ Conectar</a>
            </li>
        </ul>
    </div>
</aside>
