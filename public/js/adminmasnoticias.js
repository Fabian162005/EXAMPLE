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
        // Función con tamaño mínimo aumentado
function adjustSquareContainers() {
    const minSize = 400; // Tamaño mínimo en píxeles (ajustar)
    
    document.querySelectorAll('.media-item').forEach(container => {
        const img = container.querySelector('img');
        if (img) {
            let size = Math.max(
                Math.max(img.naturalWidth, img.naturalHeight),
                minSize // Garantiza el tamaño mínimo
            );
            
            // Aumentar tamaño base
            size = size * 1.15;
            
            container.style.width = size + 'px';
            container.style.height = size + 'px';
            
            // Ajuste responsivo
            const maxViewportSize = window.innerWidth * 0.75;
            if (size > maxViewportSize) {
                container.style.width = maxViewportSize + 'px';
                container.style.height = maxViewportSize + 'px';
            }
        }
    });
}