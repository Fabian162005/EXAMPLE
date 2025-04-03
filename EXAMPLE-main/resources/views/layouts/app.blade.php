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

<!-- Estilo 3D ULTRA PRO -->
<style>
.contacto-3d {
  background: linear-gradient(135deg, #1b1b2f, #16213e);
  padding: 80px 5%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.container {
  width: 100%;
  max-width: 1200px;
}

.card-3d {
  display: flex;
  gap: 40px;
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(20px);
  border-radius: 30px;
  padding: 50px;
  box-shadow: 0 40px 80px rgba(0, 0, 0, 0.5);
  transition: transform 0.6s ease, box-shadow 0.6s ease;
  transform-style: preserve-3d;
  perspective: 1000px;
  animation: float 5s ease-in-out infinite;
}

.card-3d:hover {
  transform: rotateY(1deg) rotateX(1deg) scale(1.01);
  box-shadow: 0 60px 100px rgba(255, 255, 255, 0.1);
}

.columna {
  flex: 1 1 400px;
  color: #ffffff;
  text-shadow: 0 1px 2px #000;
}

.columna h3 {
  font-size: 1.8rem;
  color: #FFD700;
  margin-bottom: 20px;
  border-bottom: 2px solid #FFD700;
  padding-bottom: 10px;
}

.columna p {
  margin: 12px 0;
  font-size: 1.1rem;
}

.columna a {
  color: #fff;
  text-decoration: none;
  transition: 0.3s ease;
}

.columna a:hover {
  color: #FFD700;
  text-shadow: 0 0 10px #FFD700;
}

.redes {
  display: flex;
  gap: 25px;
  font-size: 2.2rem;
  margin-top: 20px;
}

.redes a {
  color: #fff;
  transition: transform 0.4s ease, color 0.4s ease;
}

.redes a:hover {
  color: #00fff7;
  transform: scale(1.3) rotate(5deg);
}

/* Animación flotante */
@keyframes float {
  0%, 100% {
    transform: translateY(0) rotateX(0deg) rotateY(0deg);
  }
  50% {
    transform: translateY(-10px) rotateX(1deg) rotateY(1deg);
  }
}
</style>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</html>
