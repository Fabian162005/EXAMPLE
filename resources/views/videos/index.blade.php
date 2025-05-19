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
            <form method="GET" action="{{ route('videos.index') }}" class="search-bar-3d">
                <input type="text" id="search-videos" name="search" placeholder="Buscar videos..." value="{{ old('search', $search ?? '') }}" />
                
                <label for="start-date">Desde:</label>
                <input type="date" id="start-date" name="start-date" value="{{ old('start-date', $startDate ?? '') }}" />
                
                <label for="end-date">Hasta:</label>
                <input type="date" id="end-date" name="end-date" value="{{ old('end-date', $endDate ?? '') }}" />

                <button type="submit" class="btn-filter">Buscar</button>
            </form>
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
                                src="https://www.facebook.com/plugins/video.php?href={{ urlencode($video->url) }}&show_text=false"
                                style="max-width: 100%; width: 320px; height: auto; aspect-ratio: 16/9; border: none; overflow: hidden; border-radius: 8px;"
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
<a href="#" class="watch-more" data-video-url="https://www.youtube.com/embed/dQw4w9WgXcQ">Ver video <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            @endforeach
        </div>

        <div id="video-modal">
            <div id="video-modal-content">
            <button id="video-modal-close" style="position: absolute; top: 8px; right: 12px; z-index: 10; background: #fff; border: none; padding: 6px 12px; border-radius: 4px; cursor: pointer;">
                Cerrar Video
            </button>
                <iframe id="video-modal-iframe" allowfullscreen allow="autoplay; encrypted-media"></iframe>
            </div>
        </div>


        <!-- Contenedor superpuesto para el iframe -->
        <div id="video-container">
            <button id="close-video-btn">Cerrar Video</button>
            <iframe id="video-player" frameborder="0" allowfullscreen></iframe>
        </div>

        <!-- Incluir el archivo JS externo -->
        <script type="module" src="{{ asset('js/videos.js') }}"></script>
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
<!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    
</body>
</html>
