

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partido democrata verde </title>
    
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
        <img src="{{ asset('imagenes/image12.png') }}" alt="Logo Acción Popular" class="logo-img">
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
    <!-- Hero Section -->
    <section class="py-20 bg-gradient-to-r from-green-900 to-green-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate__animated animate__fadeInDown">
                Partido Demócrata Verde
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto animate__animated animate__fadeIn animate__delay-1s">
                Por un Perú sostenible, justo y democrático. El cambio comienza respetando la vida y la naturaleza.
            </p>
        </div>
    </section>

    <!-- Historia del Partido -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Historia del Partido</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">
                Raíces ecológicas, compromiso político
            </p>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale">
                    <div class="text-green-700 mb-4 text-4xl floating">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Origen Ambientalista</h3>
                    <p class="text-gray-600">
                        Fundado en 2023 por colectivos ecologistas y jóvenes activistas. Una nueva voz frente a la crisis climática y política.
                    </p>
                </div>

                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale">
                    <div class="text-green-700 mb-4 text-4xl floating">
                        <i class="fas fa-tree"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Compromiso Verde</h3>
                    <p class="text-gray-600">
                        Defensores de los bosques, ríos y comunidades. Proponen una economía circular y libre de contaminación.
                    </p>
                </div>

                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale">
                    <div class="text-green-700 mb-4 text-4xl floating">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Presencia Nacional</h3>
                    <p class="text-gray-600">
                        Conformado por comités regionales y movimientos ciudadanos en todo el país que exigen justicia climática y social.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Liderazgo Actual -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Liderazgo Actual</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Voceros del cambio verde</p>

            <div class="grid md:grid-cols-1 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-green-700 mb-4 text-4xl floating">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Álex Gonzáles</h3>
                    <p class="text-gray-600 mb-2 font-medium">Presidente del Partido Demócrata Verde</p>
                    <p class="text-gray-600 mb-1"><strong>Educación:</strong> Universidad Inca Garcilaso de la Vega</p>
                    <p class="text-gray-600"><strong>Ocupación:</strong> Administrador de empresas, político</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Principios -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Nuestros Principios</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Valores que defendemos</p>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <h3 class="text-xl font-semibold mb-1">Ecología Integral</h3>
                    <p class="text-gray-600 text-sm mb-4">Entendemos que el bienestar humano depende de un entorno sano y equilibrado.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <h3 class="text-xl font-semibold mb-1">Democracia Verde</h3>
                    <p class="text-gray-600 text-sm mb-4">Fomentamos la participación directa en políticas ambientales y locales.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <h3 class="text-xl font-semibold mb-1">Solidaridad</h3>
                    <p class="text-gray-600 text-sm mb-4">Creemos en una sociedad justa que respeta a todas las formas de vida.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <h3 class="text-xl font-semibold mb-1">Economía Circular</h3>
                    <p class="text-gray-600 text-sm mb-4">Promovemos la reutilización, el reciclaje y la producción responsable.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Propuestas -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Propuestas Verdes</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Nuestra agenda ecológica y democrática</p>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-green-700 mb-4 text-4xl floating">
                        <i class="fas fa-water"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Protección de cuencas</h3>
                    <p class="text-gray-600">Garantizar agua limpia, defensa de ríos y sanciones por contaminación industrial.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-green-700 mb-4 text-4xl floating">
                        <i class="fas fa-wind"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Energía Renovable</h3>
                    <p class="text-gray-600">Impulsar proyectos solares, eólicos y comunitarios, especialmente en zonas rurales.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-green-700 mb-4 text-4xl floating">
                        <i class="fas fa-school"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Educación Ambiental</h3>
                    <p class="text-gray-600">Incorporar la sostenibilidad como eje transversal desde la primaria hasta la universidad.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-green-700 mb-4 text-4xl floating">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Justicia Climática</h3>
                    <p class="text-gray-600">Reforma legal para proteger ecosistemas, pueblos indígenas y enfrentar el cambio climático.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cierre -->
    <section class="py-16 bg-gradient-to-r from-green-900 to-green-600 text-white text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-4 animate-on-scroll">¡El futuro es verde y comienza hoy!</h2>
            <p class="text-xl max-w-2xl mx-auto mb-8 animate-on-scroll">
                El Partido Demócrata Verde construye un Perú con justicia ambiental, democracia activa y respeto por la vida.
            </p>
            <a href="#" class="bg-white text-green-800 font-semibold px-6 py-3 rounded-full hover:bg-gray-200 transition">
                Súmate al cambio verde
            </a>
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
                    <img src="{{ asset('imagenes/image12.png') }}" alt="Logo Grupo Paladines" class="h-20">
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




