<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tu CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- FontAwesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Si usas Laravel Mix u otro bundler, este no es necesario directamente -->
    <!-- <script src="{{ asset('resources/js/app.js') }}"></script> -->
</head>
<body>
<!-- En tu HTML (justo después de <body>) -->
<div class="fullpage-background"></div>

    <div id="particles-js"></div>

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
            <div class="nav-item nav-submenu">
                <i class="fas fa-lock" style="font-size: 14px; margin-right: 8px; vertical-align: middle;"></i>
            </div>
            <div class="nav-item nav-envivo">Videos</div>
            <div class="nav-item nav-noticias">Noticias</div>
            <div class="nav-item nav-encuestas">Encuestas</div>

            <!-- Logo en medio -->
            <div class="logo-container">
                <a href="/">
                    <img src="{{ asset('images/logogpcanal.jpg') }}" alt="Logo GP Canal" class="navbar-logo">
                </a>
            </div>
            
            <div class="nav-item nav-contacto">Contáctanos</div>
            <!-- Botón de búsqueda estilizado -->
            <button id="search-icon" class="search-button">
                <i class="fas fa-search"></i> <!-- Ícono de lupa -->
            </button>
        </div>
    </div>
</div>

<!-- Contenedor de la barra de búsqueda (inicialmente oculta) -->
<div id="search-container" class="search-container">
    <input type="text" class="search-input" placeholder="Buscar...">
    <button class="search-button">🔍</button>
</div>

<!-- Espaciado fijo para el contenido principal -->
<div class="main-content-spacer" style="height: 140px;"></div>

<!-- Contenido principal -->
<h2 class="section-title">El Mejor Lugar para Mantenerte Informado</h2>

<div class="slider-container-3d">
    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="storage/images/485055934_963133949339637_6587303526016761817_n.jpg" class="d-block w-100" alt="Noticia 1">
            </div>
            <div class="carousel-item">
                <img src="storage/images/480487921_945020837817615_6087008265131444593_n.jpg" class="d-block w-100" alt="Noticia 2">
            </div>
            <div class="carousel-item">
                <img src="storage/images/487180354_968403768812655_384319847441050549_n.jpg" class="d-block w-100" alt="Noticia 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</div>
<!-- Sección Noticias -->
<section class="news-section-3d">
        <div class="section-header-3d">
            <h2>Noticias</h2>
            <a href="{{ url('noticias') }}" class="btn-3d news-btn"> Buscar noticias <i class="fas fa-arrow-right"></i></a></div>
        
        <div class="news-grid-3d">
            <!-- Noticia 1 -->
            <div class="news-card-3d">
                <div class="news-img-container">
                    <img src="images/image1.jpg" alt="Noticia 1" class="news-img">
                    <div class="news-badge">Nuevo</div>
                </div>
                <div class="news-content">
                    <h3>Título de Noticia 1</h3>
                    <p>Descripción breve de la noticia con información relevante para captar la atención del lector.</p>
                    <a href="#" class="read-more">Leer más <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
            
            <!-- Noticia 2 -->
            <div class="news-card-3d">
                <div class="news-img-container">
                    <img src="images/image2.jpg" alt="Noticia 2" class="news-img">
                    <div class="news-badge trending">Trending</div>
                </div>
                <div class="news-content">
                    <h3>Título de Noticia 2</h3>
                    <p>Descripción breve de la noticia con información relevante para captar la atención del lector.</p>
                    <a href="#" class="read-more">Leer más <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
            
            <!-- Noticia 3 -->
            <div class="news-card-3d">
                <div class="news-img-container">
                    <img src="images/image3.jpg" alt="Noticia 3" class="news-img">
                </div>
                <div class="news-content">
                    <h3>Título de Noticia 3</h3>
                    <p>Descripción breve de la noticia con información relevante para captar la atención del lector.</p>
                    <a href="#" class="read-more">Leer más <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
            
            <!-- Noticia 4 -->
            <div class="news-card-3d">
                <div class="news-img-container">
                    <img src="images/image4.jpg" alt="Noticia 4" class="news-img">
                </div>
                <div class="news-content">
                    <h3>Título de Noticia 4</h3>
                    <p>Descripción breve de la noticia con información relevante para captar la atención del lector.</p>
                    <a href="#" class="read-more">Leer más <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
            
            <!-- Noticia 5 -->
            <div class="news-card-3d">
                <div class="news-img-container">
                    <img src="images/image5.jpg" alt="Noticia 5" class="news-img">
                    <div class="news-badge hot">Hot</div>
                </div>
                <div class="news-content">
                    <h3>Título de Noticia 5</h3>
                    <p>Descripción breve de la noticia con información relevante para captar la atención del lector.</p>
                    <a href="#" class="read-more">Leer más <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
            
            <!-- Noticia 6 -->
            <div class="news-card-3d">
                <div class="news-img-container">
                    <img src="images/image6.jpg" alt="Noticia 6" class="news-img">
                </div>
                <div class="news-content">
                    <h3>Título de Noticia 6</h3>
                    <p>Descripción breve de la noticia con información relevante para captar la atención del lector.</p>
                    <a href="#" class="read-more">Leer más <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>

    </section>
<!-- Sección Encuestas -->
    <section class="polls-section-3d">
        <h2 class="section-title-3d">Encuestas <span class="highlight">Populares</span></h2>
        
        <div class="polls-container-3d">
            <!-- Encuesta 1 -->
            <div class="poll-card-3d">
                <div class="poll-header">
                    <h3>Encuestas Presidenciales</h3>
                    <div class="poll-toggle" data-target="presidential-polls">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                
                <div class="poll-content" id="presidential-polls">
                    <a href="{{ url('encuestas/lima') }}" class="poll-item">
                        <div class="poll-icon"><i class="fas fa-city"></i></div>
                        <div class="poll-info">
                            <h4>Lima</h4>
                            <p>Última encuesta: 15 Oct 2023</p>
                        </div>
                        <div class="poll-arrow"><i class="fas fa-arrow-right"></i></div>
                    </a>
                    
                    <a href="encuestas/chiclayo.html" class="poll-item">
                        <div class="poll-icon"><i class="fas fa-umbrella-beach"></i></div>
                        <div class="poll-info">
                            <h4>Chiclayo</h4>
                            <p>Última encuesta: 12 Oct 2023</p>
                        </div>
                        <div class="poll-arrow"><i class="fas fa-arrow-right"></i></div>
                    </a>
                    
                    <a href="encuestas/piura.html" class="poll-item">
                        <div class="poll-icon"><i class="fas fa-sun"></i></div>
                        <div class="poll-info">
                            <h4>Piura</h4>
                            <p>Última encuesta: 10 Oct 2023</p>
                        </div>
                        <div class="poll-arrow"><i class="fas fa-arrow-right"></i></div>
                    </a>
                </div>
            </div>
            
            <!-- Encuesta 2 -->
            <div class="poll-card-3d">
                <div class="poll-header">
                    <h3>Encuestas Regionales</h3>
                    <div class="poll-toggle" data-target="regional-polls">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                
                <div class="poll-content" id="regional-polls">
                    <a href="encuestas/morropon.html" class="poll-item">
                        <div class="poll-icon"><i class="fas fa-mountain"></i></div>
                        <div class="poll-info">
                            <h4>Piura</h4>
                            <p>Última encuesta: 8 Oct 2023</p>
                        </div>
                        <div class="poll-arrow"><i class="fas fa-arrow-right"></i></div>
                    </a>
                    
                    <a href="encuestas/castilla.html" class="poll-item">
                        <div class="poll-icon"><i class="fas fa-archway"></i></div>
                        <div class="poll-info">
                            <h4>Castilla</h4>
                            <p>Última encuesta: 5 Oct 2023</p>
                        </div>
                        <div class="poll-arrow"><i class="fas fa-arrow-right"></i></div>
                    </a>
                    
                    <a href="encuestas/plura2.html" class="poll-item">
                        <div class="poll-icon"><i class="fas fa-water"></i></div>
                        <div class="poll-info">
                            <h4>Morropon</h4>
                            <p>Última encuesta: 3 Oct 2023</p>
                        </div>
                        <div class="poll-arrow"><i class="fas fa-arrow-right"></i></div>
                    </a>
                </div>
            </div>
        </div>
    </section>
<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->

<section id="contacto" class="contacto-3d">
  <div class="container">
    <div class="card-3d">
      <!-- Contacto -->
      <div class="columna">
        <h3>📩 Contáctanos</h3>
        <p><i class="bi bi-envelope-fill"></i> <a href="mailto:info@noticias.com">info@noticias.com</a></p>
        <p><i class="bi bi-telephone-fill"></i> <a href="tel:+51987654321">+51 987 654 321</a></p>
        <p><i class="bi bi-geo-alt-fill"></i> Av. Principal 123, Lima, Perú</p>
        <p><i class="bi bi-clock-fill"></i> Lunes a Viernes: 9am - 6pm</p>
      </div>
      
      <!-- Redes -->
      <div class="columna">
        <h3>🌐 Síguenos</h3>
        <div class="redes">
          <a href="#" class="bi bi-facebook" title="Facebook"></a>
          <a href="#" class="bi bi-youtube" title="Youtube"></a>
          <a href="#" class="bi bi-instagram" title="Instagram"></a>
          <a href="#" class="bi bi-twitter" title="Twitter"></a>
          <a href="#" class="bi bi-twitch" title="Twitch"></a>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!--Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
 
    <!-- Scripts al final del body -->
    <script src="https://cdn.jsdelivr.net/npm/victor@1.1.0/build/victor.min.js"></script>
    <script src="{{ asset('js/hexocet.js') }}"></script>
    <script src="{{ asset('js/scroll-efect.js') }}"></script>
</body>
</html>
