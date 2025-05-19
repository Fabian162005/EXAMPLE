document.addEventListener("DOMContentLoaded", function () {
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

        suggestionsBox.innerHTML = items.map(item => `<div>${item}</div>`).join("");
        suggestionsBox.style.display = "block";
    });
});
