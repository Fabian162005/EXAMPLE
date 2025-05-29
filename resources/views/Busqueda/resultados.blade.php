<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados de Búsqueda - {{ $query }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/Busqueda.css">
</head>
<body>
    <div class="search-container">
        <!-- Barra superior con botón de regreso y buscador -->
        <div class="search-top-bar">
            <a href="{{ url('/') }}" class="back-button">
                <i class="fas fa-arrow-left"></i> Regresar
            </a>
            
            <form action="/buscar" method="GET" class="search-box-container">
                <input 
                    type="text" 
                    name="query"
                    class="search-input" 
                    placeholder="Escribe una nueva búsqueda..." 
                    value="{{ $query }}"
                    required
                >
                <button type="submit" class="search-button">
                    <i class="fas fa-search"></i> Buscar
                </button>
            </form>
        </div>
        
        <div class="search-header">
            <h1><i class="fas fa-search"></i> Resultados para: <span class="search-query">"{{ $query }}"</span></h1>
            <p class="results-count">{{ count($resultados) }} resultados encontrados</p>
        </div>
        
        <div class="search-tabs">
            <div class="search-tab active" data-tab="noticias">
                <i class="fas fa-newspaper"></i> Noticias
                <span class="badge">15</span>
            </div>
            <div class="search-tab" data-tab="videos">
                <i class="fas fa-video"></i> Videos
                <span class="badge">8</span>
            </div>
            <div class="search-tab" data-tab="encuestas">
                <i class="fas fa-poll"></i> Encuestas
                <span class="badge">3</span>
            </div>
        </div>
        
        <!-- Sección de Noticias -->
        <div class="results-section active" id="noticias">
            <div class="section-header">
                <h2 class="section-title">Resultados en Noticias</h2>
                <a href="{{ url('/noticias') }}" class="see-all">Ver todas las noticias <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <div class="results-grid">
                <div class="result-card">
                    <div class="card-image" style="background-image: url('https://via.placeholder.com/400x200')">
                        <span class="card-type"><i class="fas fa-newspaper"></i> Noticia</span>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Título de la noticia relacionada con "{{ $query }}"</h3>
                        <p class="card-description">Descripción breve del contenido de la noticia que incluye el término buscado...</p>
                        <div class="card-footer">
                            <span class="card-date"><i class="far fa-calendar-alt"></i> 15 May 2023</span>
                            <a href="#" class="card-link">Leer más <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="no-results" style="display: none;">
                    <i class="far fa-frown"></i>
                    <h3>No se encontraron noticias</h3>
                    <p>Intenta con otros términos de búsqueda o revisa la ortografía.</p>
                </div>
            </div>
        </div>
        
        <!-- Sección de Videos -->
        <div class="results-section" id="videos">
            <div class="section-header">
                <h2 class="section-title">Resultados en Videos</h2>
                <a href="{{ url('/videos') }}" class="see-all">Ver todos los videos <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <div class="results-grid">
                <div class="result-card">
                    <div class="card-image" style="background-image: url('https://via.placeholder.com/400x200')">
                        <span class="card-type"><i class="fas fa-video"></i> Video</span>
                        <i class="fas fa-play-circle play-icon"></i>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Video sobre "{{ $query }}" explicado por expertos</h3>
                        <p class="card-description">Breve descripción del contenido del video que menciona el término buscado...</p>
                        <div class="card-footer">
                            <span class="card-date"><i class="far fa-calendar-alt"></i> 10 Abr 2023</span>
                            <a href="#" class="card-link">Ver video <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Sección de Encuestas -->
        <div class="results-section" id="encuestas">
            <div class="section-header">
                <h2 class="section-title">Resultados en Encuestas</h2>
            </div>
            
            <div class="results-grid">
                <div class="result-card">
                    <div class="card-image" style="background-image: url('https://via.placeholder.com/400x200'); background-color: #3498db;">
                        <span class="card-type"><i class="fas fa-poll"></i> Encuesta</span>
                        <i class="fas fa-chart-pie chart-icon"></i>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Encuesta sobre "{{ $query }}" - Mayo 2023</h3>
                        <p class="card-description">Resultados recientes de la encuesta nacional sobre este tema...</p>
                        <div class="card-footer">
                            <span class="card-date"><i class="far fa-calendar-alt"></i> 05 May 2023</span>
                            <a href="#" class="card-link">Participar <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
    </div>
  <footer id="contacto" class="bg-gray-900 text-white pt-12 pb-6">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8 mb-8">
            
            <!-- Columna 1: Logo y descripción -->
            <div class="text-center md:text-left">
                <div class="flex justify-center md:justify-start mb-4">
                    <img src="{{ asset('images/logogpcanal.jpg') }}" alt="Logo Grupo Paladines" class="h-20">
                </div>
                <p class="text-gray-300 text-sm mb-4">
                    Líderes en desarrollo social y transparencia política en el Perú.
                </p>
            </div>
            
            <!-- Columna 2: Redes Sociales como Enlaces Rápidos -->
            <div>
                <h3 class="text-lg font-bold mb-4 text-white border-b border-gray-700 pb-2">Nuestras Redes</h3>
                <div class="grid grid-cols-2 gap-4">
                    <a href="https://www.facebook.com/share/1ET24v1wFc/" target="_blank" class="bg-blue-600 hover:bg-blue-700 text-white rounded-lg p-3 transition-colors flex items-center">
                        <i class="fab fa-facebook-f mr-2"></i> Facebook
                    </a>
                    <a href="https://www.tiktok.com/@gpcanaloficial?_t=ZM-8wPZeB7k0SU&_r=1" target="_blank" class="bg-black hover:bg-gray-800 text-white rounded-lg p-3 transition-colors flex items-center">
                        <i class="fab fa-tiktok mr-2"></i> TikTok
                    </a>
                    <a href="https://x.com/G_P_Canal?t=1WN73yiRWQq5ipmpxifVrg&s=09" target="_blank" class="bg-gradient-to-r from-pink-500 to-purple-600 hover:to-purple-700 text-white rounded-lg p-3 transition-colors flex items-center">
                        <i class="fab fa-twitter mr-2"></i> Twitter
                    </a>
                    <a href="https://youtube.com/@gpcanal9019?si=9R2s8ia-5cYN2Qts" target="_blank" class="bg-red-600 hover:bg-red-700 text-white rounded-lg p-3 transition-colors flex items-center">
                        <i class="fab fa-youtube mr-2"></i> YouTube
                    </a>
                </div>
            </div>
            
            <!-- Columna 3: Contacto -->
            <div>
                <h3 class="text-lg font-bold mb-4 text-white border-b border-gray-700 pb-2">Contacto Directo</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <i class="fas fa-envelope mr-3 text-orange-400 mt-1"></i>
                        <div>
                            <p class="text-gray-300 text-sm font-medium">Escríbenos</p>
                            <a href="mailto:contacto@grupopaladines.pe" class="text-white hover:text-orange-300 text-sm">grupopaladines@gmail.com</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="border-t border-gray-800 pt-6 text-center">
            <p class="text-gray-400 text-xs">
                © 2025 Grupo Paladines. Todos los derechos reservados. 
            </p>
        </div>
    </div>
</footer>
    <script>
        document.querySelectorAll('.search-tab').forEach(tab => {
            tab.addEventListener('click', () => {
                document.querySelectorAll('.search-tab').forEach(t => t.classList.remove('active'));
                document.querySelectorAll('.results-section').forEach(s => s.classList.remove('active'));
                
                tab.classList.add('active');
                const tabId = tab.getAttribute('data-tab');
                document.getElementById(tabId).classList.add('active');
            });
        });

        document.querySelector('.search-input')?.focus();
    </script>
</body>
</html>