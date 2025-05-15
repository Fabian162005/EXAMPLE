        // Animación suave al cargar
        document.addEventListener('DOMContentLoaded', function() {
            // Efecto de aparición progresiva
            gsap.from(".noticia-container", {
                duration: 1,
                y: 50,
                opacity: 0,
                ease: "power3.out"
            });
            
            // Efecto para la sección de contacto
            gsap.from(".card-3d", {
                scrollTrigger: {
                    trigger: ".contacto-3d",
                    start: "top 80%",
                    toggleActions: "play none none none"
                },
                duration: 1,
                y: 50,
                opacity: 0,
                ease: "back.out(1.2)"
            });
        });