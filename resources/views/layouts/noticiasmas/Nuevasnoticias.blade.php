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
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --text-color: #333;
            --text-light: #6c757d;
            --border-radius: 12px;
            --box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }
        
        body {
            font-family: 'Open Sans', sans-serif;
            line-height: 1.8;
            color: var(--text-color);
            background-color: var(--light-color);
            margin: 0;
            padding: 0;
            font-size: 18px;
        }
        
        h1, h2, h3, h4 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }
        
        .videos-section-3d {
            max-width: 1200px;
            margin: 0 auto;
            padding: 3rem 1.5rem;
        }
        
        .section-header-3d {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
            padding-bottom: 2rem;
        }
        
        .btn-back-home {
            position: absolute;
            left: 0;
            top: 0;
            padding: 0.8rem 1.5rem;
            background-color: var(--secondary-color);
            color: white;
            text-decoration: none;
            border-radius: var(--border-radius);
            font-weight: 600;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.8rem;
            font-size: 1.1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .btn-back-home:hover {
            background-color: var(--primary-color);
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        
        .section-title-3d {
            font-size: 2.8rem;
            color: var(--primary-color);
            margin: 2rem 0 1.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 3px solid var(--secondary-color);
            display: inline-block;
            line-height: 1.3;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        
        .noticia-container {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            padding: 3rem;
            margin-bottom: 4rem;
            border: 1px solid rgba(0,0,0,0.05);
        }
        
        .noticia-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            color: var(--text-light);
            font-size: 1.1rem;
            border-bottom: 1px solid #eee;
            padding-bottom: 1.5rem;
        }
        
        .noticia-meta i {
            margin-right: 0.5rem;
            font-size: 1.2rem;
        }
        
        .noticia-content {
            font-size: 1.2rem;
            line-height: 1.9;
            color: var(--dark-color);
        }
        
        .noticia-content p {
            margin-bottom: 2rem;
        }
        
        .noticia-content strong {
            color: var(--primary-color);
        }
        
        .noticia-image {
            width: 100%;
            height: auto;
            border-radius: var(--border-radius);
            margin: 2.5rem 0;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            max-height: 600px;
            object-fit: cover;
        }
        
        .noticia-image:hover {
            transform: scale(1.01);
        }
        
        /* Sección de contacto */
        .contacto-3d {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1a2a3a 100%);
            color: white;
            padding: 4rem 0;
            margin-top: 3rem;
        }
        
        .contacto-3d .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }
        
        .card-3d {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 3rem;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: var(--border-radius);
            padding: 3rem;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .columna {
            flex: 1;
            min-width: 300px;
        }
        
        .contacto-3d h3 {
            font-size: 1.8rem;
            margin-bottom: 2rem;
            color: white;
            position: relative;
            display: inline-block;
        }
        
        .contacto-3d h3::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background-color: var(--secondary-color);
            border-radius: 2px;
        }
        
        .contacto-3d p {
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            font-size: 1.1rem;
        }
        
        .contacto-3d i {
            font-size: 1.4rem;
            min-width: 30px;
        }
        
        .contacto-3d a {
            color: white;
            text-decoration: none;
            transition: var(--transition);
        }
        
        .contacto-3d a:hover {
            color: var(--secondary-color);
            text-decoration: underline;
        }
        
        .redes {
            display: flex;
            gap: 1.5rem;
            margin-top: 2rem;
            flex-wrap: wrap;
        }
        
        .redes a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            font-size: 1.5rem;
            transition: var(--transition);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .redes a:hover {
            background: var(--secondary-color);
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            border-color: transparent;
        }
        
        /* Efectos especiales */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .noticia-container {
            animation: fadeIn 0.6s ease-out forwards;
        }
        
        .card-3d {
            animation: fadeIn 0.8s ease-out 0.2s both;
        }
        
        @media (max-width: 992px) {
            .section-title-3d {
                font-size: 2.4rem;
            }
            
            .noticia-container {
                padding: 2rem;
            }
        }
        
        @media (max-width: 768px) {
            body {
                font-size: 16px;
            }
            
            .videos-section-3d {
                padding: 2rem 1rem;
            }
            
            .section-title-3d {
                font-size: 2rem;
                margin-top: 3.5rem;
                padding-bottom: 1rem;
            }
            
            .btn-back-home {
                position: relative;
                margin-bottom: 1.5rem;
                display: inline-flex;
                left: auto;
                top: auto;
            }
            
            .noticia-container {
                padding: 1.5rem;
            }
            
            .noticia-content {
                font-size: 1.1rem;
            }
            
            .card-3d {
                flex-direction: column;
                gap: 2rem;
                padding: 2rem;
            }
            
            .contacto-3d h3 {
                font-size: 1.6rem;
            }
        }
    </style>
</head>
<body>
    <section class="videos-section-3d">
        <div class="section-header-3d">
            <a href="{{ route('app') }}" class="btn-back-home">
                <i class="fas fa-arrow-left"></i> Volver al Inicio
            </a>
            <h1 class="section-title-3d">{{ $noticia->titulo }}</h1>
        </div>

        <div class="noticia-container">
            <div class="noticia-meta">
                <span><i class="far fa-calendar-alt"></i> {{ $noticia->created_at->format('d M Y - H:i') }}</span>
                <span><i class="fas fa-user-edit"></i> {{ $noticia->autor ?? 'Redacción GP Canal' }}</span>
                <span><i class="far fa-eye"></i> 1,245 vistas</span>
            </div>
            
            @if($noticia->imagen)
            <img src="{{ asset('storage/' . $noticia->imagen) }}" alt="{{ $noticia->titulo }}" class="noticia-image">
            @endif
            
            <div class="noticia-content">
                {!! nl2br(e($noticia->descripcion)) !!}
            </div>
        </div>
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
    
    <script>
        // Animación suave al cargar
        document.addEventListener('DOMContentLoaded', function() {
            // Efecto de aparición progresiva
            gsap.from(".noticia-container", {
                duration: 1,
                y: 50,
                opacity: 0,
                ease: "power3.out"
            });
            
            // Efecto para la sección de contacto
            gsap.from(".card-3d", {
                scrollTrigger: {
                    trigger: ".contacto-3d",
                    start: "top 80%",
                    toggleActions: "play none none none"
                },
                duration: 1,
                y: 50,
                opacity: 0,
                ease: "back.out(1.2)"
            });
        });
    </script>
</body>
</html>