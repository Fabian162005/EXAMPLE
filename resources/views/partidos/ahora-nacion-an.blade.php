<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acción Popular</title>
    
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
<!-- Header modificado -->
<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Botón de regreso a la izquierda -->
        <a href="/" class="flex items-center text-red-600 hover:text-red-800 transition-colors animate__animated animate__fadeIn">
            <i class="fas fa-arrow-left mr-2 text-xl"></i>
            <span class="font-medium">Inicio</span>
        </a>
        
        <!-- Logo centrado (opcional) -->
        <!-- <div class="logo-container mx-auto animate__animated animate__fadeIn">
            <img src="{{ asset('imagenes/image1.png') }}" alt="Logo Acción Popular" class="logo-img">
        </div> -->
        
        <!-- Logo movido a la derecha -->
        <div class="logo-container animate__animated animate__fadeIn">
            <img src="{{ asset('imagenes/image.png') }}" alt="Logo Acción Popular" class="logo-img">
        </div>
        
        <!-- Menú de navegación (oculto en móviles) -->
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
        <section class="py-20 bg-gradient-to-r from-red-600 to-red-800 text-white">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 animate__animated animate__fadeInDown">Acción Popular</h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto animate__animated animate__fadeIn animate__delay-1s">
                    Un partido político peruano comprometido con la democracia, la justicia social y el desarrollo sostenible desde 1956.
                </p>
            </div>
        </section>
        
        <!-- Historia del Partido -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Historia de Acción Popular</h2>
                <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Un legado de compromiso con el Perú</p>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Fundación -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale">
                        <div class="text-red-500 mb-4 text-4xl floating">
                            <i class="fas fa-landmark"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Fundación en 1956</h3>
                        <p class="text-gray-600">Acción Popular fue fundado el 7 de julio de 1956 por Fernando Belaúnde Terry, emergiendo del Frente Nacional de Juventudes Democráticas. Su creación marcó un hito con el “Ultimátum de la Merced”, consolidándose como un movimiento popular que abogaba por la democracia y la justicia social.</p>
                    </div>
                    
                    <!-- Gobiernos de Belaúnde -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                        <div class="text-red-500 mb-4 text-4xl floating">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Gobiernos de Fernando Belaúnde</h3>
                        <p class="text-gray-600">Acción Popular lideró el Perú bajo la presidencia de Belaúnde en dos períodos (1963-1968 y 1980-1985). Durante su primer gobierno, instauró elecciones municipales democráticas y creó el Sistema Nacional de Cooperación Popular.</p>
                    </div>
                    
                    <!-- Transición Democrática -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale" style="animation-delay: 0.4s;">
                        <div class="text-red-500 mb-4 text-4xl floating">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Transición Democrática 2000-2001</h3>
                        <p class="text-gray-600">Bajo el liderazgo de Valentín Paniagua, Acción Popular encabezó un gobierno de transición tras la caída del régimen de Fujimori. Este período estabilizó la economía y convocó elecciones transparentes en 2001.</p>
                    </div>
                </div>
            </div>
        </section>
        
<!-- Figuras Clave - Versión Actualizada -->
<section class="py-16 bg-gray-50">
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
                <p class="text-gray-600">Abogado y político peruano, elegido presidente del partido en 2020. Exalcalde de Leoncio Prado (2011-2014) y congresista de la República (2016-2019).</p>
            </div>
            
            <!-- Vicepresidente Actual -->
            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                <div class="text-red-500 mb-4 text-4xl floating">
                    <i class="fas fa-user-tie"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Edison Alfredo Chávez Cóndor</h3>
                <p class="text-gray-600 mb-2 font-medium">Vicepresidente Nacional</p>
                <p class="text-gray-600">Político y abogado con experiencia en gestión pública. Ha ocupado cargos en gobiernos regionales y es reconocido por su trabajo en desarrollo local.</p>
            </div>
        </div>

        <!-- Nota histórica opcional -->
        <div class="mt-12 text-center text-gray-500">
            <p>Fundador histórico: <span class="font-medium">Fernando Belaúnde Terry</span> (1956-2002)</p>
        </div>
    </div>
</section>
        
        <!-- Ideología y Principios -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Ideología y Principios</h2>
                <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">El Perú como Doctrina</p>
                
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Humanismo Situacional -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                        <h3 class="text-xl font-semibold mb-1">Humanismo Situacional</h3>
                        <p class="text-gray-600 text-sm mb-4">Inspirado en la historia y geografía del Perú, promueve valores de veracidad, honestidad, laboriosidad y solidaridad dentro de un marco democrático.</p>
                    </div>
                    
                    <!-- Cooperación Popular -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.1s;">
                        <h3 class="text-xl font-semibold mb-1">Cooperación Popular</h3>
                        <p class="text-gray-600 text-sm mb-4">Fomenta la colaboración entre Estado y ciudadanos, inspirándose en tradiciones incaicas de trabajo colectivo para superar desafíos nacionales.</p>
                    </div>
                    
                    <!-- Nacionalismo Democrático -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                        <h3 class="text-xl font-semibold mb-1">Nacionalismo Democrático</h3>
                        <p class="text-gray-600 text-sm mb-4">Defiende un nacionalismo inclusivo que valora la diversidad cultural, promoviendo oportunidades equitativas y desarrollo sostenible.</p>
                    </div>
                    
                    <!-- Desarrollo Regional -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.3s;">
                        <h3 class="text-xl font-semibold mb-1">Desarrollo Regional</h3>
                        <p class="text-gray-600 text-sm mb-4">Prioriza la descentralización y el desarrollo equilibrado de todas las regiones del Perú, combatiendo la centralización limeña.</p>
                    </div>
                    
                    <!-- Justicia Social -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.4s;">
                        <h3 class="text-xl font-semibold mb-1">Justicia Social</h3>
                        <p class="text-gray-600 text-sm mb-4">Busca reducir las desigualdades sociales mediante políticas inclusivas que garanticen acceso a educación, salud y empleo.</p>
                    </div>
                    
                    <!-- Rol del Estado -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.5s;">
                        <h3 class="text-xl font-semibold mb-1">Rol del Estado</h3>
                        <p class="text-gray-600 text-sm mb-4">Aboga por un Estado regulador que fomente la iniciativa privada mientras garantiza servicios públicos y desarrollo sostenible.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Posición Actual -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Posición Actual y Objetivos</h2>
                <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Compromiso con el futuro del Perú</p>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Fortalecimiento Democrático -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                        <div class="text-red-500 mb-4 text-4xl floating">
                            <i class="fas fa-vote-yea"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Fortalecimiento Democrático</h3>
                        <p class="text-gray-600">Acción Popular trabaja por consolidar instituciones democráticas transparentes, promoviendo la participación ciudadana y combatiendo la corrupción.</p>
                    </div>
                    
                    <!-- Desarrollo Sostenible -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                        <div class="text-red-500 mb-4 text-4xl floating">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Desarrollo Sostenible</h3>
                        <p class="text-gray-600">Busca un modelo de crecimiento económico que respete el medio ambiente y promueva el bienestar de las comunidades locales.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Logros y Contribuciones -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Logros y Contribuciones</h2>
                <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Un impacto duradero en la política peruana</p>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Elecciones Municipales -->
                    <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                        <div class="h-48 bg-red-100 flex items-center justify-center">
                            <i class="fas fa-vote-yea text-5xl text-red-500"></i>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <i class="far fa-calendar-alt mr-2"></i> 1963-1966
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Elecciones Municipales Democráticas</h3>
                            <p class="text-gray-600 mb-4">En 1963, Acción Popular instauró elecciones municipales democráticas, fortaleciendo la descentralización.</p>
                        </div>
                    </div>
                    
                    <!-- Infraestructura -->
                    <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                        <div class="h-48 bg-red-100 flex items-center justify-center">
                            <i class="fas fa-road text-5xl text-red-500"></i>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <i class="far fa-calendar-alt mr-2"></i> 1963-1985
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Obras de Infraestructura</h3>
                            <p class="text-gray-600 mb-4">Impulsó proyectos como carreteras y programas de vivienda, conectando regiones y promoviendo el desarrollo.</p>
                        </div>
                    </div>
                    
                    <!-- Gestión Local -->
                    <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.4s;">
                        <div class="h-48 bg-red-100 flex items-center justify-center">
                            <i class="fas fa-city text-5xl text-red-500"></i>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-2">
                                <i class="far fa-calendar-alt mr-2"></i> 2023
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Gestión Local</h3>
                            <p class="text-gray-600 mb-4">Administra alcaldías provinciales como Datem del Marañón, El Dorado y Chepén, enfocándose en desarrollo regional.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="mb-6 md:mb-0">
                    <div class="logo-container mb-4">
                        <img src="{{ asset('imagenes/image1.png') }}" alt="Logo Acción Popular" class="logo-img">
                    </div>
                    <p class="text-gray-400">Trabajando por el desarrollo y progreso de nuestro país desde 1956.</p>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Enlaces</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Inicio</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Historia</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Ideología</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Logros</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Legal</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Estatutos</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Transparencia</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Privacidad</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contacto</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-gray-400"></i>
                            <span class="text-gray-400">Av. 9 de Diciembre 218, Lima, Perú</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt mr-3 text-gray-400"></i>
                            <span class="text-gray-400">(01) 123-4567</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3 text-gray-400"></i>
                            <span class="text-gray-400">contacto@accionpopular.pe</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>© 2023 Acción Popular. Todos los derechos reservados.</p>
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