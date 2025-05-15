// Función para ajustar elementos según el tamaño de pantalla
function adjustLayout() {
    const screenWidth = window.innerWidth;
    const progressBar = document.getElementById('progressBar');
    
    // Ajustar estilos según el ancho de pantalla
    if (screenWidth < 576) {
        // Estilos para móviles pequeños
        document.querySelectorAll('.escala-item').forEach(item => {
            item.style.minWidth = '40px';
        });
    } else if (screenWidth < 768) {
        // Estilos para móviles grandes
        document.querySelectorAll('.escala-item').forEach(item => {
            item.style.minWidth = '50px';
        });
    } else {
        // Estilos para tablets y desktop
        document.querySelectorAll('.escala-item').forEach(item => {
            item.style.minWidth = '';
        });
    }
}

// Inicialización responsiva
document.addEventListener('DOMContentLoaded', () => {
    adjustLayout();
    window.addEventListener('resize', adjustLayout);
    
    // Resto del código de inicialización...
    updateProgressBar();
    
    // Configurar event listeners para los botones
    document.querySelectorAll('.btn-next').forEach(btn => {
        btn.addEventListener('click', nextPage);
    });
    
    document.querySelectorAll('.btn-prev').forEach(btn => {
        btn.addEventListener('click', prevPage);
    });
    
    // Validar edad en tiempo real
    document.getElementById('edad').addEventListener('input', function() {
        if(this.value < 18) this.value = 18;
        if(this.value > 100) this.value = 100;
        updateProgressBar();
    });
    
    // Validar sexo en tiempo real
    document.getElementById('sexo').addEventListener('change', updateProgressBar);
});

// Resto de las funciones (animateOption, nextPage, prevPage, etc.) permanecen iguales
// ... [el resto de tu código JavaScript existente]
  document.addEventListener('DOMContentLoaded', () => {
    const newsCards = document.querySelectorAll('.news-card-3d');

    newsCards.forEach(card => {
      const video = card.querySelector('video');

      if (video) {
        card.classList.add('con-video');
        card.classList.remove('sin-video');
      } else {
        card.classList.add('sin-video');
        card.classList.remove('con-video');
      }
    });
  });

