document.addEventListener("DOMContentLoaded", function() {
    const searchIcon = document.getElementById("search-icon");
    const searchContainer = document.getElementById("search-container");
    const searchInput = document.getElementById("search-input");
    const suggestionsBox = document.getElementById("search-suggestions");

    let isOpen = false;

    // Mostrar/ocultar barra de búsqueda
    searchIcon.addEventListener("click", (e) => {
        e.stopPropagation(); // Evita que el evento se propague
        isOpen = !isOpen;
        if (isOpen) {
            searchContainer.style.display = "flex";
            searchInput.focus();
        } else {
            searchContainer.style.display = "none";
            suggestionsBox.style.display = "none";
            searchInput.value = "";
        }
    });

    // Manejar entrada de búsqueda
    searchInput.addEventListener("input", () => {
        const text = searchInput.value.trim();
        if (text === "") {
            suggestionsBox.style.display = "none";
            suggestionsBox.innerHTML = "";
            return;
        }

        // Generar sugerencias
        const items = [
            `Buscar "${text}" en noticias`,
            `Buscar "${text}" en videos`,
            `Buscar "${text}" en encuestas`,
            `Buscar "${text}" en partidos políticos`
        ];

        suggestionsBox.innerHTML = items.map(item => `<div>${item}</div>`).join("");
        suggestionsBox.style.display = "block";
    });

    // Seleccionar una sugerencia
    suggestionsBox.addEventListener("click", (e) => {
        if (e.target.tagName === 'DIV') {
            searchInput.value = e.target.textContent;
            suggestionsBox.style.display = "none";
            // Aquí puedes agregar la acción al seleccionar un resultado
        }
    });

    // Ocultar sugerencias al hacer clic fuera
    document.addEventListener("click", (e) => {
        if (!searchContainer.contains(e.target) && e.target !== searchIcon) {
            suggestionsBox.style.display = "none";
        }
    });

    // Ocultar sugerencias al presionar Escape
    searchInput.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
            suggestionsBox.style.display = "none";
        }
    });
});