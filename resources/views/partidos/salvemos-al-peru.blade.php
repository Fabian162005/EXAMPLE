













<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salvemos al peru</title>
    
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
        <img src="{{ asset('imagenes/image40.png') }}" alt="Logo Acción Popular" class="logo-img">
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
    <!-- Hero Section - Color rojo patriótico -->
    <section class="py-20 bg-gradient-to-b from-red-700 to-red-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate__animated animate__fadeInDown">SALVEMOS AL PERÚ</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto animate__animated animate__fadeIn animate__delay-1s">
                Movimiento nacionalista que defiende la soberanía, la seguridad ciudadana y los valores peruanos. Fundado en 2021.
            </p>
            <div class="animate__animated animate__fadeIn animate__delay-2s">
                <span class="inline-block w-16 h-1 bg-white mb-2"></span>
                <span class="inline-block w-10 h-1 bg-white"></span>
            </div>
        </div>
    </section>
    
    <!-- Historia del Partido -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Nuestra Bandera de Lucha</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Por un Perú seguro, soberano y con orden</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Fundación -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale border-t-4 border-red-600">
                    <div class="text-red-600 mb-4 text-4xl floating">
                        <i class="fas fa-fist-raised"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Fundación en 2021</h3>
                    <p class="text-gray-600">Nacimos el 28 de julio de 2021 como respuesta a la crisis de seguridad y pérdida de valores nacionales.</p>
                </div>
                
                <!-- Ideología -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale border-t-4 border-red-600" style="animation-delay: 0.2s;">
                    <div class="text-red-600 mb-4 text-4xl floating">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Nacionalismo Popular</h3>
                    <p class="text-gray-600">Defensa de la patria, lucha contra la corrupción y promoción de la familia como célula básica de la sociedad.</p>
                </div>
                
                <!-- Logros -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale border-t-4 border-red-600" style="animation-delay: 0.4s;">
                    <div class="text-red-600 mb-4 text-4xl floating">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Acción Directa</h3>
                    <p class="text-gray-600">Hemos promovido 12 iniciativas legislativas contra la delincuencia y recuperado espacios públicos en 8 ciudades.</p> 
                </div>
            </div>
        </div>
    </section>
    
    <!-- Liderazgo Actual -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Comando Nacional 2024</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Líderes con mano firme y corazón peruano</p>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Presidente -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale border-t-4 border-red-600">
                    <div class="text-red-600 mb-4 text-4xl floating">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Ricardo Belmont Cassinelli</h3>
                    <p class="text-gray-600 mb-2 font-medium">Presidente Nacional</p>
                    <p class="text-gray-600">Exalcalde de Lima (1990-1995) conocido por su gestión eficiente y mano dura contra la delincuencia.</p>
                </div>
                
                <!-- Equipo -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale border-t-4 border-red-600" style="animation-delay: 0.2s;">
                    <div class="text-red-600 mb-4 text-4xl floating">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Frente de Seguridad</h3>
                    <p class="text-gray-600 mb-2 font-medium">Equipo especializado</p>
                    <p class="text-gray-600">Exgeneral PNP Juan Silva, fiscal anticorrupción Laura Guzmán y expertos en inteligencia ciudadana.</p>
                </div>
            </div>

            <!-- Nota -->
            <div class="mt-12 text-center text-gray-500">
                <p>Lema: <span class="font-medium">"Orden, seguridad y patria"</span> | <span class="font-medium">Color oficial:</span> <span class="text-red-600">Rojo patriótico</span> | Símbolo: <i class="fas fa-fist-raised text-red-600"></i></p>
            </div>
        </div>
    </section>
    
    <!-- Propuestas Centrales -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Nuestras 7 Batallas</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Prioridades nacionales urgentes</p>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-7 gap-4">
                <!-- Seguridad -->
                <div class="bg-gray-50 p-4 rounded-lg shadow hover:shadow-md transition-transform animate-on-scroll hover-scale border-t-2 border-red-600">
                    <div class="text-red-600 mb-2 text-xl">
                        <i class="fas fa-handcuffs"></i>
                    </div>
                    <h3 class="text-md font-semibold mb-1">Ley Antidelincuencia</h3>
                    <p class="text-gray-600 text-xs">Cadena perpetua para asesinos y violadores. Patrullas ciudadanas.</p>
                </div>
                
                <!-- Corrupción -->
                <div class="bg-gray-50 p-4 rounded-lg shadow hover:shadow-md transition-transform animate-on-scroll hover-scale border-t-2 border-red-600" style="animation-delay: 0.1s;">
                    <div class="text-red-600 mb-2 text-xl">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3 class="text-md font-semibold mb-1">Justicia Ejemplar</h3>
                    <p class="text-gray-600 text-xs">Confiscación de bienes a corruptos. Juicios exprés.</p>
                </div>
                
                <!-- Educación -->
                <div class="bg-gray-50 p-4 rounded-lg shadow hover:shadow-md transition-transform animate-on-scroll hover-scale border-t-2 border-red-600" style="animation-delay: 0.2s;">
                    <div class="text-red-600 mb-2 text-xl">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 class="text-md font-semibold mb-1">Educación Patriótica</h3>
                    <p class="text-gray-600 text-xs">Currículo nacional con historia patria y valores cívicos.</p>
                </div>
                
                <!-- Economía -->
                <div class="bg-gray-50 p-4 rounded-lg shadow hover:shadow-md transition-transform animate-on-scroll hover-scale border-t-2 border-red-600" style="animation-delay: 0.3s;">
                    <div class="text-red-600 mb-2 text-xl">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3 class="text-md font-semibold mb-1">Industria Nacional</h3>
                    <p class="text-gray-600 text-xs">Compre peruano en el Estado. Aranceles a importados.</p>
                </div>
                
                <!-- Fronteras -->
                <div class="bg-gray-50 p-4 rounded-lg shadow hover:shadow-md transition-transform animate-on-scroll hover-scale border-t-2 border-red-600" style="animation-delay: 0.4s;">
                    <div class="text-red-600 mb-2 text-xl">
                        <i class="fas fa-border-all"></i>
                    </div>
                    <h3 class="text-md font-semibold mb-1">Fronteras Seguras</h3>
                    <p class="text-gray-600 text-xs">Control migratorio estricto. Cierre de fronteras porosas.</p>
                </div>
                
                <!-- Salud -->
                <div class="bg-gray-50 p-4 rounded-lg shadow hover:shadow-md transition-transform animate-on-scroll hover-scale border-t-2 border-red-600" style="animation-delay: 0.5s;">
                    <div class="text-red-600 mb-2 text-xl">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <h3 class="text-md font-semibold mb-1">Salud Militarizada</h3>
                    <p class="text-gray-600 text-xs">Hospitales con gestión castrense. Farmacia popular.</p>
                </div>
                
                <!-- Valores -->
                <div class="bg-gray-50 p-4 rounded-lg shadow hover:shadow-md transition-transform animate-on-scroll hover-scale border-t-2 border-red-600" style="animation-delay: 0.6s;">
                    <div class="text-red-600 mb-2 text-xl">
                        <i class="fas fa-church"></i>
                    </div>
                    <h3 class="text-md font-semibold mb-1">Familia Peruana</h3>
                    <p class="text-gray-600 text-xs">Protección constitucional a la familia tradicional.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Acciones Concretas -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Acciones Inmediatas</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Medidas que implementaremos en los primeros 100 días</p>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Seguridad -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale border-t-4 border-red-600">
                    <div class="text-red-600 mb-4 text-4xl floating">
                        <i class="fas fa-police-box"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Operación Escudo Nacional</h3>
                    <p class="text-gray-600">1. Movilización de FFAA a calles <br>
                    2. Toque de queda para menores <br>
                    3. Tribunales especiales para delincuentes reincidentes</p>
                </div>
                
                <!-- Economía -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale border-t-4 border-red-600" style="animation-delay: 0.2s;">
                    <div class="text-red-600 mb-4 text-4xl floating">
                        <i class="fas fa-coins"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Paquetazo Económico</h3>
                    <p class="text-gray-600">1. Eliminación de impuestos a MYPES <br>
                    2. Subsidios a combustibles <br>
                    3. Congelamiento de precios básicos</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Movilización Nacional -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Frentes de Acción</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Estructuras organizadas para el cambio</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Juvenil -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale border-t-4 border-red-600">
                    <div class="h-48 bg-red-50 flex items-center justify-center">
                        <i class="fas fa-flag text-5xl text-red-600"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <i class="fas fa-users mr-2"></i> 25,000 miembros
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Juventud Patriótica</h3>
                        <p class="text-gray-600 mb-4">Brigadas de seguridad vecinal, voluntariado social y defensa de símbolos nacionales.</p>
                    </div>
                </div>
                
                <!-- Mujeres -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale border-t-4 border-red-600" style="animation-delay: 0.2s;">
                    <div class="h-48 bg-red-50 flex items-center justify-center">
                        <i class="fas fa-female text-5xl text-red-600"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <i class="fas fa-users mr-2"></i> 15,000 miembros
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Mujeres por la Patria</h3>
                        <p class="text-gray-600 mb-4">Red nacional contra la violencia familiar y escuela de lideresas comunitarias.</p>
                    </div>
                </div>
                
                <!-- Profesionales -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale border-t-4 border-red-600" style="animation-delay: 0.4s;">
                    <div class="h-48 bg-red-50 flex items-center justify-center">
                        <i class="fas fa-user-tie text-5xl text-red-600"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <i class="fas fa-users mr-2"></i> 8,000 miembros
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Profesionales por el Orden</h3>
                        <p class="text-gray-600 mb-4">Asesoría técnica gratuita a municipios y contraloría ciudadana de obras públicas.</p>
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
                        <img src="{{ asset('imagenes/image40.png') }}" alt="Logo Acción Popular" class="logo-img">
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












