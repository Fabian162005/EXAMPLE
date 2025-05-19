

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partido civico obras</title>
    
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
        <img src="{{ asset('imagenes/image20.png') }}" alt="Logo Acción Popular" class="logo-img">
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
    <!-- Hero Section -->
    <section class="py-20 bg-gradient-to-r from-green-800 to-green-700 text-white">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate__animated animate__fadeInDown">Partido Cívico Obras</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto animate__animated animate__fadeIn animate__delay-1s">
                Organización política con enfoque en infraestructura pública, descentralización efectiva y desarrollo con transparencia.
            </p>
        </div>
    </section>

    <!-- Historia del Partido -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Historia del Partido</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Fundamentos y creación</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale">
                    <div class="text-green-800 mb-4 text-4xl floating">
                        <i class="fas fa-flag-checkered"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Creación y Legalización</h3>
                    <p class="text-gray-600">Fundado por profesionales del sector construcción y gestión pública. Inscrito oficialmente en abril de 2025 ante el JNE.</p>
                </div>

                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                    <div class="text-green-800 mb-4 text-4xl floating">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Ideología Técnica</h3>
                    <p class="text-gray-600">Basado en una visión técnica de gestión por resultados, enfoque cívico y lucha contra el burocratismo.</p>
                </div>

                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale" style="animation-delay: 0.4s;">
                    <div class="text-green-800 mb-4 text-4xl floating">
                        <i class="fas fa-road"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Enfoque Territorial</h3>
                    <p class="text-gray-600">Impulsa proyectos de infraestructura a nivel regional con participación de gobiernos locales y sociedad civil.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Liderazgo Actual -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Liderazgo Actual</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Equipo técnico-político</p>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-green-800 mb-4 text-4xl floating">
                        <i class="fas fa-user-hard-hat"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Ing. Carmen Ríos</h3>
                    <p class="text-gray-600 mb-2 font-medium">Presidenta</p>
                    <p class="text-gray-600">Ingeniera civil con experiencia en gobiernos locales. Líder en la planificación de infraestructura para el desarrollo nacional.</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                    <div class="text-green-800 mb-4 text-4xl floating">
                        <i class="fas fa-user-cog"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Marco Ludeña</h3>
                    <p class="text-gray-600 mb-2 font-medium">Secretario General</p>
                    <p class="text-gray-600">Administrador público y exconsultor de políticas municipales. Coordina la expansión nacional del partido.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Principios -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Principios Fundamentales</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Qué defendemos</p>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <h3 class="text-xl font-semibold mb-1">Gestión Eficiente</h3>
                    <p class="text-gray-600 text-sm mb-4">Proyectos públicos con transparencia, cronogramas y resultados auditables.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <h3 class="text-xl font-semibold mb-1">Obras con Impacto</h3>
                    <p class="text-gray-600 text-sm mb-4">Infraestructura que mejora la calidad de vida y dinamiza la economía local.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <h3 class="text-xl font-semibold mb-1">Descentralización Real</h3>
                    <p class="text-gray-600 text-sm mb-4">Apoyo directo a municipalidades y gobiernos regionales con presupuesto justo.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <h3 class="text-xl font-semibold mb-1">Integridad Pública</h3>
                    <p class="text-gray-600 text-sm mb-4">Cero tolerancia a la corrupción en licitaciones, obras y servicios públicos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Propuestas -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Propuestas Clave</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Compromisos para el 2026</p>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-green-800 mb-4 text-4xl floating">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Plan Nacional de Obras</h3>
                    <p class="text-gray-600">Una agenda priorizada de más de 1,000 proyectos en agua, saneamiento, educación y transporte.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-green-800 mb-4 text-4xl floating">
                        <i class="fas fa-city"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Municipios Modernos</h3>
                    <p class="text-gray-600">Capacitación, herramientas digitales y presupuesto directo para alcaldías eficientes.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-green-800 mb-4 text-4xl floating">
                        <i class="fas fa-recycle"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Ciudades Limpias</h3>
                    <p class="text-gray-600">Programas de residuos sólidos, reciclaje y limpieza urbana en capitales provinciales.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-green-800 mb-4 text-4xl floating">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Mantenimiento Local</h3>
                    <p class="text-gray-600">Creación de brigadas comunales con empleo local para conservar calles, veredas y espacios públicos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cierre -->
    <section class="py-16 bg-gradient-to-r from-green-800 to-green-700 text-white text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-4 animate-on-scroll">Construyamos el Perú desde las bases</h2>
            <p class="text-xl max-w-2xl mx-auto mb-8 animate-on-scroll">
                Partido Cívico Obras se presenta como una opción práctica, transparente y con visión técnica para un Perú con desarrollo visible.
            </p>
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