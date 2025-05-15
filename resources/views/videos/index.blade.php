<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GP Canal - Videos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/videos.css') }}"> 
</head>
<body>

    <!-- Sección Videos -->
    <section class="videos-section-3d">
        <div class="section-header-3d">
            <a href="{{ route('app') }}" class="btn-back-home">Volver al Inicio</a>
            <h2 class="section-title-3d">
                <span class="highlight-blue">Videos</span> 
                <span class="highlight-black">Destacados</span>
            </h2>

            <!-- Buscador combinado (por texto y fecha) -->
            <div class="search-bar-3d">
                <input type="text" id="search-videos" placeholder="Buscar videos..." />
                
                <label for="start-date">Desde:</label>
                <input type="date" id="start-date" name="start-date" />
                
                <label for="end-date">Hasta:</label>
                <input type="date" id="end-date" name="end-date" />

                <button id="filter-date" class="btn-filter">Buscar</button>
            </div>
        </div>

        <div class="videos-grid-3d">
            @foreach ($videos as $video)
                <div class="video-card-3d" data-embed-url="{{ $video->url }}">
                    <div class="video-img-container">
                        @if ($video->tipo === 'youtube')
                            {{-- Muestra imagen previa de YouTube --}}
                            @php
                                preg_match('/(?:\/|v=)([a-zA-Z0-9_-]{11})/', $video->url, $matches);
                                $youtubeID = $matches[1] ?? null;
                            @endphp
                            @if ($youtubeID)
                                <img src="https://img.youtube.com/vi/{{ $youtubeID }}/maxresdefault.jpg"
                                     alt="{{ $video->titulo }}" class="video-img">
                            @else
                                <p>Error al cargar imagen</p>
                            @endif
                        @elseif ($video->tipo === 'facebook')
                            {{-- Muestra el iframe de Facebook --}}
                            <iframe
                                src="https://www.facebook.com/plugins/video.php?href={{ urlencode($video->url) }}&show_text=false&width=280"
                                width="100%"
                                height="200"
                                style="border:none;overflow:hidden;"
                                scrolling="no"
                                frameborder="0"
                                allowfullscreen="true"
                                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                            </iframe>
                        @endif
                    </div>
                    <div class="video-content">
                        <h3>{{ $video->titulo }}</h3>
                        <p>{{ $video->descripcion }}</p>
                        <a href="#" class="watch-more">Ver video <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Contenedor superpuesto para el iframe -->
        <div id="video-container">
            <button id="close-video-btn">Cerrar Video</button>
            <iframe id="video-player" frameborder="0" allowfullscreen></iframe>
        </div>

        <!-- Incluir el archivo JS externo -->
        <script type="module" src="{{ asset('js/videos.js') }}"></script>
    </section>
</body>
</html>
