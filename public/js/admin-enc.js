document.addEventListener('DOMContentLoaded', () => {
  loadEncuestas();
  loadCategorias();
  renderEncuestasAgrupadas();

  const selectEncuestaEdit = document.getElementById('selectEncuestaEdit');
  const inputNombreEditar = document.getElementById('inputNombreEditar');
  const formCreateEncuesta = document.getElementById('formCreateEncuesta');
  const formEditEncuesta = document.getElementById('formEditEncuesta');
  const btnConfirmDelete = document.querySelector('.btn-confirm-delete');
  const selectCategoriaCrear = document.getElementById('selectCategoriaCrear');

  if (!selectEncuestaEdit || !inputNombreEditar || !formCreateEncuesta || !formEditEncuesta || !btnConfirmDelete || !selectCategoriaCrear) {
    console.error('Faltan elementos necesarios en el DOM');
    return;
  }

  // ------------------------
  // Cargar nombre al seleccionar encuesta
  // ------------------------
  selectEncuestaEdit.addEventListener('change', async () => {
    const selectedId = selectEncuestaEdit.value;
    inputNombreEditar.value = '';
    if (!selectedId) return;

    try {
      const res = await fetch(`/api/encuestas/${selectedId}`);
      const data = await res.json();
      inputNombreEditar.value = data.nombre || '';
    } catch (err) {
      alert('Error al cargar encuesta');
      console.error(err);
    }
  });

  // ------------------------
  // Crear encuesta
  // ------------------------
  formCreateEncuesta.addEventListener('submit', async e => {
    e.preventDefault();
    const nombre = document.getElementById('inputNombreCrear')?.value.trim();
    const categoria_id = selectCategoriaCrear.value;

    if (!nombre) return alert('El nombre es obligatorio');
    if (!categoria_id) return alert('Selecciona una categoría');

    try {
      const res = await fetch('/api/encuestas', {
        method: 'POST',
        headers: { 
          'Content-Type': 'application/json',
          'Accept': 'application/json'
        },
        body: JSON.stringify({ nombre, categoria_id }),
      });

      if (!res.ok) {
        const errorData = await res.text();
        throw new Error(`Error al crear encuesta: ${errorData}`);
      }

      alert('Encuesta creada');
      closeModal('modalCreate');
      formCreateEncuesta.reset();
      await loadEncuestas();

    } catch (err) {
      alert(err.message);
      console.error(err);
    }
  });

  // ------------------------
  // Editar encuesta
  // ------------------------
  formEditEncuesta.addEventListener('submit', async e => {
    e.preventDefault();
    const id = selectEncuestaEdit.value;
    const nombre = inputNombreEditar.value.trim();

    if (!id) return alert('Selecciona una encuesta para editar');
    if (!nombre) return alert('El nombre es obligatorio');

    try {
      const res = await fetch(`/api/encuestas/${id}`, {
        method: 'PUT',
        headers: { 
          'Content-Type': 'application/json',
          'Accept': 'application/json'
        },
        body: JSON.stringify({ nombre }),
      });

      if (!res.ok) {
        const errorData = await res.text();
        throw new Error(`Error al actualizar encuesta: ${errorData}`);
      }

      alert('Encuesta actualizada');
      closeModal('modalEdit');
      await loadEncuestas();

    } catch (err) {
      alert(err.message);
      console.error(err);
    }
  });

  // ------------------------
  // Eliminar encuesta
  // ------------------------
  btnConfirmDelete.addEventListener('click', async () => {
    const id = selectEncuestaEdit.value;
    if (!id) return alert('Selecciona una encuesta para eliminar');
    if (!confirm('¿Seguro que quieres eliminar esta encuesta?')) return;

    try {
      const res = await fetch(`/api/encuestas/${id}`, {
        method: 'DELETE',
        headers: {
          'Accept': 'application/json'
        }
      });

      if (!res.ok) {
        const errorData = await res.text();
        throw new Error(`Error al eliminar encuesta: ${errorData}`);
      }

      alert('Encuesta eliminada');
      closeModal('modalDelete');
      await loadEncuestas();

    } catch (err) {
      alert(err.message);
      console.error(err);
    }
  });
});

// ------------------------
// Cargar encuestas
// ------------------------
async function loadEncuestas() {
  try {
    const res = await fetch('/api/encuestas');
    const data = await res.json();

    const selectEdit = document.getElementById('selectEncuestaEdit');
    if (!selectEdit) return;

    selectEdit.innerHTML = '<option value="">Selecciona encuesta</option>';
    if (!Array.isArray(data)) throw new Error('Los datos recibidos no son un array');

    data.forEach(e => {
      const option = document.createElement('option');
      option.value = e.id;
      option.textContent = e.nombre;
      selectEdit.appendChild(option);
    });

    document.getElementById('inputNombreEditar').value = '';
  } catch (err) {
    alert('Error al cargar encuestas');
    console.error(err);
  }
}

// ------------------------
// Cargar categorías
// ------------------------
async function loadCategorias() {
  try {
    const res = await fetch('/api/categorias');
    const text = await res.text();
    const categorias = JSON.parse(text);

    const select = document.getElementById('selectCategoriaCrear');
    if (!select) return;

    select.innerHTML = '<option value="">Selecciona categoría</option>';
    categorias.forEach(cat => {
      const option = document.createElement('option');
      option.value = cat.id;
      option.textContent = cat.nombre;
      select.appendChild(option);
    });
  } catch (err) {
    alert('Error al cargar categorías');
    console.error(err);
  }
}

// ------------------------
// Funciones modales
// ------------------------
window.openModal = id => {
  const modal = document.getElementById(id);
  if (modal) modal.style.display = 'flex';
};

window.closeModal = id => {
  const modal = document.getElementById(id);
  if (modal) modal.style.display = 'none';
};

// ------------------------
// Cerrar modal al hacer clic fuera
// ------------------------
window.addEventListener('click', e => {
  document.querySelectorAll('.modal').forEach(modal => {
    if (e.target === modal) modal.style.display = 'none';
  });
});

// ------------------------
// Toggle encuestas
// ------------------------

async function renderEncuestasAgrupadas() {
  try {
    const res = await fetch('/api/encuestas/agrupadas');
    const data = await res.json();

    const container = document.getElementById('pollContainer');
    if (!container) return;

    container.innerHTML = ''; // Limpia el contenido anterior

    data.forEach(cat => {
      const wrapper = document.createElement('div');
      wrapper.classList.add('poll-group');

      wrapper.innerHTML = `
        <button class="poll-toggle" data-target="content-${cat.id}">
          ${cat.nombre} <i class="fas fa-chevron-down"></i>
        </button>
        <div id="content-${cat.id}" class="poll-content" style="display: none;">
          ${cat.encuestas.map(e => `<div class="poll-item">${e.nombre}</div>`).join('')}
        </div>
      `;

      container.appendChild(wrapper);
    });

    // Eventos toggle para cada categoría
    document.querySelectorAll('.poll-toggle').forEach(toggle => {
      toggle.addEventListener('click', () => {
        const targetId = toggle.getAttribute('data-target');
        const content = document.getElementById(targetId);
        const icon = toggle.querySelector('i');

        if (!content) return;

        const isVisible = content.style.display === 'block';
        content.style.display = isVisible ? 'none' : 'block';

        if (icon) {
          icon.classList.toggle('fa-chevron-down', isVisible);
          icon.classList.toggle('fa-chevron-up', !isVisible);
        }
      });
    });

  } catch (err) {
    console.error('Error al cargar encuestas agrupadas:', err);
  }
}

