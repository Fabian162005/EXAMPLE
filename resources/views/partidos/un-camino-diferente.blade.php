
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>un camino diferente</title>
    
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
        <img src="{{ asset('imagenes/image43.png') }}" alt="Logo Acción Popular" class="logo-img">
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
<!-- Contenido principal -->
<main>
    <!-- Hero Section - Rojo renovador -->
    <section class="py-20 bg-gradient-to-b from-red-600 to-red-500 text-white">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate__animated animate__fadeInDown">UN CAMINO DIFERENTE</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto animate__animated animate__fadeIn animate__delay-1s">
                Movimiento político que construye alternativas reales. Ni izquierda ni derecha: soluciones nuevas para problemas antiguos.
            </p>
            <div class="animate__animated animate__fadeIn animate__delay-2s">
                <span class="inline-block w-16 h-1 bg-white mb-2"></span>
                <span class="inline-block w-10 h-1 bg-white"></span>
            </div>
        </div>
    </section>
    
    <!-- Qué nos diferencia -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">¿Por qué somos diferentes?</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Rompiendo los esquemas tradicionales</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Enfoque -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale border-l-4 border-red-500">
                    <div class="text-red-500 mb-4 text-4xl floating">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Reset político</h3>
                    <p class="text-gray-600">No venimos de los partidos tradicionales. Somos ciudadanos, profesionales y activistas que construimos desde cero.</p>
                </div>
                
                <!-- Método -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale border-l-4 border-red-500" style="animation-delay: 0.2s;">
                    <div class="text-red-500 mb-4 text-4xl floating">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Política experimental</h3>
                    <p class="text-gray-600">Implementamos pilotos locales de todas nuestras propuestas antes de escalarlas a nivel nacional.</p>
                </div>
                
                <!-- Estructura -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale border-l-4 border-red-500" style="animation-delay: 0.4s;">
                    <div class="text-red-500 mb-4 text-4xl floating">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Red ciudadana</h3>
                    <p class="text-gray-600">Estructura horizontal donde todos los miembros tienen voz y voto mediante plataforma digital.</p> 
                </div>
            </div>
        </div>
    </section>
    
    <!-- Conducción -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Liderazgo Colectivo 2024</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Rotativo, representativo y con rendición de cuentas</p>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Coordinador -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale border-l-4 border-red-500">
                    <div class="text-red-500 mb-4 text-4xl floating">
                        <i class="fas fa-user-astronaut"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Mariana Costa (2024-2025)</h3>
                    <p class="text-gray-600 mb-2 font-medium">Coordinadora Nacional</p>
                    <p class="text-gray-600">Ingeniera ambiental, creadora del programa "Tech para Todos". Lidera por sorteo entre miembros activos.</p>
                </div>
                
                <!-- Consejo -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale border-l-4 border-red-500" style="animation-delay: 0.2s;">
                    <div class="text-red-500 mb-4 text-4xl floating">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Consejo de 21</h3>
                    <p class="text-gray-600 mb-2 font-medium">Inteligencia colectiva</p>
                    <p class="text-gray-600">7 regiones + 7 sectores + 7 expertos técnicos. Rotación anual con evaluación ciudadana.</p>
                </div>
            </div>

            <!-- Nota -->
            <div class="mt-12 text-center text-gray-500">
            </div>
        </div>
    </section>
    
    <!-- Pilares -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">5 Vías Diferentes</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Nuestro mapa para cambiar lo que no funciona</p>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-4">
                <!-- Política -->
                <div class="bg-gray-50 p-4 rounded-lg shadow hover:shadow-md transition-transform animate-on-scroll hover-scale border-l-2 border-red-400">
                    <div class="text-red-500 mb-2 text-xl">
                        <i class="fas fa-vote-yea"></i>
                    </div>
                    <h3 class="text-md font-semibold mb-1">Democracia 4.0</h3>
                    <p class="text-gray-600 text-xs">Asambleas digitales + sorteo cívico + veto ciudadano a leyes.</p>
                </div>
                
                <!-- Economía -->
                <div class="bg-gray-50 p-4 rounded-lg shadow hover:shadow-md transition-transform animate-on-scroll hover-scale border-l-2 border-red-400" style="animation-delay: 0.1s;">
                    <div class="text-red-500 mb-2 text-xl">
                        <i class="fas fa-coins"></i>
                    </div>
                    <h3 class="text-md font-semibold mb-1">Economía del Bien</h3>
                    <p class="text-gray-600 text-xs">PBI de bienestar + impuestos a especulación + renta básica pilotos.</p>
                </div>
                
                <!-- Social -->
                <div class="bg-gray-50 p-4 rounded-lg shadow hover:shadow-md transition-transform animate-on-scroll hover-scale border-l-2 border-red-400" style="animation-delay: 0.2s;">
                    <div class="text-red-500 mb-2 text-xl">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3 class="text-md font-semibold mb-1">Contratos Sociales</h3>
                    <p class="text-gray-600 text-xs">Acuerdos barrio por barrio para resolver problemas locales.</p>
                </div>
                
                <!-- Ambiente -->
                <div class="bg-gray-50 p-4 rounded-lg shadow hover:shadow-md transition-transform animate-on-scroll hover-scale border-l-2 border-red-400" style="animation-delay: 0.3s;">
                    <div class="text-red-500 mb-2 text-xl">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3 class="text-md font-semibold mb-1">EcoRealismo</h3>
                    <p class="text-gray-600 text-xs">Soluciones ambientales que generan empleo: reforestación productiva, etc.</p>
                </div>
                
                <!-- Tecnología -->
                <div class="bg-gray-50 p-4 rounded-lg shadow hover:shadow-md transition-transform animate-on-scroll hover-scale border-l-2 border-red-400" style="animation-delay: 0.4s;">
                    <div class="text-red-500 mb-2 text-xl">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <h3 class="text-md font-semibold mb-1">TecnoDemocracia</h3>
                    <p class="text-gray-600 text-xs">Blockchain para transparencia + IA contra corrupción + apps cívicas.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Proyectos Piloto -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Laboratorios Ciudadanos</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Donde probamos lo que proponemos</p>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Proyecto 1 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale border-l-4 border-red-500">
                    <div class="text-red-500 mb-4 text-4xl floating">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Renta Básica Piloto</h3>
                    <p class="text-gray-600">En 3 distritos de Lima Norte: <br>
                    - S/500 mensuales sin condiciones <br>
                    - Financiado con impuesto a loterías <br>
                    - Evaluación de impacto en tiempo real</p>
                </div>
                
                <!-- Proyecto 2 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale border-l-4 border-red-500" style="animation-delay: 0.2s;">
                    <div class="text-red-500 mb-4 text-4xl floating">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Gobierno Abierto</h3>
                    <p class="text-gray-600">En 2 municipalidades: <br>
                    - Todos los contratos en blockchain <br>
                    - Alertas ciudadanas de irregularidades <br>
                    - Presupuesto participativo digital</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Red Nacional -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Cómo Participar</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">El partido que construyes mientras lo usas</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Nodo Local -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale border-l-4 border-red-500">
                    <div class="h-48 bg-red-50 flex items-center justify-center">
                        <i class="fas fa-users text-5xl text-red-500"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <i class="fas fa-map-marker-alt mr-2"></i> 45 nodos locales
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Círculo Territorial</h3>
                        <p class="text-gray-600 mb-4">Reúnete semanalmente con vecinos para diagnosticar problemas y prototipar soluciones.</p>
                    </div>
                </div>
                
                <!-- Laboratorio -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale border-l-4 border-red-500" style="animation-delay: 0.2s;">
                    <div class="h-48 bg-red-50 flex items-center justify-center">
                        <i class="fas fa-vial text-5xl text-red-500"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <i class="fas fa-flask mr-2"></i> 18 laboratorios
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Laboratorio de Soluciones</h3>
                        <p class="text-gray-600 mb-4">Prueba tus ideas con asesoría técnica y microfinanciamiento colectivo.</p>
                    </div>
                </div>
                
                <!-- Digital -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale border-l-4 border-red-500" style="animation-delay: 0.4s;">
                    <div class="h-48 bg-red-50 flex items-center justify-center">
                        <i class="fas fa-mobile-alt text-5xl text-red-500"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <i class="fas fa-wifi mr-2"></i> Plataforma digital
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Red de Inteligencia Colectiva</h3>
                        <p class="text-gray-600 mb-4">Vota propuestas, fiscaliza proyectos y construye redes con nuestra app.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Footer con Redes Sociales Destacadas -->
<footer class="bg-gray-900 text-white pt-12 pb-6">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8 mb-8">
            
            <!-- Columna 1: Logo y descripción -->
            <div class="text-center md:text-left">
                <div class="flex justify-center md:justify-start mb-4">
                    <img src="{{ asset('imagenes/image43.png') }}" alt="Logo Grupo Paladines" class="h-20">
                </div>
                <p class="text-gray-300 text-sm mb-4">
                    Líderes en desarrollo social y transparencia política en el Perú.
                </p>
            </div>
            
            <!-- Columna 2: Redes Sociales como Enlaces Rápidos -->
            <div>
                <h3 class="text-lg font-bold mb-4 text-white border-b border-gray-700 pb-2">Nuestras Redes</h3>
                <div class="grid grid-cols-2 gap-4">
                    <a href="https://facebook.com/grupopaladines" target="_blank" class="bg-blue-600 hover:bg-blue-700 text-white rounded-lg p-3 transition-colors flex items-center">
                        <i class="fab fa-facebook-f mr-2"></i> Facebook
                    </a>
                    <a href="https://x.com/grupopaladines" target="_blank" class="bg-black hover:bg-gray-800 text-white rounded-lg p-3 transition-colors flex items-center">
                        <i class="fab fa-x-twitter mr-2"></i> X/Twitter
                    </a>
                    <a href="https://instagram.com/grupopaladines" target="_blank" class="bg-gradient-to-r from-pink-500 to-purple-600 hover:to-purple-700 text-white rounded-lg p-3 transition-colors flex items-center">
                        <i class="fab fa-instagram mr-2"></i> Instagram
                    </a>
                    <a href="https://youtube.com/grupopaladines" target="_blank" class="bg-red-600 hover:bg-red-700 text-white rounded-lg p-3 transition-colors flex items-center">
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
                            <a href="mailto:contacto@grupopaladines.pe" class="text-white hover:text-orange-300 text-sm">contacto@grupopaladines.pe</a>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-phone-alt mr-3 text-orange-400 mt-1"></i>
                        <div>
                            <p class="text-gray-300 text-sm font-medium">Llama gratis</p>
                            <a href="tel:+51987654321" class="text-white hover:text-orange-300 text-sm">(01) 987-6543</a>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt mr-3 text-orange-400 mt-1"></i>
                        <div>
                            <p class="text-gray-300 text-sm font-medium">Visítanos</p>
                            <span class="text-white text-sm">Av. Progreso 123, Lima</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="border-t border-gray-800 pt-6 text-center">
            <p class="text-gray-400 text-xs">
                © 2024 Grupo Paladines. Todos los derechos reservados. 
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
</body>
</html>












