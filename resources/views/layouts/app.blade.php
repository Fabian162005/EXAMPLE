<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('resources\js\app.js') }}"></script>
    <!-- Agrega FontAwesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>

</head>
<body>
<!-- Redes sociales arriba del navbar -->
<div class="social-icons">
    <a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
    <a href="https://www.instagram.com/" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
    <a href="https://www.youtube.com/" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
    <a href="https://twitter.com/" target="_blank" class="twitter"><i class="fab fa-x-twitter"></i></a>
    <a href="https://www.twitch.tv/" target="_blank" class="twitch"><i class="fab fa-twitch"></i></a>
</div>


<!-- Navbar Fijo -->
<div class="navbar-container">
    <div class="navbar-content">
        <!-- Barra de navegación -->
        <div class="navbar-menu">
            <div class="nav-item nav-noticias">Noticias</div>
            <div class="nav-item nav-encuestas">Encuestas</div>

            <!-- 🔥 Logo en medio -->
            <div class="logo-container">
                <a href="/">
                    <img src="{{ asset('storage/images/logogpcanal.jpg') }}" alt="Logo">
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
<script>
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("search-icon").addEventListener("click", function () {
                let searchContainer = document.getElementById("search-container");
                if (searchContainer.style.display === "flex") {
                    searchContainer.style.display = "none";
                } else {
                    searchContainer.style.display = "flex";
                }
            });
        });
    </script>


<!-- Espaciado para que el contenido no quede oculto debajo del navbar -->
<div style="height: 140px;"></div>

<h2 class="section-title">El Mejor Lugar para Mantenerte Informado</h2>
            <!-- Contenedor del Slider con Fondo -->
            <div style="width: 100%; height: 250px; display: flex; justify-content: center; margin-top: 5px; position: relative;">
                <div style="width: 90%; max-width: 1200px; padding: 15px; background: rgba(84, 84, 84, 0.2); border-radius: 15px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3); position: relative;">
                        <!-- Slider -->
                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('storage/images/485055934_963133949339637_6587303526016761817_n.jpg') }}" class="d-block w-100 custom-slider-img" alt="Slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/images/480487921_945020837817615_6087008265131444593_n.jpg') }}" class="d-block w-100 custom-slider-img" alt="Slide 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/images/487180354_968403768812655_384319847441050549_n.jpg') }}" class="d-block w-100 custom-slider-img" alt="Slide 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://via.placeholder.com/1200x400" class="d-block w-100 custom-slider-img" alt="Slide 4">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://via.placeholder.com/1200x400" class="d-block w-100 custom-slider-img" alt="Slide 5">
                                </div>
                            </div>
                        </div>
                </div>
            </div>
                <!-- Botón Anterior -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>

                <!-- Botón Siguiente -->
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
    </div>
</div>
       <!-- Sección Noticias -->
            <section id="noticias" class="content-section">
                <div class="section-box">
                    <h2 class="titulonoticias">Noticias</h2>

                <!-- Botón para buscar noticias -->
                <div class="search-news-container">
                    <a href="{{ route('noticias') }}" class="search-button">Buscar noticias 🔍</a>
                </div>

                <div class="news-grid">
                    <div class="news-item">
                    <img src="{{ asset('images/image1.jpg') }}" alt="Noticia 1">
                        <p>Descripción de la noticia 1. Aquí puedes una descripción breve de la noticia.</p>
                    </div>
                    <div class="news-item">
                        <img src="{{ asset('images/image2.jpg') }}" alt="Noticia 2">
                        <p>Descripción de la noticia 2. Este es otro resumen o descripción de la noticia.</p>
                    </div>
                    <div class="news-item">
                        <img src="{{ asset('images/image3.jpg') }}" alt="Noticia 3">
                        <p>Descripción de la noticia 3. Añade aquí la información relevante sobre la noticia.</p>
                    </div>
                    <div class="news-item">
                        <img src="{{ asset('images/image4.jpg') }}" alt="Noticia 4">
                        <p>Descripción de la noticia 4. Proporciona detalles adicionales sobre esta noticia.</p>
                    </div>
                    <div class="news-item">
                        <img src="{{ asset('images/image5.jpg') }}" alt="Noticia 5">
                        <p>Descripción de la noticia 5. Aquí puedes una descripción breve de la noticia.</p>
                    </div>
                    <div class="news-item">
                        <img src="{{ asset('images/image6.jpg') }}" alt="Noticia 6">
                        <p>Descripción de la noticia 6. Este es otro resumen o descripción de la noticia.</p>
                    </div>
                </div>
                <!-- Botón para ver más noticias -->
                <div class="view-more-container" style="display: flex; justify-content: center; margin-top: 15px;">
                    <button class="view-more-button">Ver más</button>
                </div>
            </div>
        </section>

    
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


<!-- Sección Encuestas -->
<section id="encuestas" class="encuestas-section">
    <h2 class="section-header" role="button" tabindex="0" aria-expanded="false" onclick="toggleEncuestas()">
        Encuestas
        <svg class="toggle-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
    </h2>
    
    <div id="encuestas-container" class="encuestas-grid hidden">
        <!-- Tarjeta Presidenciales -->
        <article class="encuesta-card">
            <div class="card-header" role="button" aria-expanded="false" onclick="toggleList('presidenciales')">
                <h3 class="card-title">Encuestas Presidenciales</h3>
                <span class="toggle-arrow">▼</span>
            </div>
            <ul id="presidenciales" class="card-list hidden">
                <li class="card-item"><a href="{{ url('/encuestas/lima') }}" class="card-link">Lima</a></li>
                <li class="card-item"><a href="{{ url('/encuestas/chiclayo') }}" class="card-link">Chiclayo</a></li>
                <li class="card-item"><a href="{{ url('/encuestas/piura') }}" class="card-link">Piura</a></li>
            </ul>
        </article>

        <!-- Tarjeta Piura -->
        <article class="encuesta-card">
            <div class="card-header" role="button" aria-expanded="false" onclick="toggleList('piura')">
                <h3 class="card-title">Encuestas Piura</h3>
                <span class="toggle-arrow">▼</span>
            </div>
            <ul id="piura" class="card-list hidden">
                <li class="card-item"><a href="{{ url('/encuestas/morropon') }}" class="card-link">Morropón</a></li>
                <li class="card-item"><a href="{{ url('/encuestas/castilla') }}" class="card-link">Castilla</a></li>
                <li class="card-item"><a href="{{ url('/encuestas/plura2') }}" class="card-link">Plura2</a></li>
            </ul>
        </article>
    </div>
</section>

<script>
// Toggle sección principal
function toggleEncuestas() {
    const container = document.getElementById("encuestas-container");
    const header = document.querySelector(".section-header");
    const icon = document.querySelector(".toggle-icon");
    
    container.classList.toggle("hidden");
    container.classList.toggle("show");
    icon.classList.toggle("rotate-180");
    header.setAttribute("aria-expanded", container.classList.contains("show"));
}

// Toggle listas individuales
function toggleList(id) {
    const list = document.getElementById(id);
    const arrow = list.previousElementSibling.querySelector(".toggle-arrow");
    
    list.classList.toggle("hidden");
    list.classList.toggle("show");
    arrow.classList.toggle("rotate-180");
    list.parentElement.setAttribute("aria-expanded", list.classList.contains("show"));
}

// Cerrar al hacer click fuera (opcional)
document.addEventListener('click', (e) => {
    if (!e.target.closest('.encuesta-card') && !e.target.closest('.section-header')) {
        document.getElementById("encuestas-container").classList.add("hidden");
        document.querySelector(".toggle-icon").classList.remove("rotate-180");
    }
});
</script>



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
          <a href="#" class="bi bi-instagram" title="Instagram"></a>
          <a href="#" class="bi bi-twitter" title="Twitter"></a>
          <a href="#" class="bi bi-linkedin" title="LinkedIn"></a>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!--Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</body>
</html>
