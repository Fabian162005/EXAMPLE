(function () {
    const container = document.getElementById('video-container'); // overlay negro
    const player    = document.getElementById('video-player');     // iframe grande
    const closeBtn  = document.getElementById('close-video-btn');  // botón cerrar
  
    // Detecta clicks en todos los "Ver video"
    document.querySelectorAll('.watch-more').forEach(link => {
      link.addEventListener('click', e => {
        e.preventDefault();
        
        const card = e.target.closest('.video-card-3d');
        if (!card) return; // Seguridad extra
        
        const embedUrl = card.getAttribute('data-embed-url');
        if (!embedUrl) return; // Seguridad extra
  
        player.src = embedUrl;
        container.style.display = 'flex';
      });
    });
  
    // Botón para cerrar
    closeBtn.addEventListener('click', () => {
      player.src = ''; // Detener video
      container.style.display = 'none';
    });
  })();

  
  document.getElementById('filter-date').addEventListener('click', function() {
    const query = document.getElementById('search-videos').value.toLowerCase();
    const startDate = document.getElementById('start-date').value;
    const endDate = document.getElementById('end-date').value;
    const cards = document.querySelectorAll('.video-card-3d');
    
    // Convertir las fechas de los videos (suponiendo que tienes un atributo 'data-date' en el formato YYYY-MM-DD)
    cards.forEach(card => {
        const title = card.querySelector('h3').innerText.toLowerCase();
        const description = card.querySelector('p').innerText.toLowerCase();
        const videoDate = card.getAttribute('data-date');  // Asegúrate de tener esto en tus tarjetas

        // Comprobar que el video está dentro del rango de fechas
        const isWithinDateRange = (startDate === "" || videoDate >= startDate) && (endDate === "" || videoDate <= endDate);

        // Filtrar por texto y fechas
        if ((title.includes(query) || description.includes(query)) && isWithinDateRange) {
            card.style.display = '';  // Mostrar el video
        } else {
            card.style.display = 'none';  // Ocultar el video
        }
    });
});
