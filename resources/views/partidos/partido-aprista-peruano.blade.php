

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partido aprista Peruano</title>
    
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
            <img src="{{ asset('imagenes/image14.png') }}" alt="Logo Acción Popular" class="logo-img">
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
    <section class="py-20 bg-gradient-to-r from-red-800 to-red-900 text-white">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 animate__animated animate__fadeInDown">Partido Aprista Peruano (APRA)</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto animate__animated animate__fadeIn animate__delay-1s">
                Fundado por Víctor Raúl Haya de la Torre, el APRA es uno de los partidos más antiguos y emblemáticos del Perú, con una rica historia de lucha por la justicia social y la democracia.
            </p>
        </div>
    </section>
    
    <!-- Historia del Partido -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Historia del APRA</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Orígenes y evolución</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Fundación -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale">
                    <div class="text-red-800 mb-4 text-4xl floating">
                        <i class="fas fa-flag"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Fundación en 1924</h3>
                    <p class="text-gray-600">El APRA fue fundado el 7 de mayo de 1924 en México como un movimiento político continental antiimperialista. En Perú, se estableció oficialmente el 20 de septiembre de 1930 en Lima. :contentReference[oaicite:2]{index=2}</p>
                </div>
                
                <!-- Ideología -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                    <div class="text-red-800 mb-4 text-4xl floating">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Ideología Aprista</h3>
                    <p class="text-gray-600">El aprismo es una ideología latinoamericanista, antiimperialista y anticomunista, que ha evolucionado desde el socialismo democrático hacia posiciones más conservadoras en las últimas décadas. :contentReference[oaicite:3]{index=3}</p>
                </div>
                
                <!-- Participación -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow animate-on-scroll hover-scale" style="animation-delay: 0.4s;">
                    <div class="text-red-800 mb-4 text-4xl floating">
                        <i class="fas fa-vote-yea"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Gobiernos Democráticos</h3>
                    <p class="text-gray-600">El APRA llegó al poder democráticamente en dos ocasiones: en 1985 y en 2006, ambas bajo la presidencia de Alan García. :contentReference[oaicite:4]{index=4}</p> 
                </div>
            </div>
        </div>
    </section>
    
    <!-- Liderazgo Actual -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Liderazgo Actual</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Dirigencia del partido</p>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Presidente -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-red-800 mb-4 text-4xl floating">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">César Trelles</h3>
                    <p class="text-gray-600 mb-2 font-medium">Presidente del partido</p>
                    <p class="text-gray-600">Encabeza la organización en su proceso de reorganización y recuperación de la inscripción electoral. :contentReference[oaicite:5]{index=5}</p>
                </div>
                
                <!-- Secretarios Generales -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                    <div class="text-red-800 mb-4 text-4xl floating">
                        <i class="fas fa-user-cog"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Belén García y Benigno Chirinos</h3>
                    <p class="text-gray-600 mb-2 font-medium">Secretarios Generales</p>
                    <p class="text-gray-600">Belén García (institucional) y Benigno Chirinos (político) lideran las acciones estratégicas del partido. :contentReference[oaicite:6]{index=6}</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Ideología y Principios -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Ideología y Principios</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Compromiso con la justicia social</p>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Antiimperialismo -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <h3 class="text-xl font-semibold mb-1">Antiimperialismo</h3>
                    <p class="text-gray-600 text-sm mb-4">Defensa de la soberanía nacional frente a influencias extranjeras. :contentReference[oaicite:7]{index=7}</p>
                </div>
                
                <!-- Justicia Social -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.1s;">
                    <h3 class="text-xl font-semibold mb-1">Justicia Social</h3>
                    <p class="text-gray-600 text-sm mb-4">Promoción de la equidad y mejora de las condiciones de vida de las mayorías nacionales. :contentReference[oaicite:8]{index=8}</p>
                </div>
                
                <!-- Integración Latinoamericana -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                    <h3 class="text-xl font-semibold mb-1">Integración Latinoamericana</h3>
                    <p class="text-gray-600 text-sm mb-4">Fomento de la unidad y cooperación entre los pueblos de América Latina. :contentReference[oaicite:9]{index=9}</p>
                </div>
                
                <!-- Democracia -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.3s;">
                    <h3 class="text-xl font-semibold mb-1">Democracia</h3>
                    <p class="text-gray-600 text-sm mb-4">Compromiso con el sistema democrático y la participación ciudadana. :contentReference[oaicite:10]{index=10}</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Propuestas -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4 animate-on-scroll">Propuestas Clave</h2>
            <p class="text-xl text-gray-600 text-center mb-12 max-w-3xl mx-auto animate-on-scroll">Agenda para un Perú justo y soberano</p>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Educación -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale">
                    <div class="text-red-800 mb-4 text-4xl floating">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Educación Pública</h3>
                    <p class="text-gray-600">Fortalecimiento del sistema educativo nacional para garantizar acceso y calidad. :contentReference[oaicite:11]{index=11}</p>
                </div>
                
                <!-- Desarrollo Económico -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.2s;">
                    <div class="text-red-800 mb-4 text-4xl floating">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Desarrollo Económico</h3>
                    <p class ="text-gray-600">Promoción de políticas económicas que impulsen la producción nacional y reduzcan la desigualdad. ([apraperu.com](https://apraperu.com/))</p>
                </div>
                
                <!-- Salud y bienestar -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.4s;">
                    <div class="text-red-800 mb-4 text-4xl floating">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Salud y Bienestar</h3>
                    <p class="text-gray-600">Acceso universal a servicios de salud de calidad y políticas de protección social. ([apraperu.com](https://apraperu.com/))</p>
                </div>
                
                <!-- Reforma del Estado -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-transform animate-on-scroll hover-scale" style="animation-delay: 0.6s;">
                    <div class="text-red-800 mb-4 text-4xl floating">
                        <i class="fas fa-university"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Reforma del Estado</h3>
                    <p class="text-gray-600">Modernización del Estado para hacerlo más eficiente, transparente y cercano al ciudadano. ([apraperu.com](https://apraperu.com/))</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Cierre -->
    <section class="py-16 bg-gradient-to-r from-red-800 to-red-900 text-white text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-4 animate-on-scroll">Un legado de lucha y compromiso</h2>
            <p class="text-xl max-w-2xl mx-auto mb-8 animate-on-scroll">
                El Partido Aprista Peruano continúa su camino en la política peruana con el objetivo de recuperar su espacio en la escena nacional y representar las causas del pueblo peruano con justicia y responsabilidad.
            </p>
            <a href="https://apraperu.com/" target="_blank" class="bg-white text-red-900 font-semibold px-6 py-3 rounded-full hover:bg-gray-200 transition">Visita su página oficial</a>
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