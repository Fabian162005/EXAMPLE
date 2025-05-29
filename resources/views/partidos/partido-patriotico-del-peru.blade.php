<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partido Patriotico del Peru</title>
       <!-- Favicon / Logo -->
    <link rel="icon" href="{{ asset('images/logogpcanal.jpg') }}" type="image/jpeg">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        /* Animaciones personalizadas */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        .floating {
            animation: float 3s ease-in-out infinite;
        }
        
        .hover-scale {
            transition: transform 0.3s ease;
        }
        
        .hover-scale:hover {
            transform: scale(1.05);
        }
        
        .logo-img {
            transition: transform 0.3s ease;
            max-height: 120px;
        }
        
        .logo-img:hover {
            transform: rotate(-5deg);
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }
        
        /* Estilo para el menú activo */
        .nav-link.active {
            color:rgb(247, 119, 0);
            font-weight: 600;
            border-bottom: 2px solid rgb(255, 122, 14);
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Header -->
<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Botón de regreso a la izquierda -->
        <a href="/" class="flex items-center text-red-600 hover:text-red-800 transition-colors animate__animated animate__fadeIn">
            <i class="fas fa-arrow-left mr-2 text-xl"></i>
            <span class="font-medium">Inicio</span>
        </a>
        
        <!-- Logo movido a la derecha -->
        <div class="logo-container animate__animated animate__fadeIn">
        <img src="{{ asset('imagenes/image28.png') }}" alt="Logo Acción Popular" class="logo-img">
        </div>
        
        <!-- Menú de navegación -->
        <nav class="hidden md:flex space-x-8">
            <a href="#" class="nav-link active text-gray-700 hover:text-red-600 transition-colors font-medium py-2">Inicio</a>
            <a href="#" class="nav-link text-gray-700 hover:text-red-600 transition-colors font-medium py-2">Historia</a>
            <a href="#" class="nav-link text-gray-700 hover:text-red-600 transition-colors font-medium py-2">Ideología</a>
            <a href="#" class="nav-link text-gray-700 hover:text-red-600 transition-colors font-medium py-2">Logros</a>
            <a href="#" class="nav-link text-gray-700 hover:text-red-600 transition-colors font-medium py-2">Contacto</a>
        </nav>
        
        <!-- Botón móvil -->
        <button class="md:hidden text-gray-700 ml-auto mr-4" id="mobile-menu-button">
            <i class="fas fa-bars text-2xl"></i>
        </button>
    </div>
    
    <!-- Menú móvil -->
    <div class="md:hidden hidden bg-white py-4 px-4 border-t" id="mobile-menu">
        <div class="flex flex-col space-y-3">
            <a href="#" class="nav-link active text-gray-700 hover:text-red-600 transition-colors font-medium py-2">Inicio</a>
            <a href="#" class="nav-link text-gray-700 hover:text-red-600 transition-colors font-medium py-2">Historia</a>
            <a href="#" class="nav-link text-gray-700 hover:text-red-600 transition-colors font-medium py-2">Ideología</a>
            <a href="#" class="nav-link text-gray-700 hover:text-red-600 transition-colors font-medium py-2">Logros</a>
            <a href="#" class="nav-link text-gray-700 hover:text-red-600 transition-colors font-medium py-2">Contacto</a>
        </div>
    </div>
</header>


<!-- Contenido principal -->
<main>
    <!-- Hero Section - Colores patrios (rojo y blanco) -->
    <section class="py-20 bg-gradient-to-r from-red-600 to-white text-gray-800">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate__animated animate__fadeInDown">Partido Patriótico del Perú</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto animate__animated animate__fadeIn animate__delay-1s">
                Partido político nacionalista fundado en 2020. Promueve la soberanía nacional, defensa de los recursos naturales y justicia social.
            </p>
        </div>
    </section>
    
    <!-- Historia del Partido -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Historia del Partido Patriótico</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Trayectoria de defensa de los intereses nacionales</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Fundación -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale">
                    <div class="text-red-600 mb-4 text-4xl floating">
                        <i class="fas fa-flag"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Fundación en 2020</h3>
                    <p class="text-gray-600">Creado el 28 de julio de 2020 (Fiestas Patrias) por un grupo de exmilitares, intelectuales y líderes sociales para defender la soberanía nacional.</p>
                </div>
                
                <!-- Ideología -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                    <div class="text-red-600 mb-4 text-4xl floating">
                        <i class="fas fa-fist-raised"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Nacionalismo Patriótico</h3>
                    <p class="text-gray-600">Doctrina que combina defensa de recursos naturales, antiimperialismo y desarrollo con justicia social para las mayorías.</p>
                </div>
                
                <!-- Participación -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale" style="animation-delay: 0.4s;">
                    <div class="text-red-600 mb-4 text-4xl floating">
                        <i class="fas fa-vote-yea"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Participación Electoral</h3>
                    <p class="text-gray-600">En proceso de consolidación. Participó en elecciones regionales 2022 obteniendo representación en algunas provincias mineras.</p> 
                </div>
            </div>
        </div>
    </section>
    
    <!-- Liderazgo Actual -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Liderazgo Actual (2024)</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Principales dirigentes del partido</p>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Presidente Actual -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-red-600 mb-4 text-4xl floating">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Gral. (r) Daniel Urresti</h3>
                    <p class="text-gray-600 mb-2 font-medium">Presidente Nacional</p>
                    <p class="text-gray-600">Exministro del Interior y excandidato presidencial. Líder visible del nacionalismo patriótico con discurso de mano dura contra la delincuencia.</p>
                </div>
                
                <!-- Estructura -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                    <div class="text-red-600 mb-4 text-4xl floating">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Equipo Directivo</h3>
                    <p class="text-gray-600 mb-2 font-medium">Liderazgo compartido</p>
                    <p class="text-gray-600">Incluye a excongresistas nacionalistas, líderes sindicales mineros y exoficiales de las FFAA comprometidos con la defensa nacional.</p>
                </div>
            </div>

            <!-- Nota histórica -->
            <div class="mt-12 text-center text-gray-500">
                <p>Lema del partido: <span class="font-medium">"Perú primero, soberanía y justicia social"</span></p>
            </div>
        </div>
    </section>
    
    <!-- Ideología y Principios -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Ideología y Principios</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Bases doctrinarias del partido</p>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Soberanía -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-red-600 mb-2 text-xl">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-1">Soberanía Nacional</h3>
                    <p class="text-gray-600 text-sm mb-4">Defensa irrestricta de territorio, recursos naturales e independencia política frente a potencias extranjeras.</p>
                </div>
                
                <!-- Recursos -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.1s;">
                    <div class="text-red-600 mb-2 text-xl">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-1">Recursos Naturales</h3>
                    <p class="text-gray-600 text-sm mb-4">Nacionalización de sectores estratégicos y renegociación de contratos con multinacionales.</p>
                </div>
                
                <!-- Social -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                    <div class="text-red-600 mb-2 text-xl">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-1">Justicia Social</h3>
                    <p class="text-gray-600 text-sm mb-4">Redistribución de riqueza mediante políticas sociales financiadas con regalías mineras.</p>
                </div>
                
                <!-- Seguridad -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.3s;">
                    <div class="text-red-600 mb-2 text-xl">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-1">Seguridad Nacional</h3>
                    <p class="text-gray-600 text-sm mb-4">Fortalecimiento de FFAA y policía para combatir narcotráfico, terrorismo y delincuencia.</p>
                </div>
                
                <!-- Economía -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.4s;">
                    <div class="text-red-600 mb-2 text-xl">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-1">Industrialización</h3>
                    <p class="text-gray-600 text-sm mb-4">Procesamiento nacional de materias primas para agregar valor antes de exportación.</p>
                </div>
                
                <!-- Cultura -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.5s;">
                    <div class="text-red-600 mb-2 text-xl">
                        <i class="fas fa-monument"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-1">Identidad Nacional</h3>
                    <p class="text-gray-600 text-sm mb-4">Revaloración de historia patria, héroes nacionales y cultura peruana en educación.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Posición Actual -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Posición Actual y Objetivos</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Enfoques y propuestas para el Perú actual</p>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Soberanía -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-red-600 mb-4 text-4xl floating">
                        <i class="fas fa-fist-raised"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Defensa de la Soberanía</h3>
                    <p class="text-gray-600">Revisión de tratados internacionales, control estatal de recursos estratégicos y fortalecimiento de fronteras.</p>
                </div>
                
                <!-- Social -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                    <div class="text-red-600 mb-4 text-4xl floating">
                        <i class="fas fa-balance-scale-right"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Justicia Económica</h3>
                    <p class="text-gray-600">Mayor participación del Estado en ganancias mineras para financiar programas sociales y desarrollo regional.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Logros y Contribuciones -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Acciones Relevantes</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Principales iniciativas del partido</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Movilizaciones -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="h-48 bg-red-50 flex items-center justify-center"> <!-- Fondo rojo claro -->
                        <i class="fas fa-people-carry text-5xl text-red-600"></i> <!-- Icono rojo -->
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <i class="far fa-calendar-alt mr-2"></i> 2021-2024
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Movilizaciones Patrióticas</h3>
                        <p class="text-gray-600 mb-4">Organización de protestas contra concesiones mineras consideradas lesivas a la soberanía nacional.</p>
                    </div>
                </div>
                
                <!-- Propuestas -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                    <div class="h-48 bg-red-50 flex items-center justify-center"> <!-- Fondo rojo claro -->
                        <i class="fas fa-file-contract text-5xl text-red-600"></i> <!-- Icono rojo -->
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <i class="far fa-calendar-alt mr-2"></i> 2022-actualidad
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Propuestas Legislativas</h3>
                        <p class="text-gray-600 mb-4">Presentación de proyectos para reformar ley minera, aumentar regalías y fortalecer control estatal.</p>
                    </div>
                </div>
                
                <!-- Regional -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.4s;">
                    <div class="h-48 bg-red-50 flex items-center justify-center"> <!-- Fondo rojo claro -->
                        <i class="fas fa-map-marked-alt text-5xl text-red-600"></i> <!-- Icono rojo -->
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <i class="far fa-calendar-alt mr-2"></i> 2022-2023
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Influencia Regional</h3>
                        <p class="text-gray-600 mb-4">Ganaron alcaldías en provincias mineras como Cerro de Pasco y Espinar con discurso nacionalista.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

    <!-- Footer -->
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
                <a href="#" class="hover:text-white">Políticas de Privacidad</a> | 
                <a href="#" class="hover:text-white">Términos de Servicio</a>
            </p>
        </div>
    </div>
</footer>
    
    <script>
        // Animaciones al aparecer en el viewport
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });
        
        // Menú móvil
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Cambiar clase activa en navegación
        const navLinks = document.querySelectorAll('.nav-link');
        
        navLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                
                navLinks.forEach(l => l.classList.remove('active'));
                link.classList.add('active');
                
                if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                }
            });
        });
    </script>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
    
</body>
</html>