document.addEventListener("DOMContentLoaded", () => {
  // === VARIABLES ===
  const createButtonS = document.getElementById("create-buttonS");
  const createModalS = document.getElementById("create-modalS");
  const closeModalCreateS = createModalS?.querySelector(".close");
  const createFormS = document.getElementById("create-formS");
  const createLogoInputS = document.getElementById("create-logoS");
  const carouselInner = document.querySelector(".carousel-inner");
  const imageLimitWarning = document.getElementById("image-limit-warning");

  const deleteModalS = document.getElementById("delete-modalS");
  const confirmDeleteButton = document.getElementById("confirm-delete");
  const cancelDeleteButton = document.getElementById("cancel-delete");
  const filenameToDeleteElem = document.getElementById("filename-to-delete");

  const adminLoginBtn = document.getElementById("admin-login");

  let slides = [];
  let imageToDelete = null;
  const MAX_IMAGES = 5;

  // === FUNCIONES ===

  // Agregar nuevo slide
  function addNewSlide(logoSrc, filename) {
    if (slides.length >= MAX_IMAGES) {
      imageLimitWarning?.style?.setProperty("display", "block");
      return;
    }

    const item = document.createElement("div");
    item.className = "carousel-item";
    item.setAttribute("data-filename", filename);
    item.style.position = "relative";

    item.innerHTML = `
      <img src="${logoSrc}" class="d-block w-100" alt="Imagen del slider">
      <div class="mt-2 text-center" style="font-weight: 600; background: rgba(255,255,255,0.8); padding: 4px 0;">
        ${filename}
      </div>
      <button class="btn btn-danger btn-sm delete-btn" 
        style="position: absolute; top: 10px; right: 10px; z-index: 10;"
        type="button"
      >Eliminar</button>
    `;

    carouselInner?.appendChild(item);
    slides.push(filename);

    if (carouselInner?.children.length === 1) {
      item.classList.add("active");
    }

    // Botón eliminar dentro del slide
    const deleteButton = item.querySelector(".delete-btn");
    deleteButton?.addEventListener("click", () => showDeleteModal(item));
  }

  // Mostrar modal de confirmación
  function showDeleteModal(imageElement) {
    imageToDelete = imageElement;

    const filename = imageElement.getAttribute("data-filename") || "Nombre no disponible";
    if (filenameToDeleteElem) filenameToDeleteElem.textContent = filename;

    if (deleteModalS) deleteModalS.style.display = "block";
  }

  // Eliminar slide
  function deleteSlide() {
    if (!imageToDelete) return;

    const wasActive = imageToDelete.classList.contains("active");

    imageToDelete.remove();
    slides = slides.filter(name => name !== imageToDelete.getAttribute("data-filename"));

    if (wasActive && carouselInner?.children.length > 0) {
      carouselInner.children[0].classList.add("active");
    }

    imageToDelete = null;
    if (deleteModalS) deleteModalS.style.display = "none";
  }

  // Mostrar/ocultar íconos sociales según ancho
  function toggleSocialIcons() {
    const socialIcons = document.querySelector(".social-icons");
    if (!socialIcons) return;

    socialIcons.style.display = window.innerWidth <= 1024 ? "none" : "flex";
  }

  // === EVENTOS ===

  // Confirmar eliminación
  if (confirmDeleteButton) {
    confirmDeleteButton.addEventListener("click", deleteSlide);
  }

  // Cancelar eliminación
  if (cancelDeleteButton && deleteModalS) {
    cancelDeleteButton.addEventListener("click", () => {
      deleteModalS.style.display = "none";
      imageToDelete = null;
    });
  }

  // Cerrar modal de creación
  if (closeModalCreateS && createModalS) {
    closeModalCreateS.addEventListener("click", () => {
      createModalS.style.display = "none";
    });
  }

  // Abrir modal de creación
  if (createButtonS && createModalS && imageLimitWarning) {
    createButtonS.addEventListener("click", () => {
      createModalS.style.display = "flex";
      imageLimitWarning.style.display = "none";
    });
  }

  // Subir imagen al formulario
  if (createFormS && createLogoInputS && createModalS) {
    createFormS.addEventListener("submit", (e) => {
      e.preventDefault();

      const file = createLogoInputS.files[0];
      if (!file) {
        alert("Por favor, selecciona una imagen.");
        return;
      }

      const reader = new FileReader();
      reader.onload = (event) => {
        addNewSlide(event.target.result, file.name);
        createFormS.reset();
        createModalS.style.display = "none";
      };
      reader.readAsDataURL(file);
    });
  }

  // Cerrar modal de eliminación al hacer clic fuera
  if (deleteModalS) {
    window.addEventListener("click", (e) => {
      if (e.target === deleteModalS) {
        deleteModalS.style.display = "none";
        imageToDelete = null;
      }
    });
  }

  // Redirigir a dashboard de administrador
  if (adminLoginBtn) {
    adminLoginBtn.addEventListener("click", () => {
      window.location.href = "/admin/dashboard";
    });
  }

  // Responsividad de íconos sociales
  toggleSocialIcons(); // Ejecutar al cargar
  window.addEventListener("resize", toggleSocialIcons);
});
