   <!-- Redes sociales arriba del navbar -->
    <div class="social-icons">
        <a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
        <a href="https://www.youtube.com/" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
        <a href="https://twitter.com/" target="_blank" class="twitter"><i class="fab fa-x-twitter"></i></a>
        <a href="https://www.twitch.tv/" target="_blank" class="twitch"><i class="fab fa-twitch"></i></a>
    </div>

    <!-- Navbar Fijo -->
    <div class="navbar-blur-background"></div>
    <div class="navbar-container">
        <div class="navbar-content">
            <!-- Barra de navegación -->
            <div class="navbar-menu">

 <!-- Acceso Admin para invitados -->
@guest
<div class="nav-item nav-submenu">
    <i class="fas fa-lock" style="font-size: 14px; margin-right: 8px; vertical-align: middle;"></i>
    <div class="admin-submenu">
        <div class="login-form">
            <h4>Acceso Admin</h4>
            <input type="text" id="admin-user" placeholder="Usuario">
            <input type="password" id="admin-pass" placeholder="Contraseña">
            <button id="admin-login">Ingresar</button>
            <div class="login-message"></div>
        </div>
    </div>
</div>
@endguest

<!-- Acceso Admin para usuarios autenticados y con rol de admin -->
@auth
    @if(auth()->user()->is_admin)
        <div class="nav-item nav-submenu" id="admin-toggle">
            <i class="fas fa-lock" style="font-size: 14px; margin-right: 8px;"></i>
            <div class="admin-submenu">
                <div class="admin-actions">
                    <a href="{{ route('admin.view') }}" class="admin-link">
                        <i class="fas fa-lock"></i> Panel de Administración
                    </a>
                    <a href="{{ route('admin.news.index') }}" class="admin-link">
                        <i class="fas fa-newspaper"></i> Noticias
                    </a>
                    <a href="{{ route('videos.index') }}" class="admin-link">
                        <i class="fas fa-video"></i> Videos
                    </a>
                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="admin-logout">
                            <i class="fas fa-sign-out-alt"></i> Salir
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @endif
@endauth


                <a href="{{ route('videos.index') }}" class="nav-item nav-videos">Videos</a>
                <div class="nav-item nav-noticias">Noticias</div>
                <div class="nav-item nav-encuestas">Encuestas</div>

                <!-- Logo en medio -->
                <div class="logo-container">
                    <a href="/">
                        <img src="{{ asset('images/logogpcanal.jpg') }}" alt="Logo GP Canal" class="navbar-logo">
                    </a>
                </div>
                
                <a href="#partidos-politicos" class="nav-item nav-politicos">Partidos Políticos</a>

                <!-- Contenedor de la barra de búsqueda (inicialmente oculta) -->
                <div id="search-container" class="search-container">
                    <input type="text" class="search-input" placeholder="Buscar...">
                    <button class="search-button">🔍</button>
                </div>

                <!-- Botón de búsqueda estilizado -->
                <button id="search-icon" class="search-button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </div>




