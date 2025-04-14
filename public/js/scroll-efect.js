document.addEventListener('DOMContentLoaded', function() {
    const socialIcons = document.querySelector('.social-icons');
    const navbar = document.querySelector('.navbar-container');
    let lastScrollTop = 0;
    const scrollThreshold = 100;
    
    // Posiciones navbar
    const initialNavY = 45;
    const scrollDownY = 15;
    
    // Configuración redes sociales
    const socialIconsTop = {
        top: '-15px',
        left: '0',
        right: '',
        width: '100%',
        transform: 'translateX(8px)',
        flexDirection: 'row',
        justifyContent: 'center',
        gap: '65px',
        padding: '5px 15px'
    };
    
    const socialIconsRight = {
        top: '50%',
        left: 'auto',
        right: '20px',
        width: 'auto',
        transform: 'translateY(-50%)',
        flexDirection: 'column',
        justifyContent: 'center',
        gap: '15px',
        padding: '15px 5px'
    };

    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
        const atVeryTop = currentScroll <= 5;
        const scrollingDown = currentScroll > lastScrollTop;
        
        // Scroll hacia abajo
        if (scrollingDown && currentScroll > scrollThreshold) {
            // Mover navbar hacia arriba
            navbar.style.transform = `translateX(-50%) translateY(${scrollDownY}px)`;
            
            const offsetRight = 986;

            // Mover redes a la derecha (vertical)
            Object.assign(socialIcons.style, {
                top: socialIconsRight.top,
                right: socialIconsRight.right,
                left: `calc(100% - ${offsetRight}px)`,
                transform: socialIconsRight.transform,
                flexDirection: socialIconsRight.flexDirection,
                gap: socialIconsRight.gap,
                padding: socialIconsRight.padding,
                transition: 'all 0.5s cubic-bezier(0.4, 0, 0.2, 1)'
            });
        } 
        // Scroll hacia arriba
        else if (!scrollingDown) {
            // Redes solo vuelven arriba si estamos en el top
            if (atVeryTop) {
                // Mover navbar a posición original SOLO cuando llegamos al tope
                navbar.style.transform = `translateX(-50%) translateY(${initialNavY}px)`;
                
                Object.assign(socialIcons.style, {
                    top: socialIconsTop.top,
                    left: socialIconsTop.left,
                    right: '',
                    transform: socialIconsTop.transform,
                    flexDirection: socialIconsTop.flexDirection,
                    gap: socialIconsTop.gap,
                    padding: socialIconsTop.padding
                });
            }
            // Si no está en el tope pero es scroll up, mantener navbar arriba
            else {
                navbar.style.transform = `translateX(-50%) translateY(${scrollDownY}px)`;
            }
        }

        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
    });

    // Inicializar posición (arriba)
    Object.assign(socialIcons.style, socialIconsTop);
});


document.addEventListener('DOMContentLoaded', function() {
    const searchContainer = document.querySelector('.search-container');
    const initialPosition = 0; // Posición original (0px)
    const scrolledPosition = 100; // Sube 5px al hacer scroll down
    let lastScrollTop = 0;
    const scrollThreshold = 100;

    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
        const scrollingDown = currentScroll > lastScrollTop;
        const atVeryTop = currentScroll <= 5;

            // Dentro del event listener de scroll:
            if (scrollingDown && currentScroll > scrollThreshold) {
                navbar.style.transform = `translateX(-50%) translateY(${scrollDownY}px)`;
                searchContainer.style.transform = `translateY(${scrolledPosition}px)`;
            } else if (!scrollingDown && atVeryTop) {
                navbar.style.transform = `translateX(-50%) translateY(${initialNavY}px)`;
                searchContainer.style.transform = `translateY(${initialPosition}px)`;
            }

        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
    });
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
    // Elementos del DOM
    const encuestasSection = document.querySelector('.encuestas-section');
    const encuestasHeader = document.querySelector('.section-header');
    const encuestasContainer = document.getElementById('encuestas-container');
    
    // 1. Abrir solo el panel principal de encuestas por defecto
    if (encuestasContainer) {
        encuestasContainer.classList.add('show');
        encuestasContainer.classList.remove('hidden');
    }
    if (encuestasHeader) {
        encuestasHeader.setAttribute('aria-expanded', 'true');
        const icon = encuestasHeader.querySelector('.toggle-icon');
        if (icon) {
            icon.classList.add('rotate-180');
        }
    }

    // 2. Eliminada la función openPriorityCards() ya que no queremos abrirlas por defecto

    // 3. Funciones de toggle
    function toggleMainPanel(e) {
        if (e.target.closest('.section-header')) {
            const isShowing = encuestasContainer.classList.toggle('hidden');
            encuestasContainer.classList.toggle('show', !isShowing);
            encuestasHeader.setAttribute('aria-expanded', !isShowing);
            const icon = encuestasHeader.querySelector('.toggle-icon');
            if (icon) {
                icon.classList.toggle('rotate-180', !isShowing);
            }
        }
    }
    
    function toggleCard(e) {
        const clickedElement = e.target;
        const cardHeader = clickedElement.closest('.card-header') || 
                         clickedElement.closest('.encuesta-card')?.querySelector('.card-header');
        
        if (!cardHeader) return;
        
        e.stopPropagation();
        const card = cardHeader.closest('.encuesta-card');
        if (!card) return;
        
        const list = card.querySelector('.card-list');
        if (!list) return;
        
        const isShowing = list.classList.toggle('hidden');
        list.classList.toggle('show', !isShowing);
        cardHeader.setAttribute('aria-expanded', !isShowing);
        const arrow = cardHeader.querySelector('.toggle-arrow');
        if (arrow) {
            arrow.classList.toggle('rotate-180', !isShowing);
        }
    }
    
    // 4. Event Listeners
    encuestasHeader?.addEventListener('click', toggleMainPanel);
    
    encuestasContainer?.addEventListener('click', function(e) {
        // Permitir clicks en enlaces
        if (e.target.closest('.card-link')) {
            return;
        }
        
        // Activar toggle si se hace click en cualquier parte del encuesta-card
        if (e.target.closest('.encuesta-card')) {
            toggleCard(e);
        }
    });
    
    // 5. Cerrar al hacer click fuera
    document.addEventListener('click', function(e) {
        if (!encuestasSection?.contains(e.target)) {
            if (encuestasContainer) {
                encuestasContainer.classList.add('hidden');
                encuestasContainer.classList.remove('show');
            }
            
            if (encuestasHeader) {
                encuestasHeader.setAttribute('aria-expanded', 'false');
                const icon = encuestasHeader.querySelector('.toggle-icon');
                if (icon) {
                    icon.classList.remove('rotate-180');
                }
            }
            
            document.querySelectorAll('.card-list').forEach(list => {
                list.classList.add('hidden');
                list.classList.remove('show');
                const card = list.closest('.encuesta-card');
                if (card) {
                    const header = card.querySelector('.card-header');
                    if (header) {
                        header.setAttribute('aria-expanded', 'false');
                        const arrow = header.querySelector('.toggle-arrow');
                        if (arrow) {
                            arrow.classList.remove('rotate-180');
                        }
                    }
                }
            });
        }
    });
});