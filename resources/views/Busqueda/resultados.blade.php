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
                    name="q" 
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
                <a href="#" class="see-all">Ver todas las noticias <i class="fas fa-arrow-right"></i></a>
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
                
                <!-- Más tarjetas de noticias... -->
                
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
                <a href="#" class="see-all">Ver todos los videos <i class="fas fa-arrow-right"></i></a>
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
                
                <!-- Más tarjetas de videos... -->
            </div>
        </div>
        
        <!-- Sección de Encuestas -->
        <div class="results-section" id="encuestas">
            <div class="section-header">
                <h2 class="section-title">Resultados en Encuestas</h2>
                <a href="#" class="see-all">Ver todas las encuestas <i class="fas fa-arrow-right"></i></a>
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
                
                <!-- Más tarjetas de encuestas... -->
            </div>
        </div>
    </div>
    
    <script>
        // Funcionalidad para cambiar entre pestañas
        document.querySelectorAll('.search-tab').forEach(tab => {
            tab.addEventListener('click', () => {
                // Remover clase active de todas las pestañas y secciones
                document.querySelectorAll('.search-tab').forEach(t => t.classList.remove('active'));
                document.querySelectorAll('.results-section').forEach(s => s.classList.remove('active'));
                
                // Añadir clase active a la pestaña clickeada
                tab.classList.add('active');
                
                // Mostrar la sección correspondiente
                const tabId = tab.getAttribute('data-tab');
                document.getElementById(tabId).classList.add('active');
            });
        });

        // Enfocar automáticamente el campo de búsqueda al cargar la página
        document.querySelector('.search-input')?.focus();
    </script>
</body>
</html>