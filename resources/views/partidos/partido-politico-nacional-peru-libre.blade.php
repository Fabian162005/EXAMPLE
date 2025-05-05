









<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partido politico nacional peru libre</title>
    
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
        <img src="{{ asset('imagenes/image41.png') }}" alt="Logo Acción Popular" class="logo-img">
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
    <!-- Sección Hero -->
    <section class="py-20 bg-red-700 text-white">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate__animated animate__fadeInDown">
                Partido Político Nacional Perú Libre
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto animate__animated animate__fadeIn animate__delay-1s">
                ¡Fuerza nacida del pueblo! Por una patria soberana y justa.
            </p>
        </div>
    </section>

    <!-- Historia del Partido -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll text-red-700">Historia del Partido</h2>
            <p class="text-xl text-gray-700 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">
                Origen y evolución de Perú Libre
            </p>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-100 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale">
                    <div class="text-white bg-red-700 w-12 h-12 flex items-center justify-center rounded-full mb-4 text-2xl">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Fundación</h3>
                    <p class="text-gray-700">
                        Fundado en 2008 como Movimiento Político Regional Perú Libre en Huancayo, Junín, por Vladimir Cerrón. :contentReference[oaicite:7]{index=7}
                    </p>
                </div>

                <div class="bg-gray-100 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale">
                    <div class="text-white bg-yellow-500 w-12 h-12 flex items-center justify-center rounded-full mb-4 text-2xl">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Inscripción Oficial</h3>
                    <p class="text-gray-700">
                        En 2016, se inscribió oficialmente como partido nacional bajo el nombre de Perú Libertario, adoptando posteriormente el nombre Perú Libre. :contentReference[oaicite:8]{index=8}
                    </p>
                </div>

                <div class="bg-gray-100 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale">
                    <div class="text-white bg-red-700 w-12 h-12 flex items-center justify-center rounded-full mb-4 text-2xl">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Crecimiento</h3>
                    <p class="text-gray-700">
                        En las elecciones generales de 2021, llevó a Pedro Castillo a la presidencia y obtuvo la mayor bancada en el Congreso. :contentReference[oaicite:9]{index=9}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Liderazgo Actual -->
    <section class="py-16 bg-yellow-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll text-red-700">Liderazgo Actual</h2>
            <p class="text-xl text-gray-700 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Dirigentes y figuras clave</p>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-white bg-red-700 w-12 h-12 flex items-center justify-center rounded-full mb-4 text-2xl">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Vladimir Cerrón</h3>
                    <p class="text-gray-700 mb-2 font-medium">Secretario General</p>
                    <p class="text-gray-700">Líder fundador del partido, promotor de la ideología marxista-leninista-mariateguista. :contentReference[oaicite:10]{index=10}</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-white bg-yellow-500 w-12 h-12 flex items-center justify-center rounded-full mb-4 text-2xl">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Pedro Castillo</h3>
                    <p class="text-gray-700 mb-2 font-medium">Presidente de la República (2021-2022)</p>
                    <p class="text-gray-700">Docente y sindicalista, representó al partido en las elecciones generales de 2021. :contentReference[oaicite:11]{index=11}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Principios -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll text-red-700">Nuestros Principios</h2>
            <p class="text-xl text-gray-700 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Valores fundamentales</p>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-yellow-100 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <h3 class="text-xl font-semibold mb-1 text-black">Soberanía Nacional</h3>
                    <p class="text-gray-700 text-sm">Defendemos la independencia y el control de nuestros recursos estratégicos. :contentReference[oaicite:12]{index=12}</p>
                </div>
                <div class="bg-yellow-100 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <h3 class="text-xl font-semibold mb-1 text-black">Justicia Social</h3>
                    <p class="text-gray-700 text-sm">Promovemos la equidad y la inclusión de todos los peruanos en el desarrollo nacional. :contentReference[oaicite:13]{index=13}</p>
                </div>
                <div class="bg-yellow-100 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <h3 class="text-xl font-semibold mb-1 text-black">Educación Pública</h3>
                    <p class="text-gray-700 text-sm">Impulsamos una educación gratuita y de calidad para todos. :contentReference[oaicite:14]{index=14}</p>
                </div>
                <div class="bg-yellow-100 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <h3 class="text-xl font-semibold mb-1 text-black">Economía Popular</h3>
                    <p class="text-gray-700 text-sm">Fomentamos una economía al servicio del pueblo, regulada por el Estado. :contentReference[oaicite:15]{index=15}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Propuestas -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll text-red-700">Propuestas Clave</h2>
            <p class="text-xl text-gray-700 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Agenda legislativa y política</p>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-white bg-red-700 w-12 h-12 flex items-center justify-center rounded-full mb-4 text-2xl">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Nueva Constitución</h3>
                    <p class="text-gray-700">Proponemos una Asamblea Constituyente para redactar una nueva Carta Magna que refleje los intereses del pueblo. :contentReference[oaicite:16]{index=16}</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-white bg-yellow-500 w-12 h-12 flex items-center justify-center rounded-full mb-4 text-2xl">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Nacionalización de Recursos</h3>
                    <p class="text-gray-700">Buscamos recuperar el control de sectores estratégicos como la minería, el gas y el petróleo. :contentReference[oaicite:17]{index=17}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cierre -->
    <section class="py-16 bg-red-700 text
::contentReference[oaicite:18]{index=18}
 

 <!-- Footer con Redes Sociales Destacadas -->
<footer class="bg-gray-900 text-white pt-12 pb-6">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8 mb-8">
            
            <!-- Columna 1: Logo y descripción -->
            <div class="text-center md:text-left">
                <div class="flex justify-center md:justify-start mb-4">
                    <img src="{{ asset('imagenes/image41.png') }}" alt="Logo Grupo Paladines" class="h-20">
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




