document.addEventListener("DOMContentLoaded", () => {
    const searchIcon = document.getElementById("search-icon");
    const searchContainer = document.getElementById("search-container");
    const searchInput = document.getElementById("search-input");
    const suggestionsBox = document.getElementById("search-suggestions");

    let isOpen = false;

    searchIcon.addEventListener("click", () => {
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

    searchInput.addEventListener("input", () => {
        const text = searchInput.value.trim();
        if (text === "") {
            suggestionsBox.style.display = "none";
            suggestionsBox.innerHTML = "";
            return;
        }

        const items = [
            `Buscar "${text}" en noticias`,
            `Buscar "${text}" en videos`,
            `Buscar "${text}" en encuestas`,
            `Buscar "${text}" en partidos políticos`
        ];

        suggestionsBox.innerHTML = items.map(item => `<div class="suggestion-item">${item}</div>`).join("");
        suggestionsBox.style.display = "block";

        // Agregar eventos de clic a cada sugerencia
        const suggestionItems = document.querySelectorAll(".suggestion-item");
        suggestionItems.forEach(item => {
            item.addEventListener("click", () => {
                const clickedText = item.textContent;
                // Puedes extraer el tipo de búsqueda si lo necesitas
                const query = searchInput.value.trim();
                const categoria = clickedText.match(/en (.+)$/i)?.[1] || 'general';

                // Redirigir pasando tanto query como categoria
                window.location.href = `/buscar?query=${encodeURIComponent(query)}&categoria=${encodeURIComponent(categoria)}`;
            });
        });
    });

    searchInput.addEventListener("keydown", (event) => {
        if (event.key === "Enter") {
            event.preventDefault();
            const query = searchInput.value.trim();
            if (query !== "") {
                window.location.href = `/buscar?query=${encodeURIComponent(query)}`;
            }
        }
    });
});
