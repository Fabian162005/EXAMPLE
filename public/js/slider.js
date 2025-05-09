document.addEventListener("DOMContentLoaded", function () {
    const btnSubirFoto = document.getElementById("btn-subir-foto");
    const formSubirFoto = document.getElementById("form-subir-foto");

    // Crear y configurar el fondo oscuro (overlay)
    let overlay = document.getElementById("overlay");
    if (!overlay) {
        overlay = document.createElement("div");
        overlay.id = "overlay";
        document.body.appendChild(overlay);
    }

    // Mostrar el formulario de subir foto y overlay
    btnSubirFoto.addEventListener("click", function () {
        formSubirFoto.style.display = "block";
        overlay.style.display = "block";

        // Centrando el formulario en el centro de la pantalla
        formSubirFoto.style.position = "fixed";
        formSubirFoto.style.top = "50%";
        formSubirFoto.style.left = "50%";
        formSubirFoto.style.transform = "translate(-50%, -50%)";
    });

    // Ocultar el formulario y el overlay al hacer clic fuera del formulario (sobre el overlay)
    overlay.addEventListener("click", function () {
        formSubirFoto.style.display = "none";
        overlay.style.display = "none";
    });
});
