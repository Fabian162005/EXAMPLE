// public/js/adminslider.js

document.addEventListener('DOMContentLoaded', () => {
  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

  //
  // AGREGAR IMAGEN
  //
  const createButton = document.getElementById('create-buttonS');
  const createModal  = document.getElementById('create-modalS');
  const createClose  = document.querySelector('#create-modalS .close');
  const createForm   = document.getElementById('create-formS');
  const fileInput    = document.getElementById('create-logoS');

  if (createButton && createModal && createClose && createForm && fileInput) {
    createButton.addEventListener('click', () => {
      createModal.style.display = 'block';
    });
    createClose.addEventListener('click', () => {
      createModal.style.display = 'none';
    });
    createForm.addEventListener('submit', e => {
      e.preventDefault();
      const file = fileInput.files[0];
      if (!file) return alert('Selecciona un archivo primero.');

      const formData = new FormData();
      formData.append('image', file);
      formData.append('_token', csrfToken);

      fetch('/admin/slider/upload', {
        method: 'POST',
        headers: { 'X-CSRF-TOKEN': csrfToken },
        body: formData
      })
      .then(res => res.json())
      .then(data => {
        if (data.success) {
          alert('Imagen subida con éxito');
          location.reload();
        } else {
          alert('Error al subir imagen: ' + (data.message || 'desconocido'));
        }
      })
      .catch(err => {
        console.error('Fetch error (upload):', err);
        alert('Ocurrió un error en la conexión al subir.');
      });
    });
  }

  //
  // ELIMINAR IMAGEN
  //
  let imageIdToDelete = null;
  const deleteModal = document.getElementById('delete-modalS');
  const deleteClose = document.querySelector('#delete-modalS .close');
  const btnCancel   = document.getElementById('cancel-delete');
  const btnConfirm  = document.getElementById('confirm-delete');
  const openDeleteButton = document.getElementById('open-delete-buttonS');

  // Abre el modal usando el botón externo
  if (openDeleteButton) {
    openDeleteButton.addEventListener('click', () => {
      const activeSlide = document.querySelector('.carousel-item.active');
      if (activeSlide) {
        imageIdToDelete = activeSlide.getAttribute('data-id');
        deleteModal.style.display = 'block';
      } else {
        alert('No hay ninguna imagen seleccionada.');
      }
    });
  }

  // Abre el modal desde el botón interno de cada slide
  window.openDeleteModal = function(id) {
    imageIdToDelete = id;
    deleteModal.style.display = 'block';
  };

  // Cierra el modal
  if (deleteClose) deleteClose.addEventListener('click', () => deleteModal.style.display = 'none');
  if (btnCancel)   btnCancel.addEventListener('click',   () => deleteModal.style.display = 'none');

  // Confirma y realiza la eliminación
  if (btnConfirm) {
    btnConfirm.addEventListener('click', () => {
      if (!imageIdToDelete) return alert('ID de imagen no definido.');

      fetch(`/admin/slider/${imageIdToDelete}/delete`, {
        method: 'DELETE',
        headers: {
          'X-CSRF-TOKEN': csrfToken,
          'Accept': 'application/json'
        }
      })
      .then(async res => {
        let json;
        try {
          json = await res.json();
        } catch (e) {
          console.error('Invalid JSON response', e);
          throw new Error('La respuesta no es JSON');
        }
        if (!res.ok) {
          console.error('Server returned HTTP', res.status, json);
          throw new Error(json.message || `HTTP ${res.status}`);
        }
        return json;
      })
      .then(data => {
        if (data.success) {
          alert('Imagen eliminada con éxito');
          const slideEl = document.getElementById(`image-${imageIdToDelete}`);
          if (slideEl) slideEl.remove();
          deleteModal.style.display = 'none';
        } else {
          alert('Error al eliminar imagen: ' + data.message);
        }
      })
      .catch(err => {
        console.error('Fetch error (delete):', err);
        alert('Ocurrió un error al eliminar la imagen:\n' + err.message);
      });
    });
  }
});
