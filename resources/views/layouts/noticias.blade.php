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
<body>
    <header class="main-header">
        <a href="{{ route('app') }}" class="back-button">
            <i class="fas fa-arrow-left"></i> Volver al inicio
        </a>
        
        <div class="header-content">
            <h1 class="site-title">Portal de Noticias</h1>
            <p class="site-subtitle">Información actualizada al momento</p>
        </div>
    </header>

    <main class="main-content">
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

    <footer class="main-footer">
        <div class="container">
            <div class="footer-copyright">
                &copy; <?php echo date('Y'); ?> Portal de Noticias. Todos los derechos reservados.
            </div>
        </div>
    </footer>

    <script src="js/noticias.js"></script>
</body>
</html>