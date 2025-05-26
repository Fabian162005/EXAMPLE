document.querySelector('input[type="file"]').addEventListener('change', function (e) {
    if (e.target.files && e.target.files[0]) {
        const reader = new FileReader();
        reader.onload = function (e) {
            const preview = document.createElement('img');
            preview.src = e.target.result;
            preview.style.maxWidth = "200px";
            preview.style.marginTop = "10px";
            document.querySelector('form').appendChild(preview);
        };
        reader.readAsDataURL(e.target.files[0]);
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('modalEliminar');
    const modalTexto = document.getElementById('modalTexto');
    const formEliminar = document.getElementById('formEliminar');
    const cerrarBtn = document.querySelector('.cerrar-modal');

    document.querySelectorAll('.btn-eliminar').forEach(btn => {
        btn.addEventListener('click', () => {
            const imagenId = btn.getAttribute('data-id');
            const titulo = btn.getAttribute('data-titulo');
            modalTexto.textContent = `¿Estás seguro de que deseas eliminar la imagen "${titulo}"?`;
            formEliminar.action = `/admin/resultados/${imagenId}`;
            modal.style.display = 'block';
        });
    });

    cerrarBtn.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });
});
