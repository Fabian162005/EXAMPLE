<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acción Popular</title>
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
            color: #EF4444;
            font-weight: 600;
            border-bottom: 2px solid #DC2626;
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
            <img src="{{ asset('imagenes/image1.png') }}" alt="Logo Acción Popular" class="logo-img">
        </div>
        
        <!-- Menú de navegación -->
        <nav class="hidden md:flex space-x-8">
            <a href="#inicio" class="nav-link active text-gray-700 hover:text-red-600 transition-colors font-medium py-2">Inicio</a>
            <a href="#historia" class="nav-link text-gray-700 hover:text-red-600 transition-colors font-medium py-2">Historia</a>
            <a href="#ideologia" class="nav-link text-gray-700 hover:text-red-600 transition-colors font-medium py-2">Ideología</a>
            <a href="#logros" class="nav-link text-gray-700 hover:text-red-600 transition-colors font-medium py-2">Logros</a>
            <a href="#contacto" class="nav-link text-gray-700 hover:text-red-600 transition-colors font-medium py-2">Contacto</a>
        </nav>
        
        <!-- Botón móvil -->
        <button class="md:hidden text-gray-700 ml-auto mr-4" id="mobile-menu-button">
            <i class="fas fa-bars text-2xl"></i>
        </button>
    </div>
    
    <!-- Menú móvil -->
    <div class="md:hidden hidden bg-white py-4 px-4 border-t" id="mobile-menu">
        <div class="flex flex-col space-y-3">
            <a href="#inicio" class="nav-link active text-gray-700 hover:text-red-600 transition-colors font-medium py-2">Inicio</a>
            <a href="#historia" class="nav-link text-gray-700 hover:text-red-600 transition-colors font-medium py-2">Historia</a>
            <a href="#ideologia" class="nav-link text-gray-700 hover:text-red-600 transition-colors font-medium py-2">Ideología</a>
            <a href="#logros" class="nav-link text-gray-700 hover:text-red-600 transition-colors font-medium py-2">Logros</a>
            <a href="#contacto" class="nav-link text-gray-700 hover:text-red-600 transition-colors font-medium py-2">Contacto</a>
        </div>
    </div>
</header>

    <!-- Contenido principal -->
    <main>
        <!-- Hero Section -->
        <section id="inicio" class="py-20 bg-gradient-to-r from-red-600 to-red-800 text-white">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 animate__animated animate__fadeInDown">Acción Popular</h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto animate__animated animate__fadeIn animate__delay-1s">
                    Partido político peruano de centro-derecha fundado en 1956 por el arquitecto Fernando Belaúnde Terry.
                </p>
            </div>
        </section>
        
        <!-- Historia del Partido -->
        <section id="historia" class="py-16 bg-white pt-30">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Historia de Acción Popular</h2>
                <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Una trayectoria de servicio al Perú</p>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Fundación -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale">
                        <div class="text-red-500 mb-4 text-4xl floating">
                            <i class="fas fa-landmark"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Fundación en 1956</h3>
                        <p class="text-gray-600">Acción Popular fue fundado el 7 de julio de 1956 por el arquitecto Fernando Belaúnde Terry. Surgió como una alternativa moderna a los partidos tradicionales, proponiendo un enfoque desarrollista para el país.</p>
                    </div>
                    
                    <!-- Liderazgo de Belaúnde -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                        <div class="text-red-500 mb-4 text-4xl floating">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Liderazgo de Belaúnde</h3>
                        <p class="text-gray-600">Fernando Belaúnde Terry, su líder carismático, capturó el sentir de una población que buscaba cambios. Bajo su liderazgo, AP se consolidó como fuerza política importante y gobernó el Perú en dos periodos.</p>
                    </div>
                    
                    <!-- Transición Democrática -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale" style="animation-delay: 0.4s;">
                        <div class="text-red-500 mb-4 text-4xl floating">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Transición Democrática 2000-2001</h3>
                        <p class="text-gray-600">Tras la caída de Fujimori, Valentín Paniagua Corazao (AP) asumió la Presidencia Provisional (2000-2001), restableciendo la institucionalidad democrática y convocando elecciones transparentes.</p>
                    </div>
                </div>
            </div>
        </section>
        
<!-- Liderazgo Actual -->
<section id="liderazgo" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Liderazgo Actual</h2>
        <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Dirigentes que guían el partido hoy</p>
        
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Presidente Actual -->
            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                <div class="text-red-500 mb-4 text-4xl floating">
                    <i class="fas fa-user-tie"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Mesías Guevara Amasifuén</h3>
                <p class="text-gray-600 mb-2 font-medium">Presidente Nacional</p>
                <p class="text-gray-600">Actual presidente del partido Acción Popular. Abogado y político con experiencia en cargos públicos y representación popular.</p>
            </div>
            
            <!-- Vicepresidente Actual -->
            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                <div class="text-red-500 mb-4 text-4xl floating">
                    <i class="fas fa-user-tie"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Vicepresidencia</h3>
                <p class="text-gray-600 mb-2 font-medium">Estructura de liderazgo</p>
                <p class="text-gray-600">La información sobre los vicepresidentes del partido puede variar. Se recomienda consultar fuentes oficiales para datos actualizados.</p>
            </div>
        </div>

        <!-- Nota histórica -->
        <div class="mt-12 text-center text-gray-500">
            <p>Fundador histórico: <span class="font-medium">Arq. Fernando Belaúnde Terry</span> (1956-2002)</p>
        </div>
    </div>
</section>
        
        <!-- Ideología y Principios -->
        <section id="ideologia" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Ideología y Principios</h2>
                <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Bases filosóficas del partido</p>
                
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Democracia -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                        <h3 class="text-xl font-semibold mb-1">Democracia y Estado de Derecho</h3>
                        <p class="text-gray-600 text-sm mb-4">Defensa de las instituciones democráticas, separación de poderes y respeto a la Constitución y las leyes.</p>
                    </div>
                    
                    <!-- Descentralización -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.1s;">
                        <h3 class="text-xl font-semibold mb-1">Descentralización</h3>
                        <p class="text-gray-600 text-sm mb-4">Transferencia de poder político, administrativo y económico a gobiernos regionales y locales para desarrollo equitativo.</p>
                    </div>
                    
                    <!-- Desarrollo Social -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                        <h3 class="text-xl font-semibold mb-1">Desarrollo con Inclusión Social</h3>
                        <p class="text-gray-600 text-sm mb-4">Crecimiento económico con políticas que reduzcan desigualdades y mejoren condiciones de vida, especialmente para vulnerables.</p>
                    </div>
                    
                    <!-- Nacionalismo -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.3s;">
                        <h3 class="text-xl font-semibold mb-1">Nacionalismo Pragmático</h3>
                        <p class="text-gray-600 text-sm mb-4">Defensa de intereses nacionales con visión abierta al mundo y cooperación internacional.</p>
                    </div>
                    
                    <!-- Economía -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.4s;">
                        <h3 class="text-xl font-semibold mb-1">Economía Social de Mercado</h3>
                        <p class="text-gray-600 text-sm mb-4">Economía mixta con rol importante del mercado y participación estatal para corregir desigualdades.</p>
                    </div>
                    
                    <!-- Integración -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.5s;">
                        <h3 class="text-xl font-semibold mb-1">Integración Latinoamericana</h3>
                        <p class="text-gray-600 text-sm mb-4">Fomento de cooperación e integración con países de la región en diversos ámbitos.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Posición Actual -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Posición Actual y Objetivos</h2>
                <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Visión y propuestas para el Perú actual</p>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Democracia -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                        <div class="text-red-500 mb-4 text-4xl floating">
                            <i class="fas fa-vote-yea"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Fortalecimiento Democrático</h3>
                        <p class="text-gray-600">Consolidar instituciones democráticas transparentes, promover participación ciudadana y combatir la corrupción como pilares fundamentales.</p>
                    </div>
                    
                    <!-- Desarrollo -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                        <div class="text-red-500 mb-4 text-4xl floating">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Desarrollo Sostenible</h3>
                        <p class="text-gray-600">Impulsar crecimiento económico con inclusión social, respetando el medio ambiente y promoviendo políticas de largo plazo para el país.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Logros y Contribuciones -->
        <section id="logros" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Logros y Contribuciones</h2>
                <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Aportes significativos al desarrollo del Perú</p>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Infraestructura -->
                    <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                        <div class="h-48 bg-red-100 flex items-center justify-center">
                            <i class="fas fa-road text-5xl text-red-500"></i>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <i class="far fa-calendar-alt mr-2"></i> 1963-1985
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Obras de Infraestructura</h3>
                            <p class="text-gray-600 mb-4">Durante los gobiernos de Belaúnde se construyeron importantes proyectos como la Carretera Marginal de la Selva, aeropuertos y viviendas populares que modernizaron el país.</p>
                        </div>
                    </div>
                    
                    <!-- Democracia -->
                    <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                        <div class="h-48 bg-red-100 flex items-center justify-center">
                            <i class="fas fa-democrat text-5xl text-red-500"></i>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <i class="far fa-calendar-alt mr-2"></i> 2000-2001
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Defensa de la Democracia</h3>
                            <p class="text-gray-600 mb-4">Valentín Paniagua lideró la transición democrática tras la caída de Fujimori, restableciendo el orden constitucional y convocando elecciones transparentes.</p>
                        </div>
                    </div>
                    
                    <!-- Descentralización -->
                    <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.4s;">
                        <div class="h-48 bg-red-100 flex items-center justify-center">
                            <i class="fas fa-people-arrows text-5xl text-red-500"></i>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <i class="far fa-calendar-alt mr-2"></i> Histórico
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Impulso a la Descentralización</h3>
                            <p class="text-gray-600 mb-4">AP ha sido histórico defensor de la descentralización para acercar el Estado a la ciudadanía y promover desarrollo regional, contribuyendo significativamente al debate nacional.</p>
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