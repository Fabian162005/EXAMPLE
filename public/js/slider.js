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

document.getElementById('inputImagen').addEventListener('change', function (e) {
    const archivo = e.target.files[0];
    const mensajeError = document.getElementById('mensajeError');

    if (!archivo) return;

    const img = new Image();
    img.src = URL.createObjectURL(archivo);

    img.onload = function () {
        const ancho = img.width;
        const alto = img.height;
        const proporcion = ancho / alto;
        const proporciónEsperada = 16 / 9;
        const tolerancia = 0.1; // ±10% de margen

        if (Math.abs(proporcion - proporciónEsperada) > tolerancia) {
            mensajeError.textContent = "⚠️ La imagen debe tener formato rectangular horizontal (relación 16:9, por ejemplo 1280x720 px).";
            e.target.value = ""; // Limpia el input
        } else {
            mensajeError.textContent = "";
        }

        URL.revokeObjectURL(img.src);
    };
});

