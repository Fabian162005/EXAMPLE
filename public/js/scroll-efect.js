document.addEventListener('DOMContentLoaded', function() {
    const socialIcons = document.querySelector('.social-icons');
    const navbar = document.querySelector('.navbar-container');
    let lastScrollTop = 0;
    const scrollThreshold = 100;
    
    // Posiciones desde tu CSS
    const initialNavY = 45; // Posición inicial desde CSS (45px)
    const scrollDownY = 15; // Sube 30px (45-30=15) al hacer scroll down
    const scrollUpY = 50; // Solo 5px arriba (45-5=40) cuando subes
    
    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
        
        // Scroll hacia abajo - ocultar redes y subir navbar 30px
        if (currentScroll > lastScrollTop && currentScroll > scrollThreshold) {
            socialIcons.classList.add('hidden');
            navbar.style.transform = `translateX(-50%) translateY(${scrollDownY}px)`;
        } 

        // Scroll hacia arriba - mostrar redes y bajar navbar
        else if (currentScroll < lastScrollTop) {
            socialIcons.classList.remove('hidden');
            navbar.style.transform = `translateX(-50%) translateY(${scrollUpY}px)`;
        }

        // Reset completo al llegar al top
        if (currentScroll <= 45) {
            socialIcons.classList.remove('hidden');
            navbar.style.transform = `translateX(-50%) translateY(${initialNavY}px)`;
        }
        
        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
    });
});
