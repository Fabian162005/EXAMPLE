<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portal de noticias y encuestas actualizadas">
    <title>Noticias GP - Información confiable y actualizada</title>
    
    <!-- Preloads para mejor performance -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" as="style">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" as="style">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <!-- Estilos locales -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('storage/images/favicon.ico') }}" type="image/x-icon">
</head>

<body>
    <!-- Video de fondo con overlay para mejor legibilidad -->
    <div class="video-background-container">
        <video autoplay muted loop id="video-background">
            <source src="{{ asset('videos/background.mp4') }}" type="video/mp4">
            Tu navegador no soporta videos HTML5.
        </video>
        <div class="video-overlay"></div>
    </div>
    
    <!-- Barra de redes sociales flotante -->
    <div class="social-floating-bar">
        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="social-icon facebook" aria-label="Facebook">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="social-icon instagram" aria-label="Instagram">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" class="social-icon youtube" aria-label="YouTube">
            <i class="fab fa-youtube"></i>
        </a>
        <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="social-icon twitter" aria-label="Twitter">
            <i class="fab fa-x-twitter"></i>
        </a>
        <a href="https://twitch.tv" target="_blank" rel="noopener noreferrer" class="social-icon twitch" aria-label="Twitch">
            <i class="fab fa-twitch"></i>
        </a>
    </div>

    <!-- Navbar moderno -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary-gradient fixed-top">
        <div class="container-fluid">
            <!-- Logo responsive -->
            <a class="navbar-brand d-lg-none" href="/">
                <img src="{{ asset('storage/images/logogpcanal.jpg') }}" alt="Logo GP" class="mobile-logo">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#noticias">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#encuestas">Encuestas</a>
                    </li>
                </ul>
                
                <!-- Logo central en desktop -->
                <a class="navbar-brand mx-lg-auto d-none d-lg-block" href="/">
                    <img src="{{ asset('storage/images/logogpcanal.jpeg') }}" alt="Logo GP" class="main-logo">
                </a>
                
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contáctanos</a>
                    </li>
                    <li class="nav-item search-nav-item">
                        <button class="btn btn-search" id="searchToggle">
                            <i class="fas fa-search"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Barra de búsqueda desplegable -->
        <div class="search-expandable" id="searchExpandable">
            <div class="container-fluid">
                <form class="d-flex">
                    <input class="form-control me-2 search-input" type="search" placeholder="Buscar noticias..." aria-label="Buscar">
                    <button class="btn btn-outline-light search-btn" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Espacio para el navbar fijo -->
    <div class="navbar-spacer"></div>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="hero-title">El Mejor Lugar para <span>Mantenerte Informado</span></h1>
            <p class="hero-subtitle">Noticias verificadas y encuestas confiables</p>
        </div>
    </section>

    <!-- Slider de noticias destacadas -->
    <section class="featured-slider">
        <div class="container">
            <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="2"></button>
                </div>
                
                <div class="carousel-inner rounded-4 overflow-hidden shadow-lg">
                    <div class="carousel-item active">
                        <img src="{{ asset('storage/images/WhatsApp Image 2025-04-07 at 2.28.45 PM.jpeg') }}" class="d-block w-100" alt="Noticia destacada 1">
                        <div class="carousel-caption">
                            <h5>Título de noticia destacada 1</h5>
                            <p>Breve descripción de la noticia principal</p>
                            <a href="#" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/images/WhatsApp Image 2025-04-07 at 2.28.45 PM (1).jpeg') }}" class="d-block w-100" alt="Noticia destacada 2">
                        <div class="carousel-caption">
                            <h5>Título de noticia destacada 2</h5>
                            <p>Breve descripción de la noticia principal</p>
                            <a href="#" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/images/WhatsApp Image 2025-04-07 at 2.28.45 PM (2).jpeg') }}" class="d-block w-100" alt="Noticia destacada 3">
                        <div class="carousel-caption">
                            <h5>Título de noticia destacada 3</h5>
                            <p>Breve descripción de la noticia principal</p>
                            <a href="#" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
                
                <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>

    <!-- Sección de Noticias -->
    <section id="noticias" class="news-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Últimas Noticias</h2>
                <a href="{{ route('noticias') }}" class="btn btn-outline-primary">
                    Ver todas <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
            
            <div class="row g-4 news-grid">
                <!-- Noticia 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="news-card">
                        <div class="news-image-container">
                            <img src="{{ asset('images/image1.jpg') }}" class="news-image" alt="Noticia 1">
                            <div class="news-badge">Nuevo</div>
                        </div>
                        <div class="news-body">
                            <h3 class="news-title">Título de la Noticia 1</h3>
                            <p class="news-excerpt">Descripción breve de la noticia que puede contener los puntos más relevantes del artículo completo.</p>
                            <div class="news-meta">
                                <span class="news-date"><i class="far fa-calendar-alt me-2"></i>10 Abr 2025</span>
                                <a href="#" class="news-link">Leer más <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Noticia 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="news-card">
                        <div class="news-image-container">
                            <img src="{{ asset('images/image2.jpg') }}" class="news-image" alt="Noticia 2">
                        </div>
                        <div class="news-body">
                            <h3 class="news-title">Título de la Noticia 2</h3>
                            <p class="news-excerpt">Descripción breve de la noticia que puede contener los puntos más relevantes del artículo completo.</p>
                            <div class="news-meta">
                                <span class="news-date"><i class="far fa-calendar-alt me-2"></i>9 Abr 2025</span>
                                <a href="#" class="news-link">Leer más <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Noticia 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="news-card">
                        <div class="news-image-container">
                            <img src="{{ asset('images/image3.jpg') }}" class="news-image" alt="Noticia 3">
                            <div class="news-badge">Popular</div>
                        </div>
                        <div class="news-body">
                            <h3 class="news-title">Título de la Noticia 3</h3>
                            <p class="news-excerpt">Descripción breve de la noticia que puede contener los puntos más relevantes del artículo completo.</p>
                            <div class="news-meta">
                                <span class="news-date"><i class="far fa-calendar-alt me-2"></i>8 Abr 2025</span>
                                <a href="#" class="news-link">Leer más <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Noticia 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="news-card">
                        <div class="news-image-container">
                            <img src="{{ asset('images/image4.jpg') }}" class="news-image" alt="Noticia 4">
                        </div>
                        <div class="news-body">
                            <h3 class="news-title">Título de la Noticia 4</h3>
                            <p class="news-excerpt">Descripción breve de la noticia que puede contener los puntos más relevantes del artículo completo.</p>
                            <div class="news-meta">
                                <span class="news-date"><i class="far fa-calendar-alt me-2"></i>7 Abr 2025</span>
                                <a href="#" class="news-link">Leer más <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Noticia 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="news-card">
                        <div class="news-image-container">
                            <img src="{{ asset('images/image5.jpg') }}" class="news-image" alt="Noticia 5">
                        </div>
                        <div class="news-body">
                            <h3 class="news-title">Título de la Noticia 5</h3>
                            <p class="news-excerpt">Descripción breve de la noticia que puede contener los puntos más relevantes del artículo completo.</p>
                            <div class="news-meta">
                                <span class="news-date"><i class="far fa-calendar-alt me-2"></i>6 Abr 2025</span>
                                <a href="#" class="news-link">Leer más <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Noticia 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="news-card">
                        <div class="news-image-container">
                            <img src="{{ asset('images/image6.jpg') }}" class="news-image" alt="Noticia 6">
                            <div class="news-badge">Destacado</div>
                        </div>
                        <div class="news-body">
                            <h3 class="news-title">Título de la Noticia 6</h3>
                            <p class="news-excerpt">Descripción breve de la noticia que puede contener los puntos más relevantes del artículo completo.</p>
                            <div class="news-meta">
                                <span class="news-date"><i class="far fa-calendar-alt me-2"></i>5 Abr 2025</span>
                                <a href="#" class="news-link">Leer más <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <button class="btn btn-primary btn-lg">Ver más noticias</button>
            </div>
        </div>
    </section>

    <!-- Sección de Encuestas -->
    <section id="encuestas" class="polls-section bg-light">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Encuestas Recientes</h2>
                <p class="section-subtitle">Consulta las últimas tendencias y resultados</p>
            </div>
            
            <div class="row g-4">
                <!-- Acordeón de encuestas -->
                <div class="col-lg-6">
                    <div class="accordion" id="pollsAccordion">
                        <!-- Encuesta 1 -->
                        <div class="accordion-item shadow-sm">
                            <h3 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#poll1">
                                    <i class="fas fa-chart-pie me-3"></i> Encuestas Presidenciales
                                </button>
                            </h3>
                            <div id="poll1" class="accordion-collapse collapse show" data-bs-parent="#pollsAccordion">
                                <div class="accordion-body">
                                    <ul class="poll-list">
                                        <li class="poll-item">
                                            <a href="{{ url('/encuestas/lima') }}" class="poll-link">
                                                <i class="fas fa-map-marker-alt me-2"></i> Lima
                                                <span class="badge bg-primary float-end">Nuevo</span>
                                            </a>
                                        </li>
                                        <li class="poll-item">
                                            <a href="{{ url('/encuestas/chiclayo') }}" class="poll-link">
                                                <i class="fas fa-map-marker-alt me-2"></i> Chiclayo
                                            </a>
                                        </li>
                                        <li class="poll-item">
                                            <a href="{{ url('/encuestas/piura') }}" class="poll-link">
                                                <i class="fas fa-map-marker-alt me-2"></i> Piura
                                                <span class="badge bg-warning float-end">Actualizado</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Encuesta 2 -->
                        <div class="accordion-item shadow-sm">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#poll2">
                                    <i class="fas fa-chart-bar me-3"></i> Encuestas Piura
                                </button>
                            </h3>
                            <div id="poll2" class="accordion-collapse collapse" data-bs-parent="#pollsAccordion">
                                <div class="accordion-body">
                                    <ul class="poll-list">
                                        <li class="poll-item">
                                            <a href="{{ url('/encuestas/morropon') }}" class="poll-link">
                                                <i class="fas fa-map-marker-alt me-2"></i> Morropón
                                            </a>
                                        </li>
                                        <li class="poll-item">
                                            <a href="{{ url('/encuestas/castilla') }}" class="poll-link">
                                                <i class="fas fa-map-marker-alt me-2"></i> Castilla
                                                <span class="badge bg-danger float-end">Urgente</span>
                                            </a>
                                        </li>
                                        <li class="poll-item">
                                            <a href="{{ url('/encuestas/plura2') }}" class="poll-link">
                                                <i class="fas fa-map-marker-alt me-2"></i> Plura2
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Gráfico de encuesta destacada -->
                <div class="col-lg-6">
                    <div class="featured-poll card h-100 shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h3 class="mb-0">Encuesta Destacada</h3>
                        </div>
                        <div class="card-body">
                            <h4 class="poll-question">¿Qué candidato prefieres para las próximas elecciones?</h4>
                            <div class="poll-chart-container">
                                <canvas id="pollChart"></canvas>
                            </div>
                            <div class="poll-meta mt-3">
                                <p class="text-muted"><small>Encuesta realizada el 05/04/2025 - Muestra: 1,200 personas</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section id="contacto" class="contact-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Contáctanos</h2>
                <p class="section-subtitle">Estamos aquí para responder tus preguntas</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="contact-info card h-100 shadow-sm">
                        <div class="card-body">
                            <h3 class="contact-title"><i class="fas fa-envelope me-3"></i> Información de Contacto</h3>
                            <ul class="contact-list">
                                <li class="contact-item">
                                    <i class="fas fa-envelope contact-icon"></i>
                                    <a href="mailto:info@noticias.com">info@noticias.com</a>
                                </li>
                                <li class="contact-item">
                                    <i class="fas fa-phone contact-icon"></i>
                                    <a href="tel:+51987654321">+51 987 654 321</a>
                                </li>
                                <li class="contact-item">
                                    <i class="fas fa-map-marker-alt contact-icon"></i>
                                    Av. Principal 123, Lima, Perú
                                </li>
                                <li class="contact-item">
                                    <i class="fas fa-clock contact-icon"></i>
                                    Lunes a Viernes: 9am - 6pm
                                </li>
                            </ul>
                            
                            <h3 class="contact-title mt-4"><i class="fas fa-share-alt me-3"></i> Síguenos</h3>
                            <div class="social-contact">
                                <a href="#" class="social-icon facebook" aria-label="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon instagram" aria-label="Instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="social-icon twitter" aria-label="Twitter">
                                    <i class="fab fa-x-twitter"></i>
                                </a>
                                <a href="#" class="social-icon youtube" aria-label="YouTube">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="contact-form card h-100 shadow-sm">
                        <div class="card-body">
                            <h3 class="contact-title"><i class="fas fa-paper-plane me-3"></i> Envíanos un Mensaje</h3>
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Asunto</label>
                                    <input type="text" class="form-control" id="subject" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Mensaje</label>
                                    <textarea class="form-control" id="message" rows="4" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-dark text-white">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="footer-logo mb-3">
                        <img src="{{ asset('storage/images/logogpcanal.jpg') }}" alt="Logo GP" class="img-fluid">
                    </div>
                    <p>El portal de noticias más confiable y actualizado de la región. Brindamos información verificada y análisis profundos.</p>
                </div>
                
                <div class="col-lg-2 col-md-4">
                    <h4 class="footer-title">Enlaces</h4>
                    <ul class="footer-links">
                        <li><a href="#noticias">Noticias</a></li>
                        <li><a href="#encuestas">Encuestas</a></li>
                        <li><a href="#contacto">Contacto</a></li>
                        <li><a href="#">Política de Privacidad</a></li>
                        <li><a href="#">Términos de Servicio</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-4">
                    <h4 class="footer-title">Categorías</h4>
                    <ul class="footer-links">
                        <li><a href="#">Política</a></li>
                        <li><a href="#">Economía</a></li>
                        <li><a href="#">Deportes</a></li>
                        <li><a href="#">Cultura</a></li>
                        <li><a href="#">Tecnología</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-4">
                    <h4 class="footer-title">Suscríbete</h4>
                    <p>Recibe las últimas noticias directamente en tu correo.</p>
                    <form class="subscribe-form">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Tu correo" required>
                            <button class="btn btn-primary" type="submit">OK</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <hr class="my-4">
            
            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="mb-md-0">&copy; 2025 Noticias GP. Todos los derechos reservados.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="social-footer text-md-end">
                            <a href="#" class="social-icon" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
                            <a href="#" class="social-icon" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Botón de volver arriba -->
    <button id="backToTop" class="btn btn-primary back-to-top" aria-label="Volver arriba">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Chart.js para gráficos de encuestas -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- Scripts locales -->
    <script src="{{ asset('js/app.js') }}"></script>
    
    <script>
        // Inicializar gráfico de encuesta
        const ctx = document.getElementById('pollChart').getContext('2d');
        const pollChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Candidato A', 'Candidato B', 'Candidato C', 'Indecisos'],
                datasets: [{
                    label: 'Preferencia electoral',
                    data: [35, 28, 22, 15],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(153, 102, 255, 0.7)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 40
                    }
                }
            }
        });

        // Botón de búsqueda en navbar
        document.getElementById('searchToggle').addEventListener('click', function() {
            const searchExpandable = document.getElementById('searchExpandable');
            searchExpandable.style.display = searchExpandable.style.display === 'block' ? 'none' : 'block';
        });

        // Botón de volver arriba
        const backToTopButton = document.getElementById('backToTop');
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopButton.style.display = 'block';
            } else {
                backToTopButton.style.display = 'none';
            }
        });
        
        backToTopButton.addEventListener('click', function() {
            window.scrollTo({top: 0, behavior: 'smooth'});
        });
    </script>
</body>
</html>