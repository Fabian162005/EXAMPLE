// admin-login.js
document.getElementById('admin-login').addEventListener('click', function() {
    // Redirigir a la ruta de admin/dashboard
    window.location.href = "/admin/dashboard"; // Puedes ajustar la URL si es necesario
});
document.addEventListener("DOMContentLoaded", () => {
    const createButtonS = document.getElementById("create-buttonS");
    const createModalS = document.getElementById("create-modalS");
    const closeModalCreateS = createModalS.querySelector(".close");
    const createFormS = document.getElementById("create-formS");
    const createLogoInputS = document.getElementById("create-logoS");
    const carouselInner = document.querySelector(".carousel-inner");
    const imageLimitWarning = document.getElementById("image-limit-warning");
  
    const deleteModalS = document.getElementById("delete-modalS");
    const confirmDeleteButton = document.getElementById("confirm-delete");
    const cancelDeleteButton = document.getElementById("cancel-delete");
  
    let slides = [];
    let imageToDelete = null; // Para almacenar la imagen seleccionada para eliminación
  
    // Esta función se encarga de agregar las nuevas imágenes al carrusel
    function addNewSlide(logoSrc) {
      if (slides.length >= 5) {
        imageLimitWarning.style.display = "block"; // Muestra el mensaje si se intenta agregar más de 5 imágenes
        return;
      }
  
      const item = document.createElement("div");
      item.className = "carousel-item";
      item.innerHTML = `
        <img src="${logoSrc}" class="d-block w-100" alt="Imagen del slider">
        <button class="btn btn-danger btn-sm delete-btn">Eliminar</button>
      `;
      carouselInner.appendChild(item);
      slides.push(logoSrc); // Agregar la imagen a la lista
  
      // Agregar el evento de eliminar a este botón de la nueva imagen
      const deleteButton = item.querySelector(".delete-btn");
      deleteButton.addEventListener("click", () => {
        showDeleteModal(item);
      });
  
      // Si es el primer item, le agregamos la clase 'active' para mostrarlo inicialmente
      if (carouselInner.children.length === 1) {
        item.classList.add("active");
      }
    }
  
    // Función para mostrar el modal de eliminación
    function showDeleteModal(imageElement) {
      imageToDelete = imageElement; // Asignar la imagen seleccionada a eliminar
      deleteModalS.style.display = "block"; // Mostrar el modal de eliminación
    }
  
    // Función para eliminar la imagen
    function deleteSlide() {
      if (imageToDelete) {
        imageToDelete.remove(); // Eliminar la imagen seleccionada
        slides.pop(); // Eliminar la última imagen del array
        // Si el slider se queda vacío, establece el primer item como activo
        if (carouselInner.children.length > 0) {
          carouselInner.children[0].classList.add("active");
        }
        deleteModalS.style.display = "none"; // Cerrar el modal
      }
    }
  
    // Confirmar eliminación
    confirmDeleteButton.addEventListener("click", () => {
      deleteSlide();
    });
  
    // Cancelar eliminación
    cancelDeleteButton.addEventListener("click", () => {
      deleteModalS.style.display = "none"; // Cerrar el modal
      imageToDelete = null; // Limpiar la imagen seleccionada
    });
  
    // Abrir el modal al hacer clic en "Agregar Imagen"
    createButtonS.addEventListener("click", () => {
      createModalS.style.display = "block";
      imageLimitWarning.style.display = "none"; // Ocultar advertencia al abrir el modal
    });
  
    // Cerrar el modal al hacer clic en la "X"
    closeModalCreateS.addEventListener("click", () => {
      createModalS.style.display = "none";
    });
  
    // Enviar el formulario para agregar la imagen
    createFormS.addEventListener("submit", (e) => {
      e.preventDefault();
  
      const file = createLogoInputS.files[0]; // Obtener el archivo de la imagen
      if (!file) {
        alert("Por favor, selecciona una imagen.");
        return;
      }
  
      const reader = new FileReader();
      reader.onload = (event) => {
        addNewSlide(event.target.result); // Agregar la nueva imagen al carrusel
        createFormS.reset(); // Limpiar el formulario
        createModalS.style.display = "none"; // Cerrar el modal
      };
      reader.readAsDataURL(file); // Leer el archivo seleccionado como URL
    });
  });
  