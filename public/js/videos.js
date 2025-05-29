document.getElementById('btn-open-modal').onclick = () => {
    document.getElementById('video-modal').style.display = 'flex';
};

document.querySelector('.close-modal').onclick = () => {
    document.getElementById('video-modal').style.display = 'none';
};

document.getElementById('tipo').addEventListener('change', function () {
    document.getElementById('mp4-upload').style.display = 'none';
    document.getElementById('video-url').style.display = 'none';

    if (this.value === 'mp4') {
        document.getElementById('mp4-upload').style.display = 'block';
    } else if (this.value === 'youtube' || this.value === 'facebook') {
        document.getElementById('video-url').style.display = 'block';
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('video-modal-player');
    const iframe = document.getElementById('modal-video-iframe');
    const closeBtn = document.getElementById('modal-close-btn');

    // Función para abrir modal con URL de video
    function openModal(url) {
        iframe.src = url + "?autoplay=1";  // autoplay al abrir
        modal.style.display = "flex";
    }

    // Función para cerrar modal y limpiar iframe
    function closeModal() {
        iframe.src = "";
        modal.style.display = "none";
    }

    // Cerrar modal al hacer clic en botón
    closeBtn.addEventListener('click', closeModal);

    // También cerrar modal al hacer clic fuera del iframe (en el fondo)
    modal.addEventListener('click', function(e) {
        if (e.target === modal) closeModal();
    });

    // Asignar evento click a todos los enlaces "Ver video"
    document.querySelectorAll('.watch-more').forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const url = this.getAttribute('data-embed-url');
            if (url) {
                openModal(url);
            }
        });
    });
});

    // Abrir el modal al hacer clic en el botón
    document.getElementById('btn-open-editar-video').addEventListener('click', function () {
        document.getElementById('modal-editar-video').style.display = 'block';
    });

    // Cerrar el modal
    document.getElementById('btn-cerrar-editar-video').addEventListener('click', function () {
        document.getElementById('modal-editar-video').style.display = 'none';
    });

    // Autocompletar campos del formulario cuando se seleccione un video
    document.getElementById('editar_video_id').addEventListener('change', function () {
        const selected = this.options[this.selectedIndex];

        // Actualizar la acción del formulario con el ID real
        document.getElementById('form-editar-video').action = `/admin/videos/${selected.value}`;

        // Llenar campos
        document.getElementById('editar_titulo_video').value = selected.dataset.titulo || '';
        document.getElementById('editar_tipo_video').value = selected.dataset.tipo || '';
        document.getElementById('editar_url_video').value = selected.dataset.url || '';
        document.getElementById('editar_descripcion_video').value = selected.dataset.descripcion || '';
    });

    document.getElementById('eliminar_video_id').addEventListener('change', function() {
    const videoId = this.value;
    const form = document.getElementById('form-eliminar-video');
    // Cambia la URL para incluir el ID correcto
    form.action = `/admin/videos/${videoId}`;
});



const btnAbrirEliminar = document.getElementById('btn-abrir-eliminar-video');
const modalEliminar = document.getElementById('modal-eliminar-video');
const btnCerrarEliminar = document.getElementById('btn-cerrar-eliminar-video');

btnAbrirEliminar.addEventListener('click', () => {
  modalEliminar.style.display = 'block';
});

btnCerrarEliminar.addEventListener('click', () => {
  modalEliminar.style.display = 'none';
});

// También puedes cerrar el modal haciendo click fuera del contenido
window.addEventListener('click', (e) => {
  if (e.target === modalEliminar) {
    modalEliminar.style.display = 'none';
  }
});
