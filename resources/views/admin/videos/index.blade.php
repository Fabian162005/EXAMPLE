<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GP Canal - Videos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin/videos.css') }}"> 
</head>
<body>

    <!-- Sección Videos -->
    <section class="videos-section-3d">
        <div class="section-header-3d">
            <a href="{{ route('app') }}" class="btn-back-home">Volver al modo Usuario</a>
            <h2 class="section-title-3d">
                <span class="highlight-blue">Videos</span> 
                <span class="highlight-black">Destacados</span>
            </h2>

            <div class="admin-actions">
                <button id="btn-open-modal" class="btn-admin-action"><i class="fas fa-upload"></i> Subir Video</button>
            </div>
            <button id="btn-open-editar-video" class="btn-admin-action">
                <i class="fas fa-edit"></i> Editar Video
            </button>
            <button id="btn-abrir-eliminar-video" class="btn btn-danger">
                Eliminar Video
            </button>


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
        @foreach($videos as $video)
            <div class="video-card-3d" data-type="{{ $video->tipo }}">
                <div class="video-img-container">
                    @if($video->tipo == 'youtube')
                        @php
                            // Extraemos el ID del video YouTube para montar el iframe embebido
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
                        <a href="#" class="watch-more" 
                        data-embed-url="
                        @if($video->tipo == 'youtube')
                            https://www.youtube.com/embed/{{ $youtubeId ?? '' }}
                        @elseif($video->tipo == 'facebook')
                            https://www.facebook.com/plugins/video.php?href={{ urlencode($video->url) }}&show_text=false&width=560
                        @endif
                        " 
                        data-video-type="{{ $video->tipo }}"
                        >Ver video <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
        @endforeach

        @if($videos->isEmpty())
            <p>No hay videos disponibles.</p>
        @endif
    </div>


    <!-- Modal para reproducir video en grande -->
    <div id="video-modal-player" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.8); z-index: 9999; justify-content: center; align-items: center;">
    <div style="position:relative; width:80%; max-width:900px; background:#000; border-radius:8px;">
        <button id="modal-close-btn" style="position:absolute; top:10px; right:15px; font-size:24px; color:#fff; background:none; border:none; cursor:pointer;">&times;</button>
        <iframe id="modal-video-iframe" width="100%" height="500" frameborder="0" allowfullscreen allow="autoplay; encrypted-media; picture-in-picture"></iframe>
    </div>
    </div>

        </section>

    <!-- Incluir el archivo JS externo -->
    <script type="module" src="{{ asset('js/admin-videos.js') }}"></script>

</body>
</html>
