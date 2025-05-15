document.addEventListener("DOMContentLoaded", () => {
    // CREAR NOTICIA - Mostrar/Ocultar modal
    const btnCrear = document.querySelector(".btn-cre");
    const btnCerrarCrear = document.getElementById("btn-cerrar-noticia");
    const formNoticia = document.getElementById("form-noticia");

    if (btnCrear && formNoticia) {
        btnCrear.addEventListener("click", () => {
            formNoticia.style.display = "flex"; // mostramos modal crear noticia centrado
        });
    }

    if (btnCerrarCrear && formNoticia) {
        btnCerrarCrear.addEventListener("click", () => {
            formNoticia.style.display = "none"; // ocultamos modal crear noticia
        });
    }

    // ELIMINAR NOTICIA - Mostrar/Ocultar modal
    const btnEliminar = document.querySelector(".btn-eli");
    const modalEliminar = document.getElementById("modal-eliminar-noticia");
    const btnCerrarEliminar = document.getElementById("btn-cerrar-eliminar");

    if (btnEliminar && modalEliminar) {
        btnEliminar.addEventListener("click", () => {
            modalEliminar.style.display = "flex"; // mostramos modal eliminar noticia centrado
        });
    }

    if (btnCerrarEliminar && modalEliminar) {
        btnCerrarEliminar.addEventListener("click", () => {
            modalEliminar.style.display = "none"; // ocultamos modal eliminar noticia
        });
    }

    // ACTUALIZAR DINÁMICAMENTE el action del form eliminar según noticia seleccionada
    const selectNoticia = document.getElementById("noticia_id");
    const formEliminar = document.getElementById("form-eliminar-noticia");

    if (selectNoticia && formEliminar) {
        selectNoticia.addEventListener("change", () => {
            const noticiaId = selectNoticia.value;
            if (noticiaId) {
                formEliminar.action = `/noticias/${noticiaId}`;
            } else {
                formEliminar.action = ""; // acción vacía si no hay noticia seleccionada
            }
        });
    }
});

document.addEventListener("DOMContentLoaded", () => {
  // EDITAR NOTICIA - Mostrar/Ocultar
  const btnEditar      = document.querySelector(".btn-edi");
  const modalEditar    = document.getElementById("modal-editar-noticia");
  const btnCerrarEditar= document.getElementById("btn-cerrar-editar");

  if (btnEditar && modalEditar) {
    btnEditar.addEventListener("click", () => {
      modalEditar.style.display = "flex";
    });
  }
  if (btnCerrarEditar && modalEditar) {
    btnCerrarEditar.addEventListener("click", () => {
      modalEditar.style.display = "none";
    });
  }

  // Rellenar formulario al seleccionar noticia
  const selectEditar   = document.getElementById("editar_noticia_id");
  const formEditar     = document.getElementById("form-editar-noticia");
  const inputTitulo    = document.getElementById("editar_titulo");
  const textareaDesc   = document.getElementById("editar_descripcion");
  const previewFoto    = document.getElementById("preview-foto");
  const previewVideo   = document.getElementById("preview-video");

  selectEditar.addEventListener("change", () => {
    const opt      = selectEditar.selectedOptions[0];
    const id       = opt.value;
    const titulo   = opt.dataset.titulo;
    const descr    = opt.dataset.descripcion;
    const fotoUrl  = opt.dataset.fotoUrl;
    const videoUrl = opt.dataset.videourl || "";

    // Actualiza action del form
    formEditar.action = `/noticias/${id}`;

    // Rellena campos
    inputTitulo.value  = titulo;
    textareaDesc.value = descr;

    // Preview
    if (fotoUrl) {
      previewFoto.src = fotoUrl;
      previewFoto.style.display = "block";
    } else {
      previewFoto.style.display = "none";
    }
    if (videoUrl) {
      previewVideo.src = videoUrl;
      previewVideo.style.display = "block";
    } else {
      previewVideo.style.display = "none";
    }
  });
});
