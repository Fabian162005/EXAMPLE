document.addEventListener("DOMContentLoaded", function () {
    const crearBtn = document.querySelector(".btn-cre");
    const formNoticia = document.getElementById("form-noticia");

    // Obtener o crear overlay
    let overlay = document.getElementById("overlay");
    if (!overlay) {
        overlay = document.createElement("div");
        overlay.id = "overlay";
        document.body.appendChild(overlay);
    }

    // Estilos para centrar el formulario al mostrarlo
    function centrarFormulario(formulario) {
        formulario.style.position = "fixed";
        formulario.style.top = "50%";
        formulario.style.left = "50%";
        formulario.style.transform = "translate(-50%, -50%)";
        formulario.style.zIndex = "10000";
    }

    // Mostrar formulario y overlay
    crearBtn.addEventListener("click", function () {
        centrarFormulario(formNoticia);
        formNoticia.style.display = "block";
        overlay.style.display = "block";
    });

    // Ocultar al hacer clic en el overlay
    overlay.addEventListener("click", function () {
        formNoticia.style.display = "none";
        overlay.style.display = "none";
    });
});
