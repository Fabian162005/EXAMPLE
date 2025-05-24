<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GP CANAL</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tu CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- FontAwesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- candidatos -->
    <link rel="stylesheet" href="https://codepen.io/GreenSock/pen/xxmzBrw.css"> <!--candidatos-->
	<link rel="stylesheet" href="{{ asset('css/candidatos.css') }}"> <!--candidatos-->

    <!-- Si usas Laravel Mix u otro bundler, este no es necesario directamente -->
    <!-- <script src="{{ asset('resources/js/app.js') }}"></script> -->
</head>
<body>
<!-- En tu HTML (justo después de <body>) -->
<div class="fullpage-background"></div>

    <div id="particles-js"></div>

<!-- Redes sociales arriba del navbar -->
<div class="social-icons">
    <a href="https://www.facebook.com/share/1ET24v1wFc/" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
    <a href="https://youtube.com/@gpcanal9019?si=9R2s8ia-5cYN2Qts" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
    <a href="https://x.com/G_P_Canal?t=1WN73yiRWQq5ipmpxifVrg&s=09" target="_blank" class="twitter"><i class="fab fa-x-twitter"></i></a>
    <a href="https://www.tiktok.com/@gpcanaloficial?_t=ZM-8wPZeB7k0SU&_r=1" target="_blank" class="tiktok"><i class="fab fa-tiktok"></i></a>
</div>

<!-- Navbar Fijo -->
<div class="navbar-blur-background"></div>
<div class="navbar-container">
    <div class="navbar-content">
        <!-- Barra de navegación -->
        <div class="navbar-menu">

            <!-- Logo en medio -->
            <div class="logo-container">
                <a href="/">
                    <img src="{{ asset('images/logogpcanal.jpg') }}" alt="Logo GP Canal" class="navbar-logo">
                </a>
            </div>

            <!-- Ítems normales -->
            <a href="{{ route('videos.index') }}" class="nav-item nav-videos">Videos</a>
            <div class="nav-item nav-noticias">Noticias</div>
            <div class="nav-item nav-encuestas">Encuestas</div>
            <div class="nav-item nav-politicos">Partidos Políticos</div>



            <!-- Botón de lupa -->
            <button id="search-icon" class="search-button">
                <i class="fas fa-search"></i>
            </button>

            <!-- Contenedor de búsqueda -->
            <div class="search-wrapper">
                <div id="search-container" class="search-container">
                    <input 
                        id="search-input" 
                        class="search-input" 
                        type="text" 
                        placeholder="Buscar..." 
                        autocomplete="off" 
                        spellcheck="false"
                    />
                    <div id="search-suggestions" class="search-suggestions"></div>
                </div>
            </div>
            
        </div>
    </div>
</div>



<!-- Espaciado fijo para el contenido principal -->
<div class="main-content-spacer" style="height: 140px;"></div>

<!-- Contenido principal -->
<h2 class="section-title">El Mejor Lugar para Mantenerte Informado</h2>


<!-- Carrusel de imágenes del slider -->
<div class="slider-container-3d">
  <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      @foreach(App\Models\SliderImagen::all() as $index => $imagen)
        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
          <img 
            src="{{ asset($imagen->imagen_url) }}" 
            class="d-block w-100" 
            alt="Noticia {{ $index + 1 }}">
        </div>
      @endforeach
    </div>

    <button 
      class="carousel-control-prev" 
      type="button" 
      data-bs-target="#mainCarousel" 
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button 
      class="carousel-control-next" 
      type="button" 
      data-bs-target="#mainCarousel" 
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
  </div>
</div>

<!-- Sección Noticias -->
<section class="news-section-3d">
  <div class="section-header-3d">
    <h2>Noticias</h2>
    <a href="{{ url('noticias') }}" class="btn-3d news-btn">
      Ver más noticias <i class="fas fa-arrow-right"></i>
    </a>
  </div>

  <div class="news-grid-3d">
    @forelse($noticias as $noticia)
      <div class="news-card-3d">
        <div class="news-img-container">
          <img src="{{ asset('storage/' . $noticia->foto) }}"
               alt="{{ $noticia->titulo }}"
               class="news-img">

          @if($noticia->created_at->gt(now()->subDay()))
            <div class="news-badge">Nuevo</div>
          @elseif($noticia->badge ?? false === 'Trending')
            <div class="news-badge trending">Trending</div>
          @elseif($noticia->badge ?? false === 'Hot')
            <div class="news-badge hot">Hot</div>
          @endif
        </div>

        <div class="news-content">
          <h3>{{ $noticia->titulo }}</h3>
          <p>{{ \Illuminate\Support\Str::limit($noticia->descripcion, 100) }}</p>

          @if($noticia->video)
            <video controls class="news-video" style="width:100%; margin:1rem 0;">
              <source src="{{ asset('storage/' . $noticia->video) }}" type="video/mp4">
              Tu navegador no soporta el elemento <code>video</code>.
            </video>
          @endif
          <a href="{{ route('noticias.show', ['id' => $noticia->id]) }}" class="read-more">
              Leer más <i class="fas fa-angle-double-right"></i>
          </a>

              @yield('content')


        </div>
      </div>
    @empty
      <p class="no-news">No hay noticias publicadas aún.</p>
    @endforelse
  </div>
</section>
<!-- Sección Encuestas -->

<section class="polls-section-3d">
    <h2 class="section-title-3d">
        Encuestas <span class="highlight">Populares</span>
    </h2>

    @foreach ($categorias as $categoria)
        <div class="poll-card-3d">
            <div class="poll-header">
                <h3>Encuestas {{ $categoria->nombre }}</h3>
                <div class="poll-toggle" data-target="polls-{{ Str::slug($categoria->nombre) }}">
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
            <div class="poll-content" id="polls-{{ Str::slug($categoria->nombre) }}">
                @foreach ($categoria->encuestas as $encuesta)
                    @if (!empty($encuesta->nombre))
                        <a href="{{ url('encuestas/' . Str::slug($encuesta->nombre)) }}" class="poll-item">
                            <div class="poll-icon"><i class="fas fa-poll"></i></div>
                            <div class="poll-info">
                                <h4>{{ $encuesta->nombre }}</h4>
                                <p>Última encuesta: {{ $encuesta->created_at->format('d M Y') }}</p>
                            </div>
                            <div class="poll-arrow"><i class="fas fa-arrow-right"></i></div>
                        </a>
                    @endif      
                @endforeach
            </div>
        </div>
    @endforeach

</section>

        <p style="text-align: center; font-size: 2.5rem; color: #000; font-family: sans-serif; position: relative; top: -80px;">
        <a href="{{ url('/verResultados') }}" class="cool-button">
            Ver Resultados
        </a>
        </p>
<!--seccion candidatos -------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Nueva sección: Partidos Políticos -->
 <section id="partidos-politicos">
 

    <div class="title-container">
        <h1 class="title">Partidos Políticos</h1>
        <div class="dynamic-line"></div>
    </div>

    <div class="buscador">
        <label for="party-select">Buscar partido:</label>
        <select id="party-select">
            <option value="" disabled selected>Selecciona un partido</option>
            <!-- Opciones generadas dinámicamente -->
        </select>
    </div>
    <!-- 📌 Párrafo informativo con fondo plomo claro -->
    <p style="
    text-align: center;  font-size: 1rem; margin: 20px auto;  padding: 15px; 
    background-color: #f0f0f0;  border: 1px solid #ccc; border-radius: 10px; max-width: 800px;  color: #333; "> 
    📌 <strong>Presione la imagen</strong> para conocer más sobre el partido político, informarte de sus propuestas o descubrir quiénes lo representan. ¡Haz clic y entérate de todo! 🗳️✨
    </p>

    <div class="gallery">
        <ul class="cards">
            <!-- Las tarjetas de los partidos se insertarán aquí mediante JavaScript -->
        </ul>
        <div class="actions">
            <button class="prev">Anterior</button>
            <button class="next">Siguiente</button>
        </div>
    </div>
</section>


<!-- Fin de la sección de candidatos -->
<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Footer con Redes Sociales Destacadas -->
<footer id="contacto" class="bg-gray-900 text-white pt-12 pb-6">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8 mb-8">
            
            <!-- Columna 1: Logo y descripción -->
            <div class="text-center md:text-left">
                <div class="flex justify-center md:justify-start mb-4">
                    <img src="{{ asset('images/logogpcanal.jpg') }}" alt="Logo Grupo Paladines" class="h-20">
                </div>
                <p class="text-gray-300 text-sm mb-4">
                    Líderes en desarrollo social y transparencia política en el Perú.
                </p>
            </div>
            
            <!-- Columna 2: Redes Sociales como Enlaces Rápidos -->
            <div>
                <h3 class="text-lg font-bold mb-4 text-white border-b border-gray-700 pb-2">Nuestras Redes</h3>
                <div class="grid grid-cols-2 gap-4">
                    <a href="https://www.facebook.com/share/1ET24v1wFc/" target="_blank" class="bg-blue-600 hover:bg-blue-700 text-white rounded-lg p-3 transition-colors flex items-center">
                        <i class="fab fa-facebook-f mr-2"></i> Facebook
                    </a>
                    <a href="https://www.tiktok.com/@gpcanaloficial?_t=ZM-8wPZeB7k0SU&_r=1" target="_blank" class="bg-black hover:bg-gray-800 text-white rounded-lg p-3 transition-colors flex items-center">
                        <i class="fab fa-tiktok mr-2"></i> TikTok
                    </a>
                    <a href="https://x.com/G_P_Canal?t=1WN73yiRWQq5ipmpxifVrg&s=09" target="_blank" class="bg-gradient-to-r from-pink-500 to-purple-600 hover:to-purple-700 text-white rounded-lg p-3 transition-colors flex items-center">
                        <i class="fab fa-twitter mr-2"></i> Twitter
                    </a>
                    <a href="https://youtube.com/@gpcanal9019?si=9R2s8ia-5cYN2Qts" target="_blank" class="bg-red-600 hover:bg-red-700 text-white rounded-lg p-3 transition-colors flex items-center">
                        <i class="fab fa-youtube mr-2"></i> YouTube
                    </a>
                </div>
            </div>
            
            <!-- Columna 3: Contacto -->
            <div>
                <h3 class="text-lg font-bold mb-4 text-white border-b border-gray-700 pb-2">Contacto Directo</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <i class="fas fa-envelope mr-3 text-orange-400 mt-1"></i>
                        <div>
                            <p class="text-gray-300 text-sm font-medium">Escríbenos</p>
                            <a href="mailto:contacto@grupopaladines.pe" class="text-white hover:text-orange-300 text-sm">grupopaladines@gmail.com</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="border-t border-gray-800 pt-6 text-center">
            <p class="text-gray-400 text-xs">
                © 2025 Grupo Paladines. Todos los derechos reservados. 
            </p>
        </div>
    </div>
</footer>
    

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!--Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Scripts al final del body -->
    <script src="https://cdn.jsdelivr.net/npm/victor@1.1.0/build/victor.min.js"></script>
            <script src='https://unpkg.co/gsap@3/dist/gsap.min.js'></script>
    <script src='https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js'></script>
    <script type="module" src="{{ asset('js/candidatos.js') }}"></script> 
    <script type="module" src="{{ asset('js/functions.js') }}"></script> 
    <script type="module" src="{{ asset('js/scriptENC.js') }}"></script> 
    <script type="module" src="{{ asset('js/noticias.js') }}"></script> 
    <script type="module" src="{{ asset('js/admin.js') }}"></script> 
    <script type="module" src="{{ asset('js/show-navbar.js') }}"></script> 
    <script type="module" src="{{ asset('js/show-login.js') }}"></script> 

   <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
