<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de Noticias | Últimas Actualizaciones</title>
    <link rel="stylesheet" href="css/noticias.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>
<style>
  html {
            scroll-behavior: smooth;
        }

        #hero {
            background-size: cover;
        }
</style>
<body>
    <header id="" class="h-screen flex flex-col justify-center items-center text-center px-4 bg-white">
    <!-- Botón de regreso -->
    <a href="{{ route('app') }}" class="text-blue-600 hover:text-blue-800 text-lg mb-6 flex items-center">
        <i class="fas fa-arrow-left mr-2"></i> Volver al inicio
    </a>

    <!-- Título y subtítulo centrado -->
    <h1 class="text-4xl md:text-6xl font-bold mb-4 text-black drop-shadow-lg">
        Portal de Noticias
    </h1>
    <p class="text-lg md:text-2xl mb-6 max-w-xl text-gray-600">
        Información actualizada al momento
    </p>

    <!-- Flecha para bajar -->
    <a href="#noticias" class="text-blue-600 hover:text-blue-800 text-3xl mt-4 animate-bounce">
        <i class="fas fa-arrow-down"></i>
    </a>
</header>


    <main id="noticias" class="main-content">
        <section class="news-section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Últimas Noticias</h2>
                    <div class="results-count">Mostrando <span id="results-count">6</span> resultados</div>
                </div>

                {{-- Formulario de búsqueda --}}
                <form method="GET" action="" class="news-filter-form" style="margin-bottom: 1rem;">
                    <input type="text" name="search" placeholder="Buscar por ID, título o descripción" value="{{ request('search') }}">
                    <input type="date" name="created_at" value="{{ request('created_at') }}">
                    <input type="date" name="updated_at" value="{{ request('updated_at') }}">
                    <button type="submit">Buscar</button>
                    <a href="{{ url()->current() }}" class="clear-btn">Limpiar filtros</a>
                </form>

  <div class="news-grid-3d">
    @php
      $filteredNoticias = $noticias->filter(function($noticia) {
          $search = strtolower(request('search'));
          $created = request('created_at');
          $updated = request('updated_at');

          $matchSearch = empty($search) || 
                         str_contains(strtolower($noticia->id), $search) ||
                         str_contains(strtolower($noticia->titulo), $search) ||
                         str_contains(strtolower($noticia->descripcion), $search);

          $matchCreated = empty($created) || $noticia->created_at->format('Y-m-d') === $created;
          $matchUpdated = empty($updated) || $noticia->updated_at->format('Y-m-d') === $updated;

          return $matchSearch && $matchCreated && $matchUpdated;
      });
    @endphp

    @forelse($filteredNoticias as $noticia)
      <div class="news-card-3d">
        <div class="news-img-container">
          <img src="{{ asset('storage/' . $noticia->foto) }}"
               alt="{{ $noticia->titulo }}"
               class="news-img">

          @if($noticia->created_at->gt(now()->subDay()))
            <div class="news-badge">Nuevo</div>
          @elseif($noticia->badge === 'Trending')
            <div class="news-badge trending">Trending</div>
          @elseif($noticia->badge === 'Hot')
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
        </div>
      </div>
    @empty
      <p class="no-news">No hay noticias publicadas que coincidan con la búsqueda.</p>
    @endforelse
  </div>
</section>  

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
                <a href="#" class="hover:text-white">Políticas de Privacidad</a> | 
                <a href="#" class="hover:text-white">Términos de Servicio</a>
            </p>
        </div>
    </div>
</footer>

    <script src="js/noticias.js"></script>
    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    
</body>
</html>