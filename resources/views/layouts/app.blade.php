<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<!-- Contenedor de la barra de búsqueda -->
<div class="search-container">
    <input type="text" class="search-input" placeholder="Buscar...">
    <button class="search-button">🔍</button>
</div>

<!-- Navbar Horizontal Mejorado -->
<div style="width: 100vw; height: 200px; position: fixed; top: 0; left: 0; z-index: 1000; background-color: white;">
    <div style="max-width: 1400px; height: 100%; overflow: hidden; margin: auto;">
        <div style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; position: relative;">
            <!-- Logo centrado y más grande -->
            <div class="logo-container" style="position: absolute; left: 50%; transform: translateX(-50%); z-index: 20;">
                <a href="/">
                    <img src="{{ asset('storage/images/logogpcanal.jpg') }}" alt="Logo" style="width: 100px; height: 100px;">
                </a>
            </div>


            <!-- Barra de navegación -->
            <div class="navbar-menu" style="width: 100%; height: 60px; background-color: #3B83BD; border-radius: 30px; padding: 15px 40px; display: flex; justify-content: center; align-items: center;">
                <div class="nav-item">Noticias</div>
                <div class="nav-item">Encuestas</div>
                <div class="nav-item">Redes</div>
                <div class="nav-item">Contáctanos</div>
            </div>
        </div>
    </div>
</div>


<!-- Espaciado para que el contenido no quede oculto debajo del navbar -->
<div style="height: 140px;"></div>

<h2 class="section-title">El Mejor Lugar para Mantenerte Informado</h2>
<h2 class="section-title">El Mejor Lugar para Mantenerte Informado</h2>
<!-- Contenedor del Slider con Fondo -->
<div style="width: 100%; height: 250px; display: flex; justify-content: center; margin-top: 5px; position: relative;">
    <div style="width: 90%; max-width: 1200px; padding: 15px; background: rgba(84, 84, 84, 0.2); border-radius: 15px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3); position: relative;">

        <!-- Slider -->
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Slide 3">
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Slide 4">
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Slide 5">
                </div>
            </div>

            <!-- Botón Anterior -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev"
                style="position: flex; top: 50%; left: -18px; transform: translateY(-10%); background: rgba(0, 0, 0, 0.3); width: 55px; height: 250px; border-radius: 10%;">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <!-- Botón Siguiente -->
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next"
                style="position: flex; top: 50%; right: -18px; transform: translateY(-10%); background: rgba(0, 0, 0, 0.3); width: 55px; height: 250px; border-radius: 10%;">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

    </div>
</div>


    <!-- Contenido principal con Scroll Snap -->
    <main>
        <!-- Sección Noticias -->
        <section id="noticias" class="content-section">
            <div class="section-box">
                <h3 class="sub-title">Noticias</h3>
                <div class="news-grid">
                    <div class="news-item"></div>
                    <div class="news-item"></div>
                    <div class="news-item"></div>
                    <div class="news-item"></div>
                </div>
            </div>
        </section>

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

        <!-- Sección Redes Sociales -->
        <section id="redes" class="content-section">
            <div class="section-box">
                <h3 class="sub-title">Síguenos en:</h3>
                <div class="social-media">
                    <span>INSTAGRAM</span>
                    <span>FACEBOOK</span>
                    <span>YOUTUBE</span>
                    <span>TWITCH</span>
                    <span>TIKTOK</span>
                    <span>X (TWITTER)</span>
                </div>
            </div>
        </section>

        <!-- Sección Contacto -->
        <section id="contacto" class="content-section">
            <div class="section-box">
                <h3 class="sub-title">Contáctanos</h3>
                <p>Correo: info@noticias.com</p>
                <p>Teléfono: +51 987 654 321</p>
            </div>
        </section>
    </main>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
