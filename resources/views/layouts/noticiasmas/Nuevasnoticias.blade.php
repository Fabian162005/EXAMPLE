<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $noticia->titulo }} - GP Canal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin/noticiaid.css') }}" />
</head>
<body>
    <a href="{{ route('app') }}" class="btn-back-home">              
        <i class="fas fa-arrow-left"></i> Volver al Inicio
    </a>    

    <section class="videos-section-3d">
            <div class="section-header-3d">
                <h1 class="section-title-3d">{{ $noticia->titulo }}</h1>
            </div>

        <div class="media-container">
            @if($noticia->foto)
                <div class="media-item">
                    <img src="{{ asset('storage/' . $noticia->foto) }}" alt="Foto de la noticia">
                </div>
            @endif
        </div>

        <div class="noticia-container">
            <div class="noticia-meta">
                <span><i class="far fa-calendar-alt"></i> {{ $noticia->created_at->format('d M Y - H:i') }}</span>
                <span><i class="fas fa-user-edit"></i> {{ $noticia->autor ?? 'Redacción GP Canal' }}</span>
            </div>

            @if($noticia->imagen)
                <img src="{{ asset('storage/' . $noticia->imagen) }}" alt="{{ $noticia->titulo }}" class="noticia-image">
            @endif

            <div class="noticia-content">
                {!! nl2br(e($noticia->descripcion)) !!}
            </div>
        </div>

        @if($noticia->video)
            <div class="video-container">
                @if(str_ends_with($noticia->video, '.mp4'))
                    <video controls>
                        <source src="{{ asset('storage/' . $noticia->video) }}" type="video/mp4">
                        Tu navegador no soporta la reproducción de video.
                    </video>
                @else
                    <iframe 
                        src="{{ $noticia->video }}" 
                        frameborder="0" allowfullscreen>
                    </iframe>
                @endif
            </div>
        @endif
    </section>

    <!-- Sección de Contacto -->
    <section id="contacto" class="contacto-3d">
        <div class="container">
            <div class="card-3d">
                <!-- Contacto -->
                <div class="columna">
                    <h3>📩 Contáctanos</h3>
                    <p><i class="bi bi-envelope-fill"></i> <a href="mailto:info@noticias.com">info@noticias.com</a></p>
                    <p><i class="bi bi-telephone-fill"></i> <a href="tel:+51987654321">+51 987 654 321</a></p>
                    <p><i class="bi bi-geo-alt-fill"></i> <a href="#" target="_blank">Av. Principal 123, Lima, Perú</a></p>
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
                        <a href="#" class="bi bi-tiktok" title="TikTok"></a>
                    </div>
                    
                    <h3 style="margin-top: 2.5rem;">📰 Suscríbete</h3>
                    <p>Recibe las últimas noticias directamente en tu correo</p>
                    <form class="newsletter-form">
                        <div style="display: flex; gap: 0.5rem; margin-top: 1rem;">
                            <input type="email" placeholder="Tu correo electrónico" style="flex: 1; padding: 0.8rem; border-radius: 8px; border: none; font-size: 1rem;">
                            <button type="submit" style="background: var(--secondary-color); color: white; border: none; padding: 0 1.5rem; border-radius: 8px; cursor: pointer; font-weight: 600; transition: var(--transition);">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/victor@1.1.0/build/victor.min.js"></script>
    <script src="{{ asset('js/scroll-efect.js') }}"></script>
    <script src='https://unpkg.co/gsap@3/dist/gsap.min.js'></script>
    <script src='https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js'></script>
    <script type="module" src="{{ asset('js/candidatos.js') }}"></script> 
    <script type="module" src="{{ asset('js/functions.js') }}"></script> 
    <script type="module" src="{{ asset('js/scriptENC.js') }}"></script> 
    <script type="module" src="{{ asset('js/noticias.js') }}"></script> 
    <script type="module" src="{{ asset('js/admin.js') }}"></script>
    <script type="module" src="{{ asset('js/adminmasnoticias.js') }}"></script>
</body>
</html>
