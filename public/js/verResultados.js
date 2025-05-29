document.addEventListener('DOMContentLoaded', function () {
    // Obtener elementos del modal
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');
    const captionText = document.querySelector('.modal-caption');
    const closeModal = document.querySelector('.close-modal');

    // Verifica que los elementos del modal existan antes de continuar
    if (modal && modalImg && captionText) {
        const imageCards = document.querySelectorAll('.resultado-card');

        imageCards.forEach(card => {
            const img = card.querySelector('.resultado-imagen');
            const title = card.querySelector('.titulo-imagen')?.textContent || '';
            const expandBtn = card.querySelector('.expand-btn');
            const zoomBtn = card.querySelector('.zoom-btn');

            const showModal = () => {
                modal.style.display = 'block';
                modalImg.src = img?.src || '';
                captionText.textContent = title;
            };

            if (expandBtn) expandBtn.addEventListener('click', showModal);
            if (zoomBtn) zoomBtn.addEventListener('click', showModal);
            if (img) img.addEventListener('click', showModal);
        });

        // Cerrar modal si el botón existe
        if (closeModal) {
            closeModal.addEventListener('click', () => {
                modal.style.display = 'none';
            });
        }

        // Cerrar modal al hacer clic fuera de la imagen
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });
    }

    // Notificación de descarga
    const notification = document.getElementById('downloadNotification');

    function showNotification(message, type = 'success') {
        if (!notification) return;

        const icon = notification.querySelector('.icon');
        const messageEl = notification.querySelector('.notification-message');

        if (!icon || !messageEl) return;

        // Configurar icono según tipo
        icon.className = `icon fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'}`;
        messageEl.textContent = message;

        // Establecer clase de tipo
        notification.className = 'notification';
        notification.classList.add(type, 'show');

        // Ocultar después de 3 segundos
        setTimeout(() => {
            notification.classList.remove('show');
        }, 3000);
    }

    // Funcionalidad de descarga
    const downloadBtns = document.querySelectorAll('.download-btn');
    downloadBtns.forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            const title = this.getAttribute('data-title') || 'imagen';
            const imageUrl = this.getAttribute('data-image');
            if (!imageUrl) return;

            showNotification(`Preparando descarga: "${title}"`, 'success');

            setTimeout(() => {
                const a = document.createElement('a');
                a.href = imageUrl;
                a.download = title.toLowerCase().replace(/\s+/g, '_') + '.jpg';
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);

                showNotification(`"${title}" descargado correctamente`, 'success');
            }, 1000);
        });
    });
});
