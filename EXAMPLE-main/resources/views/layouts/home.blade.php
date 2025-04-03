@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-light shadow fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('storage/images/logogpcanal.jpg') }}" alt="Logo" width="40" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="#noticias">Noticias</a></li>
                <li class="nav-item"><a class="nav-link" href="#encuestas">Encuestas</a></li>
                <li class="nav-item"><a class="nav-link" href="#redes">Redes</a></li>
                <li class="nav-item"><a class="nav-link" href="#contacto">Contáctanos</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Espaciado para evitar solapamiento con el navbar fijo -->
<div style="height: 80px;"></div>

<!-- Título Principal -->
<div class="container mt-4">
    <h2 class="text-center fw-bold">El Mejor Lugar para Mantenerte Informado</h2>
</div>

<!-- Slider -->
<div id="carouselExample" class="carousel slide mt-3" data-bs-ride="carousel">
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
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- Sección Noticias -->
<section id="noticias" class="container mt-4">
    <h2 class="text-center fw-bold">Noticias</h2>
    <div class="row justify-content-center">
        <div class="col-md-4"><div class="card p-4 text-center">Noticia 1</div></div>
        <div class="col-md-4"><div class="card p-4 text-center">Noticia 2</div></div>
        <div class="col-md-4"><div class="card p-4 text-center">Noticia 3</div></div>
    </div>
</section>

<!-- Sección Encuestas -->
<section id="encuestas" class="container mt-4">
    <h2 class="text-center fw-bold">Encuestas</h2>
    <div class="row justify-content-center">
        <div class="col-md-6"><div class="card p-4 text-center">Presidenciales</div></div>
        <div class="col-md-6"><div class="card p-4 text-center">Piura</div></div>
    </div>
</section>

<!-- Sección Redes Sociales -->
<section id="redes" class="container mt-4 text-center">
    <h2 class="fw-bold">Síguenos en:</h2>
    <div class="social-links">
        <a href="#">INSTAGRAM</a> | <a href="#">FACEBOOK</a> | <a href="#">YOUTUBE</a> | 
        <a href="#">TWITCH</a> | <a href="#">TIKTOK</a> | <a href="#">X (TWITTER)</a>
    </div>
</section>

<!-- Sección Contacto -->
<section id="contacto" class="container mt-4 text-center">
    <h2 class="fw-bold">Contáctanos</h2>
    <p>Correo: info@noticias.com</p>
    <p>Teléfono: +51 987 654 321</p>
</section>

@endsection
