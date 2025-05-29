
document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.search-tab');
    const sections = document.querySelectorAll('.results-section');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Quitar clase activa de todas las pestañas y secciones
            tabs.forEach(t => t.classList.remove('active'));
            sections.forEach(s => s.classList.remove('active'));

            // Activar la pestaña seleccionada y mostrar su sección
            tab.classList.add('active');
            const target = tab.getAttribute('data-tab');
            document.getElementById(target)?.classList.add('active');
        });
    });

    // Enfocar automáticamente el input al cargar
    document.querySelector('.search-input')?.focus();
});