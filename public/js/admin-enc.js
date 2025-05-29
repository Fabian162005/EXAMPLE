// Función para mostrar notificaciones profesionales
function showAlert(message, type = 'success') {
  const alertContainer = document.createElement('div');
  alertContainer.className = `alert-notification ${type}`;
  alertContainer.innerHTML = `
    <div class="alert-icon">
      ${type === 'success' ? '✓' : '✗'}
    </div>
    <div class="alert-content">
      <div class="alert-title">${type === 'success' ? 'Éxito' : 'Error'}</div>
      <div class="alert-message">${message}</div>
    </div>
    <div class="alert-close" onclick="this.parentElement.remove()">×</div>
  `;

  document.body.appendChild(alertContainer);
  
  // Estilos dinámicos para las alertas
  const style = document.createElement('style');
  style.textContent = `
    .alert-notification {
      position: fixed;
      top: 20px;
      right: 20px;
      min-width: 300px;
      max-width: 400px;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      display: flex;
      align-items: center;
      z-index: 9999;
      transform: translateX(150%);
      animation: slideIn 0.5s forwards, fadeOut 0.5s 3.5s forwards;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    .alert-notification.success {
      background: linear-gradient(135deg, #4CAF50, #2E7D32);
      color: white;
    }
    
    .alert-notification.error {
      background: linear-gradient(135deg, #F44336, #C62828);
      color: white;
    }
    
    .alert-icon {
      font-size: 24px;
      margin-right: 15px;
      font-weight: bold;
    }
    
    .alert-content {
      flex: 1;
    }
    
    .alert-title {
      font-weight: bold;
      font-size: 16px;
      margin-bottom: 5px;
    }
    
    .alert-message {
      font-size: 14px;
      line-height: 1.4;
    }
    
    .alert-close {
      margin-left: 15px;
      cursor: pointer;
      font-size: 20px;
      opacity: 0.7;
      transition: opacity 0.2s;
    }
    
    .alert-close:hover {
      opacity: 1;
    }
    
    @keyframes slideIn {
      to { transform: translateX(0); }
    }
    
    @keyframes fadeOut {
      to { opacity: 0; visibility: hidden; }
    }
  `;
  document.head.appendChild(style);
  
  // Eliminar el estilo después de que la alerta desaparezca
  setTimeout(() => {
    style.remove();
    alertContainer.remove();
  }, 4000);
}

// Función para mostrar confirmación profesional
async function showConfirm(message) {
  return new Promise((resolve) => {
    const confirmContainer = document.createElement('div');
    confirmContainer.className = 'confirm-dialog';
    confirmContainer.innerHTML = `
      <div class="confirm-content">
        <div class="confirm-message">${message}</div>
        <div class="confirm-buttons">
          <button class="confirm-btn confirm-no">Cancelar</button>
          <button class="confirm-btn confirm-yes">Aceptar</button>
        </div>
      </div>
    `;
    
    document.body.appendChild(confirmContainer);
    
    // Estilos dinámicos para el diálogo de confirmación
    const style = document.createElement('style');
    style.textContent = `
      .confirm-dialog {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 10000;
        animation: fadeIn 0.3s;
      }
      
      .confirm-content {
        background: white;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        max-width: 400px;
        width: 90%;
        text-align: center;
      }
      
      .confirm-message {
        font-size: 16px;
        margin-bottom: 20px;
        color: #333;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }
      
      .confirm-buttons {
        display: flex;
        justify-content: center;
        gap: 15px;
      }
      
      .confirm-btn {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        transition: all 0.2s;
      }
      
      .confirm-yes {
        background: linear-gradient(135deg, #4CAF50, #2E7D32);
        color: white;
      }
      
      .confirm-no {
        background: #f1f1f1;
        color: #333;
      }
      
      .confirm-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2);
      }
      
      @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
      }
    `;
    document.head.appendChild(style);
    
    // Manejar eventos de los botones
    const btnYes = confirmContainer.querySelector('.confirm-yes');
    const btnNo = confirmContainer.querySelector('.confirm-no');
    
    const cleanUp = () => {
      confirmContainer.remove();
      style.remove();
    };
    
    btnYes.addEventListener('click', () => {
      cleanUp();
      resolve(true);
    });
    
    btnNo.addEventListener('click', () => {
      cleanUp();
      resolve(false);
    });
  });
}

document.addEventListener('DOMContentLoaded', () => {
  loadEncuestas();       // Carga encuestas para eliminar
  loadCategorias();      // Carga categorías para crear
  renderEncuestasAgrupadas();

  const selectEncuestaDelete = document.getElementById('encuestaSelect');
  const formCreateEncuesta = document.getElementById('formCreateEncuesta');
  const btnConfirmDelete = document.getElementById('btnEliminarEncuesta');

  if (!selectEncuestaDelete || !formCreateEncuesta || !btnConfirmDelete) {
    console.error('Faltan elementos necesarios en el DOM');
    return;
  }

  // Activar botón eliminar solo si hay encuesta seleccionada
  selectEncuestaDelete.addEventListener('change', () => {
    btnConfirmDelete.disabled = !selectEncuestaDelete.value;
  });

  // ------------------------
  // Crear encuesta
  // ------------------------
  formCreateEncuesta.addEventListener('submit', async e => {
    e.preventDefault();
    const nombre = document.getElementById('inputNombreCrear')?.value.trim();
    const categoria_id = document.getElementById('selectCategoriaCrear').value;

    if (!nombre) {
      showAlert('El nombre es obligatorio', 'error');
      return;
    }
    if (!categoria_id) {
      showAlert('Selecciona una categoría', 'error');
      return;
    }

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

      showAlert('Encuesta creada exitosamente');
      closeModal('modalCreate');
      formCreateEncuesta.reset();
      await loadEncuestas();
      await renderEncuestasAgrupadas();

    } catch (err) {
      showAlert(err.message, 'error');
      console.error(err);
    }
  });

  // ------------------------
  // Eliminar encuesta
  // ------------------------
  btnConfirmDelete.addEventListener('click', async () => {
    const id = selectEncuestaDelete.value;
    if (!id) {
      showAlert('Selecciona una encuesta para eliminar', 'error');
      return;
    }

    const confirmado = await showConfirm('¿Estás seguro de que deseas eliminar esta encuesta?');
    if (!confirmado) return;

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

      showAlert('Encuesta eliminada exitosamente');
      closeModal('modalDelete');
      await loadEncuestas();
      await renderEncuestasAgrupadas();

    } catch (err) {
      showAlert(err.message, 'error');
      console.error(err);
    }
  });
});

// ------------------------
// Cargar encuestas (solo para eliminar)
// ------------------------
async function loadEncuestas() {
  try {
    const res = await fetch('/api/encuestas');
    if (!res.ok) throw new Error('Error al obtener encuestas');
    const data = await res.json();

    const selectDelete = document.getElementById('encuestaSelect');
    if (!selectDelete) return;

    selectDelete.innerHTML = '<option value="">-- Seleccione una encuesta --</option>';
    if (!Array.isArray(data)) throw new Error('Los datos recibidos no son un array');

    data.forEach(e => {
      const option = document.createElement('option');
      option.value = e.id;
      option.textContent = e.nombre;
      selectDelete.appendChild(option);
    });

  } catch (err) {
    showAlert('Error al cargar las encuestas', 'error');
    console.error(err);
  }
}

// ------------------------
// Cargar categorías para crear encuesta
// ------------------------
async function loadCategorias() {
  try {
    const res = await fetch('/api/categorias');
    if (!res.ok) throw new Error('Error al obtener categorías');
    const categorias = await res.json();

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
    showAlert('Error al cargar las categorías', 'error');
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
// Renderizar encuestas agrupadas por categoría
// ------------------------
async function renderEncuestasAgrupadas() {
  try {
    const res = await fetch('/api/encuestas/agrupadas');
    if (!res.ok) throw new Error('Error al obtener encuestas agrupadas');
    const data = await res.json();

    const container = document.getElementById('pollContainer');
    if (!container) return;

    container.innerHTML = '';

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
    showAlert('Error al cargar las encuestas agrupadas', 'error');
    console.error('Error al cargar encuestas agrupadas:', err);
  }
}