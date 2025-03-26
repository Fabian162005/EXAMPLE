<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="{{ asset('resources\js\app.js') }}"></script>
    @vite(['resources/js/app.js'])

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
            <!-- Botón de búsqueda dentro del navbar -->
            <button id="search-icon" class="search-button">🔍</button>
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
                    <img src="htt_ps://via.placeholder.com/1200x400" class="d-block w-100" alt="Slide 5">
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
        <section id="encuestas" class="content-section">
            <div class="section-box">
                <h3 class="sub-title">Encuestas Presidenciales</h3>
                <ul>
                    <li>Lima</li>
                    <li>Chiclayo</li>
                    <li>Piura</li>
                </ul>
            </div>
            <div class="section-box">
                <h3 class="sub-title">Encuestas Piura</h3>
                <ul>
                    <li>Morropón</li>
                    <li>Piura</li>
                    <li>Castilla</li>
                </ul>
            </div>
        </section>

    <!-- Sección Redes Sociales Mejorada con 3D -->
<section id="redes" class="content-section redes-section">
    <div class="container">
        <h3 class="sub-title">🌎 Síguenos en Redes Sociales</h3>
        <div class="social-container">
            <a href="#" target="_blank" class="social-btn" style="--clr: #E1306C;"><i class="bi bi-instagram"></i> Instagram</a>
            <a href="#" target="_blank" class="social-btn" style="--clr: #1877F2;"><i class="bi bi-facebook"></i> Facebook</a>
            <a href="#" target="_blank" class="social-btn" style="--clr: #FF0000;"><i class="bi bi-youtube"></i> YouTube</a>
            <a href="#" target="_blank" class="social-btn" style="--clr: #6441A5;"><i class="bi bi-twitch"></i> Twitch</a>
            <a href="#" target="_blank" class="social-btn" style="--clr: #000000;"><i class="bi bi-tiktok"></i> TikTok</a>
            <a href="#" target="_blank" class="social-btn" style="--clr: #1DA1F2;"><i class="bi bi-twitter-x"></i> X (Twitter)</a>
        </div>
    </div>
</section>

<!-- Sección Contacto Mejorada con 3D -->
<section id="contacto" class="content-section contacto-section">
    <div class="container">
        <div class="contact-card">
            <h3 class="sub-title">📩 Contáctanos</h3>
            <p><i class="bi bi-envelope-fill"></i> <a href="mailto:info@noticias.com">info@noticias.com</a></p>
            <p><i class="bi bi-telephone-fill"></i> <a href="tel:+51987654321">+51 987 654 321</a></p>
            <p><i class="bi bi-geo-alt-fill"></i> Av. Principal 123, Lima, Perú</p>
            <p><i class="bi bi-clock-fill"></i> Lunes - Viernes: 9:00 AM - 6:00 PM</p>
        </div>
    </div>
</section>

<!-- Estilos CSS con Animaciones 3D y Efectos WOW -->
<style>
    /* Fondo Futurista */
    body {
        background:rgb(235, 238, 243);
        color: white;
        font-family: 'Poppins', sans-serif;
    }

    /* Sección de Redes Sociales */
    .redes-section {
        background: linear-gradient(135deg, #141e30, #243b55);
        padding: 80px 0;
        text-align: center;
    }

    .sub-title {
        font-size: 2.5rem;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 2px;
        text-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
    }

    /* Botones con efecto 3D */
    .social-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
        perspective: 1000px;
    }

    .social-btn {
        display: flex;
        align-items: center;
        gap: 10px;
        background: var(--clr);
        padding: 15px 30px;
        border-radius: 50px;
        font-size: 1.2rem;
        font-weight: bold;
        color: white;
        text-decoration: none;
        transition: 0.4s ease-in-out;
        transform-style: preserve-3d;
        transform: rotateX(10deg) rotateY(10deg);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }

    .social-btn:hover {
        transform: rotateX(0deg) rotateY(0deg) translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
    }

    .social-btn i {
        font-size: 1.8rem;
    }

    /* Sección Contacto con efecto Tarjeta 3D */
    .contacto-section {
        background: linear-gradient(135deg, #1B263B, #415A77);
        padding: 100px 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .contact-card {
        background: white;
        color: black;
        padding: 40px;
        border-radius: 15px;
        max-width: 500px;
        text-align: center;
        transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
        transform: perspective(1000px) rotateX(5deg);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }

    .contact-card:hover {
        transform: perspective(1000px) rotateX(0deg) translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
    }

    .contact-card p {
        font-size: 1.2rem;
        margin: 10px 0;
    }

    .contact-card a {
        color: #007BFF;
        font-weight: bold;
        text-decoration: none;
        transition: color 0.3s;
    }

    .contact-card a:hover {
        color: #0056b3;
        text-decoration: underline;
    }
</style>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

        
    </main>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>