document.addEventListener("DOMContentLoaded", () => {
  // Variables del modal de creación
  const createButtonS = document.getElementById("create-buttonS");
  const createModalS = document.getElementById("create-modalS");
  const closeModalCreateS = createModalS?.querySelector(".close");
  const createFormS = document.getElementById("create-formS");
  const createLogoInputS = document.getElementById("create-logoS");
  const carouselInner = document.querySelector(".carousel-inner");
  const imageLimitWarning = document.getElementById("image-limit-warning");

  // Variables del modal de eliminación
  const deleteModalS = document.getElementById("delete-modalS");
  const confirmDeleteButton = document.getElementById("confirm-delete");
  const cancelDeleteButton = document.getElementById("cancel-delete");
  const filenameToDeleteElem = document.getElementById("filename-to-delete");

  let slides = [];
  let imageToDelete = null;
  const MAX_IMAGES = 5;

  // Función para agregar un slide nuevo al carrusel
  function addNewSlide(logoSrc, filename) {
    if (slides.length >= MAX_IMAGES) {
      imageLimitWarning.style.display = "block";
      return;
    }

    // Crear el elemento slide
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

    carouselInner.appendChild(item);
    slides.push(filename);

    // Si es el primer slide, activar la clase 'active'
    if (carouselInner.children.length === 1) {
      item.classList.add("active");
    }

    // Asignar evento click al botón eliminar del nuevo slide
    const deleteButton = item.querySelector(".delete-btn");
    deleteButton.addEventListener("click", () => showDeleteModal(item));
  }

  // Mostrar modal de confirmación para eliminar slide
  function showDeleteModal(imageElement) {
    imageToDelete = imageElement;

    const filename = imageElement.getAttribute('data-filename') || 'Nombre no disponible';
    filenameToDeleteElem.textContent = filename;

    deleteModalS.style.display = "block";
  }

  // Eliminar el slide seleccionado y actualizar carrusel
  function deleteSlide() {
    if (!imageToDelete) return;

    const wasActive = imageToDelete.classList.contains("active");

    imageToDelete.remove();
    slides = slides.filter(name => name !== imageToDelete.getAttribute("data-filename"));

    if (wasActive && carouselInner.children.length > 0) {
      carouselInner.children[0].classList.add("active");
    }

    imageToDelete = null;
    deleteModalS.style.display = "none";
  }

  // Eventos botones confirmar y cancelar eliminación
  confirmDeleteButton.addEventListener("click", deleteSlide);
  cancelDeleteButton.addEventListener("click", () => {
    deleteModalS.style.display = "none";
    imageToDelete = null;
  });

  // Evento para cerrar modal de creación
  closeModalCreateS?.addEventListener("click", () => {
    createModalS.style.display = "none";
  });

  // Evento para abrir modal de creación
  createButtonS?.addEventListener("click", () => {
    createModalS.style.display = "flex";
    imageLimitWarning.style.display = "none";
  });

  // Manejo del formulario para agregar imagen al slider
  createFormS?.addEventListener("submit", (e) => {
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

  // Cerrar modal eliminar si se hace clic fuera del contenido
  window.addEventListener("click", (e) => {
    if (e.target === deleteModalS) {
      deleteModalS.style.display = "none";
      imageToDelete = null;
    }
  });

  // Manejo botón admin-login (si existe)
  const adminLoginBtn = document.getElementById('admin-login');
  if(adminLoginBtn){
    adminLoginBtn.addEventListener('click', () => {
      window.location.href = "/admin/dashboard"; // Ajusta si la ruta cambia
    });
  }

  // Mostrar u ocultar iconos sociales según tamaño ventana
  function toggleSocialIcons() {
    const socialIcons = document.querySelector('.social-icons');
    if (!socialIcons) return;

    if (window.innerWidth <= 1024) {
      socialIcons.style.display = 'none';
    } else {
      socialIcons.style.display = 'flex';
    }
  }

  // Ejecutar al cargar y al redimensionar
  window.addEventListener('load', toggleSocialIcons);
  window.addEventListener('resize', toggleSocialIcons);
});
