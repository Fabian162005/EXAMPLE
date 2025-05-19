
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partido de los trabajadores y emprendedores </title>
    
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
        <img src="{{ asset('imagenes/image3.png') }}" alt="Logo Acción Popular" class="logo-img">
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
    <!-- Hero Section - Colores azul y amarillo -->
    <section class="py-20 bg-gradient-to-r from-blue-700 to-yellow-400 text-white">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate__animated animate__fadeInDown">PTE PERÚ</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto animate__animated animate__fadeIn animate__delay-1s">
                Partido Todos por el Perú - Movimiento político humanista fundado en 2019. Uniendo fuerzas para transformar el país.
            </p>
        </div>
    </section>
    
    <!-- Historia del Partido -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Nuestra Historia</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">De la unidad ciudadana al proyecto nacional</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Fundación -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale">
                    <div class="text-blue-700 mb-4 text-4xl floating">
                        <i class="fas fa-flag text-yellow-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Fundación (2019)</h3>
                    <p class="text-gray-600">Nacimos el 12 de octubre de 2019 como convergencia de movimientos regionales, sindicatos y profesionales independientes.</p>
                </div>
                
                <!-- Ideología -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                    <div class="text-blue-700 mb-4 text-4xl floating">
                        <i class="fas fa-hands-helping text-yellow-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Humanismo Democrático</h3>
                    <p class="text-gray-600">Síntesis de justicia social, desarrollo humano y economía al servicio de las personas.</p>
                </div>
                
                <!-- Logros -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale" style="animation-delay: 0.4s;">
                    <div class="text-blue-700 mb-4 text-4xl floating">
                        <i class="fas fa-medal text-yellow-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Trayectoria</h3>
                    <p class="text-gray-600">Gobernamos 3 regiones y 25 municipalidades con modelos de gestión participativa reconocidos internacionalmente.</p> 
                </div>
            </div>
        </div>
    </section>
    
    <!-- Liderazgo Actual -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Conducción Nacional 2024</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Líderes con compromiso social</p>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Presidente -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-blue-700 mb-4 text-4xl floating">
                        <i class="fas fa-user-tie text-yellow-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Alberto Borea Odría</h3>
                    <p class="text-gray-600 mb-2 font-medium">Secretario General</p>
                    <p class="text-gray-600">Ex Alcalde de Lima (2019-2022), impulsor del "Gobierno de la Gente" con 87% de aprobación final.</p>
                </div>
                
                <!-- Equipo -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                    <div class="text-blue-700 mb-4 text-4xl floating">
                        <i class="fas fa-users text-yellow-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Consejo Político</h3>
                    <p class="text-gray-600 mb-2 font-medium">Colectivo de 21 miembros</p>
                    <p class="text-gray-600">50% mujeres, 40% jóvenes, representantes de todas las regiones y sectores productivos.</p>
                </div>
            </div>

            <!-- Nota -->
            <div class="mt-12 text-center text-gray-500">
            </div>
        </div>
    </section>
    
    <!-- Pilares Programáticos -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Nuestros Compromisos</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">5 ejes para la transformación nacional</p>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-6">
                <!-- Democracia -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-blue-700 mb-2 text-2xl">
                        <i class="fas fa-vote-yea text-yellow-500"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-1">Democracia Real</h3>
                    <p class="text-gray-600 text-xs mb-4">Reforma política con: revocatoria permanente, rendición de cuentas obligatoria y democracia participativa.</p>
                </div>
                
                <!-- Economía -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.1s;">
                    <div class="text-blue-700 mb-2 text-2xl">
                        <i class="fas fa-chart-line text-yellow-500"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-1">Economía Popular</h3>
                    <p class="text-gray-600 text-xs mb-4">Créditos a MYPES al 5%, compras estatales a productores locales y bancos comunales.</p>
                </div>
                
                <!-- Social -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                    <div class="text-blue-700 mb-2 text-2xl">
                        <i class="fas fa-home text-yellow-500"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-1">Vivienda Digna</h3>
                    <p class="text-gray-600 text-xs mb-4">Programa nacional de autoconstrucción asistida con materiales ecológicos y diseños antisísmicos.</p>
                </div>
                
                <!-- Educación -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.3s;">
                    <div class="text-blue-700 mb-2 text-2xl">
                        <i class="fas fa-book-open text-yellow-500"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-1">Educación Emancipadora</h3>
                    <p class="text-gray-600 text-xs mb-4">Escuelas públicas con pensamiento crítico, educación financiera y formación técnica dual.</p>
                </div>
                
                <!-- Ambiente -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.4s;">
                    <div class="text-blue-700 mb-2 text-2xl">
                        <i class="fas fa-tint text-yellow-500"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-1">Agua para Todos</h3>
                    <p class="text-gray-600 text-xs mb-4">Ley constitucional del agua como derecho humano, inversión en sistemas rurales y cosecha de lluvias.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Propuestas Destacadas -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Soluciones Concretas</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Propuestas aplicadas con éxito en nuestros gobiernos locales</p>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Desarrollo -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-blue-700 mb-4 text-4xl floating">
                        <i class="fas fa-city text-yellow-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Presupuesto Participativo 2.0</h3>
                    <p class="text-gray-600">Plataforma digital + asambleas barriales para decidir el 100% de obras públicas con seguimiento en tiempo real.</p>
                </div>
                
                <!-- Seguridad -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                    <div class="text-blue-700 mb-4 text-4xl floating">
                        <i class="fas fa-shield-alt text-yellow-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Seguridad Comunitaria</h3>
                    <p class="text-gray-600">Policía de barrio + alarmas vecinales + centros de rehabilitación laboral redujeron 62% la delincuencia en Lima Norte.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Logros Regionales -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Gobiernos que Transforman</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Experiencias exitosas en gestión pública</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Lima -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="h-48 bg-blue-50 flex items-center justify-center">
                        <i class="fas fa-bus text-5xl text-blue-700"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <i class="fas fa-map-marker-alt mr-2"></i> Lima Metropolitana
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Transporte Popular</h3>
                        <p class="text-gray-600 mb-4">Corredores complementarios con buses eléctricos redujeron 40% el tiempo de viaje en zonas populares.</p>
                    </div>
                </div>
                
                <!-- Cajamarca -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                    <div class="h-48 bg-yellow-50 flex items-center justify-center">
                        <i class="fas fa-cow text-5xl text-yellow-500"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <i class="fas fa-map-marker-alt mr-2"></i> Cajamarca
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Ganadería Sostenible</h3>
                        <p class="text-gray-600 mb-4">500 familias mejoraron sus ingresos con técnicas de pastoreo regenerativo y comercialización asociativa.</p>
                    </div>
                </div>
                
                <!-- Arequipa -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.4s;">
                    <div class="h-48 bg-gradient-to-r from-blue-50 to-yellow-50 flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-5xl text-blue-700"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <i class="fas fa-map-marker-alt mr-2"></i> Arequipa
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Tecnificación Rural</h3>
                        <p class="text-gray-600 mb-4">20 centros de capacitación técnica formaron 1,200 jóvenes en agricultura de precisión y agroexportación.</p>
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