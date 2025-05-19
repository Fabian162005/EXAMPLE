document.addEventListener('DOMContentLoaded', () => {
    const videoCards = document.querySelectorAll('.video-card-3d');

    // 🎬 Modal references
    const modal = document.getElementById('video-modal');
    const modalIframe = document.getElementById('video-modal-iframe');
    const closeBtn = document.getElementById('video-modal-close');

    videoCards.forEach(card => {
        const imgContainer = card.querySelector('.video-img-container');
        const embedUrl = card.getAttribute('data-embed-url');
        const watchBtn = card.querySelector('.watch-more'); // Botón para abrir el modal

        // ▶️ Reproducir dentro de la tarjeta (clic sobre la tarjeta)
        card.addEventListener('click', () => {
            if (imgContainer.querySelector('iframe')) return; // Evitar múltiples cargas

            let iframe = document.createElement('iframe');
            iframe.setAttribute('frameborder', '0');
            iframe.setAttribute('allowfullscreen', '');
            iframe.setAttribute('allow', 'autoplay; encrypted-media');

            if (embedUrl.includes('youtube.com') || embedUrl.includes('youtu.be')) {
                const matches = embedUrl.match(/(?:\/|v=)([a-zA-Z0-9_-]{11})/);
                const youtubeID = matches ? matches[1] : null;

                if (youtubeID) {
                    iframe.src = `https://www.youtube.com/embed/${youtubeID}?autoplay=1`;
                    iframe.style.width = '100%';
                    iframe.style.height = '100%';
                    imgContainer.innerHTML = '';
                    imgContainer.appendChild(iframe);
                }
            } else if (embedUrl.includes('facebook.com')) {
                iframe.src = `https://www.facebook.com/plugins/video.php?href=${encodeURIComponent(embedUrl)}&show_text=false&autoplay=true`;

                // 📏 Estilo ajustado para videos verticales de Facebook
                iframe.style.width = '320px';
                iframe.style.height = '450px';
                iframe.style.maxWidth = '100%';
                iframe.style.borderRadius = '8px';
                iframe.style.border = 'none';
                iframe.style.overflow = 'hidden';

                imgContainer.innerHTML = '';
                imgContainer.appendChild(iframe);
            }
        });

        // 🖼️ Modal reproducir (clic en botón "ver video")
        if (watchBtn) {
            watchBtn.addEventListener('click', (e) => {
                e.preventDefault();       // No seguir enlace
                e.stopPropagation();      // ❗ Evitar que también dispare el evento del card

                let finalUrl = '';

                if (embedUrl.includes('youtube.com') || embedUrl.includes('youtu.be')) {
                    const matches = embedUrl.match(/(?:\/|v=)([a-zA-Z0-9_-]{11})/);
                    const youtubeID = matches ? matches[1] : null;
                    if (youtubeID) {
                        finalUrl = `https://www.youtube.com/embed/${youtubeID}?autoplay=1`;

                        modalIframe.style.width = '100%';
                        modalIframe.style.height = '100%';
                        modalIframe.style.borderRadius = '0';
                        modalIframe.style.border = 'none';
                    }
                } else if (embedUrl.includes('facebook.com')) {
                    finalUrl = `https://www.facebook.com/plugins/video.php?href=${encodeURIComponent(embedUrl)}&show_text=false&autoplay=true`;

                    // 📏 Estilo ajustado para el modal con Facebook
                    modalIframe.style.width = '320px';
                    modalIframe.style.height = '450px';
                    modalIframe.style.maxWidth = '100%';
                    modalIframe.style.borderRadius = '8px';
                    modalIframe.style.border = 'none';
                }

                modalIframe.src = finalUrl;
                modal.style.display = 'flex';
            });
        }
    });

    // ❌ Cerrar el modal
    closeBtn.addEventListener('click', () => {
        modal.style.display = 'none';
        modalIframe.src = ''; // Detiene video
    });

    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.style.display = 'none';
            modalIframe.src = '';
        }
    });
});