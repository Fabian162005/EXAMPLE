












<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>primero la gente comunidad ecologia libertad y progreso </title>
    
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
        <img src="{{ asset('imagenes/image30.png') }}" alt="Logo Acción Popular" class="logo-img">
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
    <!-- Hero Section - Colores azul y verde -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-green-500 text-white">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate__animated animate__fadeInDown">Primero la Gente</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto animate__animated animate__fadeIn animate__delay-1s">
                Movimiento político peruano fundado en 2020 que integra desarrollo comunitario, sostenibilidad ambiental, libertades individuales y progreso tecnológico.
            </p>
        </div>
    </section>
    
    <!-- Historia del Partido -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Nuestra Evolución</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Construyendo una nueva política desde las bases</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Fundación -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale">
                    <div class="text-blue-600 mb-4 text-4xl floating">
                        <i class="fas fa-seedling text-green-500"></i> <!-- Icono verde -->
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Nacimiento en 2020</h3>
                    <p class="text-gray-600">Surgió como iniciativa ciudadana durante la pandemia, consolidándose como movimiento político el 5 de junio de 2020 (Día Mundial del Ambiente).</p>
                </div>
                
                <!-- Ideología -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                    <div class="text-blue-600 mb-4 text-4xl floating">
                        <i class="fas fa-balance-scale-left text-green-500"></i> <!-- Icono verde -->
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Eco-Progresismo</h3>
                    <p class="text-gray-600">Sintetiza justicia social, innovación tecnológica, protección ambiental y respeto a las libertades individuales.</p>
                </div>
                
                <!-- Participación -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale" style="animation-delay: 0.4s;">
                    <div class="text-blue-600 mb-4 text-4xl floating">
                        <i class="fas fa-network-wired text-green-500"></i> <!-- Icono verde -->
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Redes Ciudadanas</h3>
                    <p class="text-gray-600">Estructura descentralizada con 350 comités locales y participación digital activa a través de plataformas colaborativas.</p> 
                </div>
            </div>
        </div>
    </section>
    
    <!-- Liderazgo Actual -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Conducción Colectiva (2024)</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Liderazgos rotativos y representativos</p>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Portavoz -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-blue-600 mb-4 text-4xl floating">
                        <i class="fas fa-microphone-alt text-green-500"></i> <!-- Icono verde -->
                    </div>
                    <h3 class="text-xl font-semibold mb-3">María Fernanda Rojas</h3>
                    <p class="text-gray-600 mb-2 font-medium">Portavoz Nacional</p>
                    <p class="text-gray-600">Bióloga y experta en desarrollo sostenible, exdirectora de programas comunitarios en la ONU.</p>
                </div>
                
                <!-- Consejo -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                    <div class="text-blue-600 mb-4 text-4xl floating">
                        <i class="fas fa-users-cog text-green-500"></i> <!-- Icono verde -->
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Consejo de Territorios</h3>
                    <p class="text-gray-600 mb-2 font-medium">Gobernanza participativa</p>
                    <p class="text-gray-600">Formado por 1 representante por región + 5 delegados sectoriales (juventud, pueblos originarios, etc.).</p>
                </div>
            </div>

            <!-- Nota -->
            <div class="mt-12 text-center text-gray-500">
                <p>Lema: <span class="font-medium">"Soluciones locales con visión global"</span> | <span class="font-medium">Colores oficiales:</span> <span class="text-blue-600">Azul</span> + <span class="text-green-500">Verde</span></p>
            </div>
        </div>
    </section>
    
    <!-- Pilares Fundamentales -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Pilares Fundamentales</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Los cuatro ejes de nuestra propuesta</p>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Comunidad -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-blue-600 mb-2 text-xl">
                        <i class="fas fa-hands-helping text-green-500"></i> <!-- Icono verde -->
                    </div>
                    <h3 class="text-xl font-semibold mb-1">Comunidad Activa</h3>
                    <p class="text-gray-600 text-sm mb-4">Presupuestos participativos, bancos de tiempo y sistemas de cuidado comunitario mutuo.</p>
                </div>
                
                <!-- Ecología -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.1s;">
                    <div class="text-blue-600 mb-2 text-xl">
                        <i class="fas fa-leaf text-green-500"></i> <!-- Icono verde -->
                    </div>
                    <h3 class="text-xl font-semibold mb-1">Ecología Práctica</h3>
                    <p class="text-gray-600 text-sm mb-4">Transición energética justa, economía circular y defensa de los bienes comunes naturales.</p>
                </div>
                
                <!-- Libertad -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                    <div class="text-blue-600 mb-2 text-xl">
                        <i class="fas fa-unlock-alt text-green-500"></i> <!-- Icono verde -->
                    </div>
                    <h3 class="text-xl font-semibold mb-1">Libertades Reales</h3>
                    <p class="text-gray-600 text-sm mb-4">Derechos civiles, privacidad digital y autonomía personal en el marco de la responsabilidad colectiva.</p>
                </div>
                
                <!-- Progreso -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.3s;">
                    <div class="text-blue-600 mb-2 text-xl">
                        <i class="fas fa-microchip text-green-500"></i> <!-- Icono verde -->
                    </div>
                    <h3 class="text-xl font-semibold mb-1">Progreso Inteligente</h3>
                    <p class="text-gray-600 text-sm mb-4">Innovación tecnológica al servicio humano, conectividad universal y adaptación climática.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Propuestas Integradas -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Propuestas Integradas</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Soluciones que combinan nuestros pilares</p>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Economía -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-blue-600 mb-4 text-4xl floating">
                        <i class="fas fa-recycle text-green-500"></i> <!-- Icono verde -->
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Economía Regenerativa</h3>
                    <p class="text-gray-600">Modelo productivo que combina: bioemprendimientos locales + tecnología limpia + comercio justo + finanzas solidarias.</p>
                </div>
                
                <!-- Territorio -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                    <div class="text-blue-600 mb-4 text-4xl floating">
                        <i class="fas fa-water text-green-500"></i> <!-- Icono verde -->
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Gestión del Agua</h3>
                    <p class="text-gray-600">Sistema descentralizado con: cosecha de lluvias + purificación solar + gestión comunal + pagos por servicios hídricos.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Proyectos Emblemáticos -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Iniciativas en Marcha</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Proyectos piloto con resultados comprobados</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Tech Verde -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="h-48 bg-blue-50 flex items-center justify-center">
                        <i class="fas fa-solar-panel text-5xl text-blue-600"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <i class="far fa-calendar-alt mr-2"></i> Desde 2022
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Comunidades Solares</h3>
                        <p class="text-gray-600 mb-4">50 localidades con microredes fotovoltaicas gestionadas por cooperativas locales, reduciendo costos en 60%.</p>
                    </div>
                </div>
                
                <!-- Agro -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                    <div class="h-48 bg-green-50 flex items-center justify-center">
                        <i class="fas fa-tractor text-5xl text-green-500"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <i class="far fa-calendar-alt mr-2"></i> Desde 2021
                        </div>
                        <h3 class="text-xl font-semibold mb-3">AgroTech Campesino</h3>
                        <p class="text-gray-600 mb-4">App + sensores IoT para optimizar riego y fertilización, ya implementado en 120 pequeñas parcelas.</p>
                    </div>
                </div>
                
                <!-- Educación -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.4s;">
                    <div class="h-48 bg-gradient-to-r from-blue-50 to-green-50 flex items-center justify-center">
                        <i class="fas fa-laptop-code text-5xl text-blue-600"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <i class="far fa-calendar-alt mr-2"></i> Desde 2023
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Escuelas Bioclimáticas</h3>
                        <p class="text-gray-600 mb-4">15 colegios autosostenibles con energía renovable, huertos educativos y construcción con materiales locales.</p>
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
                    <img src="{{ asset('imagenes/image30.png') }}" alt="Logo Grupo Paladines" class="h-20">
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










