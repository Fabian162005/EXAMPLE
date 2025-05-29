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
        <a href="{{ route('layouts.app') }}" class="btn-back-home">Volver al Inicio</a>
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
            <!-- Video de Facebook: GP Canal Oficial -->
            <div class="video-card-3d"
                data-embed-url="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FGPcanaloficial%2Fvideos%2F2217595475365660%2F&show_text=false&width=560">
            <div class="video-img-container">
                <iframe
                    src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FGPcanaloficial%2Fvideos%2F2217595475365660%2F&show_text=false&width=280"
                    width="100%"
                    height="200"
                    style="border:none;overflow:hidden;"
                    scrolling="no"
                    frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                </iframe>
            </div>
            <div class="video-content">
                <h3>GP Canal Oficial – Video Destacado</h3>
                <p>Ejemplo de vídeo embebido desde la página oficial de Facebook.</p>
                <a href="#" class="watch-more">
                Ver video <i class="fas fa-angle-double-right"></i>
                </a>
            </div>
            </div>
            <!-- Video 2: Mark Ronson – Uptown Funk -->
            <div class="video-card-3d" data-embed-url="https://www.youtube.com/embed/OPf0YbXqDm0">
                <div class="video-img-container">
                <img src="https://img.youtube.com/vi/OPf0YbXqDm0/maxresdefault.jpg"
                    alt="Mark Ronson – Uptown Funk" class="video-img">
                </div>
                <div class="video-content">
                <h3>Mark Ronson – Uptown Funk</h3>
                <p>El éxito que definió la década pasada.</p>
                <a href="#" class="watch-more">Ver video <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>

            <!-- Video 3: PSY – Gangnam Style -->
            <div class="video-card-3d" data-embed-url="https://www.youtube.com/embed/9bZkp7q19f0">
                <div class="video-img-container">
                <img src="https://img.youtube.com/vi/9bZkp7q19f0/maxresdefault.jpg"
                    alt="PSY – Gangnam Style" class="video-img">
                </div>
                <div class="video-content">
                <h3>PSY – Gangnam Style</h3>
                <p>El fenómeno viral de PSY.</p>
                <a href="#" class="watch-more">Ver video <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>

            <!-- Video 4: Charlie Puth – Attention -->
            <div class="video-card-3d" data-embed-url="https://www.youtube.com/embed/nfs8NYg7yDQ">
                <div class="video-img-container">
                <img src="https://img.youtube.com/vi/nfs8NYg7yDQ/maxresdefault.jpg"
                    alt="Charlie Puth – Attention" class="video-img">
                </div>
                <div class="video-content">
                <h3>Charlie Puth – Attention</h3>
                <p>El hit pop con ese bajo inconfundible.</p>
                <a href="#" class="watch-more">Ver video <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>

            <!-- Video 5: Ed Sheeran – Shape of You -->
            <div class="video-card-3d" data-embed-url="https://www.youtube.com/embed/JGwWNGJdvx8">
                <div class="video-img-container">
                <img src="https://img.youtube.com/vi/JGwWNGJdvx8/maxresdefault.jpg"
                    alt="Ed Sheeran – Shape of You" class="video-img">
                </div>
                <div class="video-content">
                <h3>Ed Sheeran – Shape of You</h3>
                <p>Uno de los videos más vistos de YouTube.</p>
                <a href="#" class="watch-more">Ver video <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>

            <!-- Video 6: Coldplay – Viva La Vida -->
            <div class="video-card-3d" data-embed-url="https://www.youtube.com/embed/dvgZkm1xWPE">
                <div class="video-img-container">
                <img src="https://img.youtube.com/vi/dvgZkm1xWPE/maxresdefault.jpg"
                    alt="Coldplay – Viva La Vida" class="video-img">
                </div>
                <div class="video-content">
                <h3>Coldplay – Viva La Vida</h3>
                <p>El himno épico de Coldplay.</p>
                <a href="#" class="watch-more">Ver video <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
            </div>
            <!-- Contenedor superpuesto para el iframe -->
            <div id="video-container">
            <button id="close-video-btn">Cerrar Video</button>
            <iframe id="video-player" frameborder="0" allowfullscreen></iframe>
            </div>
    <!-- Incluir el archivo JS externo -->
    <script type="module" src="{{ asset('js/videos.js') }}"></script>
</body>
</html>
