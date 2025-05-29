<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GP Canal - Videos</title>
       <!-- Favicon / Logo -->
    <link rel="icon" href="{{ asset('images/logogpcanal.jpg') }}" type="image/jpeg">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/videos.css') }}"> 
</head>
<body>

    <!-- Sección Videos -->
    <section class="videos-section-3d">
        <div class="section-header-3d">
            <a href="{{ route('app') }}" class="btn-back-home">Volver hacia atras</a>
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

        <!-- Modal para Subir Video -->
        <div id="video-modal" class="modal" style="display:none;">
            <div class="modal-content">
                <span class="close-modal">&times;</span>
                <h2>Subir Video</h2>

                <form action="{{ route('admin.videos.store') }}" method="POST">
                    @csrf
                    <label for="titulo">Título:</label>
                    <input type="text" name="titulo" required maxlength="255" />

                    <label for="tipo">Tipo de video:</label>
                    <select name="tipo" id="tipo" required>
                        <option value="">Selecciona</option>
                        <option value="youtube">Link de YouTube</option>
                        <option value="facebook">Link de Facebook</option>
                    </select>

                    <div id="video-url">
                        <label for="url">Enlace del video:</label>
                        <input type="url" name="url" required />
                    </div>

                    <label for="descripcion">Descripción:</label>
                    <textarea name="descripcion" maxlength="255" placeholder="Breve descripción del video (máx 255 caracteres)"></textarea>

                    <button type="submit">Guardar</button>
                </form>
            </div>
        </div>
<!-- Modal Editar Video -->
<div id="modal-editar-video" class="modal-noticia" style="display:none;">
    <div class="modal-content-noticia">
        <button type="button" id="btn-cerrar-editar-video" class="btn btn-secondary cerrar-noticia">✖</button>

        <form id="form-editar-video" method="POST" action="{{ route('admin.videos.update', 0) }}">
            @csrf
            @method('PUT')

            <h3 style="font-weight: bold; color: #000; font-size: 24px;">Editar Video</h3>

            <label for="editar_video_id">Selecciona el video a editar:</label>
            <select name="editar_video_id" id="editar_video_id" class="form-control" required>
                <option value="" disabled selected>-- Elige un video --</option>
                @foreach($videos as $video)
                <option 
                    value="{{ $video->id }}"
                    data-titulo="{{ htmlspecialchars($video->titulo, ENT_QUOTES) }}"
                    data-tipo="{{ $video->tipo }}"
                    data-url="{{ $video->url }}"
                    data-descripcion="{{ htmlspecialchars($video->descripcion, ENT_QUOTES) }}"
                >
                    {{ $video->titulo }}
                </option>
                @endforeach
            </select>

            <label for="editar_titulo_video">Título:</label>
            <input type="text" id="editar_titulo_video" name="titulo" class="form-control" required>

            <label for="editar_tipo_video">Tipo de video:</label>
            <select id="editar_tipo_video" name="tipo" class="form-control" required>
                <option value="">-- Selecciona el tipo --</option>
                <option value="youtube">YouTube</option>
                <option value="facebook">Facebook</option>
            </select>

            <label for="editar_url_video">URL del video:</label>
            <input type="url" id="editar_url_video" name="url" class="form-control" required>

            <label for="editar_descripcion_video">Descripción:</label>
            <textarea id="editar_descripcion_video" name="descripcion" rows="3" class="form-control" maxlength="255"></textarea>

            <button type="submit" class="btn btn-primary mt-3">Guardar Cambios</button>
        </form>
    </div>
</div>
<!-- /Modal Editar Video -->

<!-- Modal Eliminar Video -->
<div id="modal-eliminar-video" class="modal-noticia" style="display:none;">
    <div class="modal-content-noticia">
        <button type="button" id="btn-cerrar-eliminar-video" class="btn btn-secondary cerrar-noticia">✖</button>

        <form id="form-eliminar-video" method="POST" action="{{ route('admin.videos.destroy', 0) }}">
            @csrf
            @method('DELETE')

            <h3 style="font-weight: bold; color: #000; font-size: 24px;">Eliminar Video</h3>

            <label for="eliminar_video_id">Selecciona el video a eliminar:</label>
            <select name="eliminar_video_id" id="eliminar_video_id" class="form-control" required>
                <option value="" disabled selected>-- Elige un video --</option>
                @foreach($videos as $video)
                <option 
                    value="{{ $video->id }}"
                    data-titulo="{{ htmlspecialchars($video->titulo, ENT_QUOTES) }}"
                >
                    {{ $video->titulo }}
                </option>
                @endforeach
            </select>

            <p class="mt-3" style="color: red; font-weight: bold;">
                ¡Atención! Esta acción no se puede deshacer.
            </p>

            <button type="submit" class="btn btn-danger mt-3">Eliminar Video</button>
        </form>
    </div>
</div>
<!-- /Modal Eliminar Video -->

<div class="videos-grid-3d">
    @forelse($videos as $video)
        <div class="video-card-3d" data-type="{{ $video->tipo }}">
            <div class="video-img-container">
                @if($video->tipo == 'youtube')
                    @php
                        preg_match('/(?:youtube\.com.*v=|youtu\.be\/)([^&]+)/', $video->url, $matches);
                        $youtubeId = $matches[1] ?? null;
                    @endphp
                    @if($youtubeId)
                        <iframe
                            width="100%"
                            height="200"
                            src="https://www.youtube.com/embed/{{ $youtubeId }}"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                            loading="lazy"
                        ></iframe>
                    @else
                        <p>No se pudo cargar el video</p>
                    @endif
                @elseif($video->tipo == 'facebook')
                    <iframe
                        src="https://www.facebook.com/plugins/video.php?href={{ urlencode($video->url) }}&show_text=false&width=280"
                        width="100%"
                        height="200"
                        style="border:none;overflow:hidden;"
                        scrolling="no"
                        frameborder="0"
                        allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                        loading="lazy"
                    ></iframe>
                @else
                    <p>Tipo de video no soportado</p>
                @endif
            </div>
            <div class="video-content">
                <h3>{{ $video->titulo }}</h3>
                <p>{{ $video->descripcion ?? '' }}</p>
                @php
                    $embedUrl = $video->tipo == 'youtube'
                        ? 'https://www.youtube.com/embed/' . ($youtubeId ?? '')
                        : ($video->tipo == 'facebook'
                            ? 'https://www.facebook.com/plugins/video.php?href=' . urlencode($video->url) . '&show_text=false&width=560'
                            : '#');
                @endphp

                <a href="#"
                class="watch-more"
                data-embed-url="{{ $embedUrl }}"
                data-video-type="{{ $video->tipo }}">
                Ver video <i class="fas fa-angle-double-right"></i>
                </a>
            </div>
        </div>
    @empty
        <p>No hay videos disponibles.</p>
    @endforelse
</div>



    <!-- Modal para reproducir video en grande -->
    <div id="video-modal-player" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.8); z-index: 9999; justify-content: center; align-items: center;">
    <div style="position:relative; width:80%; max-width:900px; background:#000; border-radius:8px;">
        <button id="modal-close-btn" style="position:absolute; top:10px; right:15px; font-size:24px; color:#fff; background:none; border:none; cursor:pointer;">&times;</button>
        <iframe id="modal-video-iframe" width="100%" height="500" frameborder="0" allowfullscreen allow="autoplay; encrypted-media; picture-in-picture"></iframe>
    </div>
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

    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Incluir el archivo JS externo -->
    <script type="module" src="{{ asset('js/videos.js') }}"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.watch-more').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const url = this.getAttribute('data-embed-url');
                if (url && typeof openModal === 'function') {
                    openModal(url); // Debes tener una función openModal que reciba la URL e incruste el iframe
                } else {
                    console.error('URL no válida o falta la función openModal.');
                }
            });
        });
    });
    </script>

</body>
</html>
