document.addEventListener("DOMContentLoaded", function() {
    // 1. Efecto blur (como lo tenías originalmente)
    const blurBackground = document.querySelector('.navbar-blur-background');
    if (blurBackground) {
        window.addEventListener('scroll', function() {
            const intensity = Math.min(window.scrollY / 10, 10);
            blurBackground.style.backdropFilter = `blur(${intensity}px)`;
            blurBackground.style.webkitBackdropFilter = `blur(${intensity}px)`;
        });
    }

    // 2. Search toggle SIN TRANSICIONES (versión rápida)
    const searchIcon = document.getElementById('search-icon');
    const searchContainer = document.getElementById('search-container');
    
    if (searchIcon && searchContainer) {
        searchIcon.addEventListener('click', function() {
            searchContainer.style.display = 
                (searchContainer.style.display === "flex") ? "none" : "flex";
        });
    }
});

class CarouselBlurEffect {
    constructor() {
        this.carousels = document.querySelectorAll('.carousel-custom');
        this.init();
    }

    init() {
        this.carousels.forEach(carousel => {
            // Crear elementos borrosos
            if (!carousel.querySelector('.blur-edge-left')) {
                const blurLeft = document.createElement('div');
                blurLeft.className = 'blur-edge-left blur-edge';
                carousel.parentNode.insertBefore(blurLeft, carousel);
                
                const blurRight = document.createElement('div');
                blurRight.className = 'blur-edge-right blur-edge';
                carousel.parentNode.appendChild(blurRight);
            }

            // Observar cambios en el carrusel
            new MutationObserver(() => this.updateBlur(carousel)).observe(carousel, {
                attributes: true,
                childList: true,
                subtree: true
            });

            // Actualizar inicialmente
            this.updateBlur(carousel);
        });

        // Evento para Bootstrap Carousel
        document.addEventListener('slid.bs.carousel', (e) => {
            if (e.target.classList.contains('carousel-custom')) {
                this.updateBlur(e.target);
            }
        });
    }

    updateBlur(carousel) {
        const activeImg = carousel.querySelector('.carousel-item.active img');
        if (!activeImg) return;

        // Usar el mismo origen de imagen pero con diferente posición
        const imgSrc = activeImg.src || activeImg.getAttribute('data-src');
        
        carousel.parentNode.querySelector('.blur-edge-left').style.backgroundImage = `url('${imgSrc}')`;
        carousel.parentNode.querySelector('.blur-edge-right').style.backgroundImage = `url('${imgSrc}')`;
        
        // Forzar repintado para suavizar transición
        void carousel.parentNode.querySelector('.blur-edge-left').offsetWidth;
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const pollHeaders = document.querySelectorAll('.poll-header');
    let activePanel = null; // Track del panel activo

    pollHeaders.forEach(header => {
        header.addEventListener('click', function() {
            const toggle = this.querySelector('.poll-toggle');
            const targetId = toggle.getAttribute('data-target');
            const content = document.getElementById(targetId);
            const icon = toggle.querySelector('i');
            const card = this.closest('.poll-card-3d');

            // Si ya es el panel activo, lo cerramos
            if (activePanel === content) {
                content.classList.remove('active');
                content.style.maxHeight = '0';
                icon.classList.replace('fa-chevron-up', 'fa-chevron-down');
                card.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)';
                activePanel = null;
                return;
            }

            // Cerrar panel activo anterior con animación
            if (activePanel) {
                const prevIcon = activePanel.closest('.poll-card-3d')
                                    .querySelector('.poll-toggle i');
                const prevCard = activePanel.closest('.poll-card-3d');
                
                activePanel.classList.remove('active');
                activePanel.style.maxHeight = '0';
                prevIcon.classList.replace('fa-chevron-up', 'fa-chevron-down');
                prevCard.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)';
            }

            // Abrir nuevo panel
            content.classList.add('active');
            content.style.maxHeight = content.scrollHeight + 'px';
            icon.classList.replace('fa-chevron-down', 'fa-chevron-up');
            card.style.boxShadow = '0 10px 25px rgba(0, 0, 0, 0.15)';
            activePanel = content;
        });
    });
});document.addEventListener('DOMContentLoaded', function() {
    const socialIcons = document.querySelector('.social-icons');
    const contactSection = document.getElementById('contacto');
    
    // Verificar que los elementos existan
    if (!socialIcons || !contactSection) return;
    
    // Configurar la transición inicial
    socialIcons.style.transition = 'opacity 0.5s cubic-bezier(0.4, 0, 0.2, 1), transform 0.5s cubic-bezier(0.4, 0, 0.2, 1)';
    
    function handleScroll() {
        const contactRect = contactSection.getBoundingClientRect();
        const socialRect = socialIcons.getBoundingClientRect();
        
        // Calcular cuándo ocultar (cuando el top del contacto esté a 300px del borde inferior de las redes)
        const hideThreshold = socialRect.bottom + 30;
        
        if (contactRect.top < hideThreshold) {
            // Ocultar redes sociales con efecto hacia arriba
            socialIcons.style.opacity = '0';
            socialIcons.style.transform = 'translateY(-50%) translateY(-20px)';
            socialIcons.style.pointerEvents = 'none';
        } else {
            // Mostrar redes sociales
            socialIcons.style.opacity = '1';
            socialIcons.style.transform = 'translateY(-50%)';
            socialIcons.style.pointerEvents = 'auto';
        }
    }
    
    // Usar requestAnimationFrame para mejor rendimiento
    let ticking = false;
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                handleScroll();
                ticking = false;
            });
            ticking = true;
        }
    });
    
    // Ejecutar al cargar para ver estado inicial
    handleScroll();
});