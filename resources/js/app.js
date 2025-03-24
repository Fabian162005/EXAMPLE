require('./bootstrap');
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("search-icon").addEventListener("click", function() {
        var searchBox = document.querySelector(".search-container");

        // Alternar visibilidad
        if (searchBox.style.display === "none" || searchBox.style.display === "") {
            searchBox.style.display = "flex";
        } else {
            searchBox.style.display = "none";
        }
    });
});
