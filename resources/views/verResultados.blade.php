<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GP CANAL - Resultados de Encuestas</title>
       <!-- Favicon / Logo -->
    <link rel="icon" href="{{ asset('images/logogpcanal.jpg') }}" type="image/jpeg">

    <link rel="stylesheet" href="{{ asset('css/verResultados.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header class="main-header">
        <a href="{{ route('app') }}" class="btn-back-home">
            <i class="fas fa-arrow-left"></i> Volver al Inicio
        </a>
        <div class="header-content">
            <h1 class="main-title">
                <span class="highlight">GP CANAL</span> - Resultados de Encuestas
            </h1>
            <p class="subtitle">Visualización profesional de datos recopilados</p>
        </div>
    </header>

    <main class="content-wrapper">
        <div id="resultados-container" class="resultados-grid">
            @foreach ($imagenes as $imagen)
                <div class="resultado-card">
                    <div class="card-header">
                        <h3 class="titulo-imagen">{{ $imagen->titulo }}</h3>
                        <div class="card-actions">
                            <button class="action-btn download-btn" title="Descargar" data-title="{{ $imagen->titulo }}" data-image="{{ asset('storage/' . $imagen->ruta) }}">
                                <i class="fas fa-download"></i>
                            </button>
                            <button class="action-btn expand-btn" title="Ampliar">
                                <i class="fas fa-expand"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-image-container">
                        <img src="{{ asset('storage/' . $imagen->ruta) }}" alt="{{ $imagen->titulo }}" class="resultado-imagen">
                        <div class="image-overlay">
                            <button class="zoom-btn">
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-footer">
                        <span class="date"><i class="far fa-calendar-alt"></i> {{ date('d/m/Y', strtotime($imagen->created_at)) }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <!-- Modal para imagen ampliada -->
    <div class="modal" id="imageModal">
        <span class="close-modal">&times;</span>
        <img class="modal-content" id="modalImage">
        <div class="modal-caption"></div>
    </div>

    <!-- Notificación de descarga -->
    <div class="notification" id="downloadNotification">
        <i class="icon fas fa-check-circle"></i>
        <span class="notification-message">Descarga completada</span>
    </div>

    <script src="{{ asset('js/verResultados.js') }}"></script>
</body>
<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Footer con Redes Sociales Destacadas -->
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


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!--Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
</html>