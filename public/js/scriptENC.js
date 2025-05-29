// Sistema de notificaciones profesionales
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
  
  // Animación de entrada
  setTimeout(() => {
    alertContainer.style.transform = 'translateX(0)';
  }, 10);
  
  // Eliminar después de 5 segundos
  setTimeout(() => {
    alertContainer.style.opacity = '0';
    setTimeout(() => alertContainer.remove(), 300);
  }, 5000);
}

// Diálogo de confirmación profesional
async function showConfirm(message) {
  return new Promise((resolve) => {
    const confirmContainer = document.createElement('div');
    confirmContainer.className = 'confirm-dialog';
    confirmContainer.innerHTML = `
      <div class="confirm-backdrop"></div>
      <div class="confirm-box">
        <div class="confirm-header">
          <h3>Confirmación</h3>
        </div>
        <div class="confirm-body">
          <p>${message}</p>
        </div>
        <div class="confirm-footer">
          <button class="confirm-btn confirm-cancel">Cancelar</button>
          <button class="confirm-btn confirm-accept">Aceptar</button>
        </div>
      </div>
    `;
    
    document.body.appendChild(confirmContainer);
    
    // Manejar eventos
    confirmContainer.querySelector('.confirm-cancel').addEventListener('click', () => {
      confirmContainer.remove();
      resolve(false);
    });
    
    confirmContainer.querySelector('.confirm-accept').addEventListener('click', () => {
      confirmContainer.remove();
      resolve(true);
    });
  });
}

// Estilos para las notificaciones (se inyectan dinámicamente)
const style = document.createElement('style');
style.textContent = `
  /* Notificaciones */
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
    transition: all 0.3s ease;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    opacity: 1;
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
  
  /* Diálogos de confirmación */
  .confirm-dialog {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 10000;
  }
  
  .confirm-backdrop {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
  }
  
  .confirm-box {
    background: white;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    width: 90%;
    max-width: 400px;
    z-index: 1;
    animation: modalFadeIn 0.3s;
  }
  
  .confirm-header {
    padding: 15px 20px;
    border-bottom: 1px solid #eee;
  }
  
  .confirm-header h3 {
    margin: 0;
    color: #333;
  }
  
  .confirm-body {
    padding: 20px;
    color: #555;
  }
  
  .confirm-footer {
    padding: 15px 20px;
    border-top: 1px solid #eee;
    display: flex;
    justify-content: flex-end;
    gap: 10px;
  }
  
  .confirm-btn {
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: 500;
    transition: all 0.2s;
  }
  
  .confirm-cancel {
    background-color: #f1f1f1;
    color: #333;
  }
  
  .confirm-cancel:hover {
    background-color: #e0e0e0;
  }
  
  .confirm-accept {
    background: linear-gradient(135deg, #4CAF50, #2E7D32);
    color: white;
  }
  
  .confirm-accept:hover {
    background: linear-gradient(135deg, #3d8b40, #1b5e20);
  }
  
  @keyframes modalFadeIn {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
  }
`;
document.head.appendChild(style);

let currentPage = 1;
const totalPages = 3;

document.addEventListener('DOMContentLoaded', () => {
    showPage(currentPage);

    const modal = document.getElementById('modalEditarEncuesta');
    if (modal) {
        modal.addEventListener('click', e => {
            if (e.target === e.currentTarget) cerrarModal();
        });
    }

    const btnInicio = document.getElementById('btnInicio');
    if (btnInicio) {
        btnInicio.addEventListener('click', () => {
            window.location.href = '/'; 
        });
    }

    const btnResultados = document.getElementById('btnResultados');
    if (btnResultados) {
        btnResultados.addEventListener('click', () => {
            window.location.href = '/verResultados';
        });
    }
});


// Mostrar página actual
function showPage(pageNumber) {
    document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
    const current = document.getElementById(`page${pageNumber}`);
    if (current) current.classList.add('active');

    const progressBar = document.getElementById('progressBar');
    if (progressBar) progressBar.style.width = `${(pageNumber / totalPages) * 100}%`;

    currentPage = pageNumber;
}

// Validación de campos requeridos
function validatePage(pageElement) {
    if (!pageElement) return false;

    const requiredFields = pageElement.querySelectorAll('[required]');
    const validatedGroups = new Set();

    for (const field of requiredFields) {
        if ((field.type === 'radio' || field.type === 'checkbox') && !validatedGroups.has(field.name)) {
            validatedGroups.add(field.name);
            const checked = pageElement.querySelectorAll(`input[name="${field.name}"]:checked`);
            if (checked.length === 0) return false;
        } else if (['SELECT', 'TEXTAREA', 'INPUT'].includes(field.tagName) && !field.value.trim()) {
            return false;
        }
    }
    return true;
}

function nextPage(pageNumber) {
    const page = document.getElementById(`page${pageNumber}`);
    if (!validatePage(page)) {
        showAlert('Por favor, complete los campos requeridos antes de continuar.', 'error');
        return;
    }
    if (pageNumber < totalPages) showPage(pageNumber + 1);
}

function prevPage(pageNumber) {
    if (pageNumber > 1) showPage(pageNumber - 1);
}

function animateOption(element) {
    if (!element) return;
    element.classList.add('animate__animated', 'animate__pulse');
    setTimeout(() => element.classList.remove('animate__animated', 'animate__pulse'), 600);
}

async function handleSubmit(e) {
    e.preventDefault();

    const form = e.target;
    const currentPageElement = document.getElementById(`page${currentPage}`);
    if (!validatePage(currentPageElement)) {
        showAlert('Por favor, complete los campos requeridos antes de enviar.', 'error');
        return;
    }

    // Validación y lectura segura de campos
    const encuestaIdInput = form.querySelector('[name="encuesta_id"]');
    const sexoInput = form.querySelector('[name="sexo"]');
    const edadInput = form.querySelector('[name="edad"]');

    if (!encuestaIdInput || !sexoInput || !edadInput) {
        console.error("Faltan campos requeridos en el formulario:");
        console.error("encuesta_id:", encuestaIdInput);
        console.error("sexo:", sexoInput);
        console.error("edad:", edadInput);
        showAlert("Error interno al enviar el formulario. Consulta la consola.", 'error');
        return;
    }

    const respuestas = Array.from(document.querySelectorAll('.pregunta')).map(container => {
        const preguntaId = container.getAttribute('data-pregunta-id');
        let respuesta = null;

        const checkedRadio = container.querySelector('input[type="radio"]:checked');
        const checkedCheckboxes = container.querySelectorAll('input[type="checkbox"]:checked');
        const textInput = container.querySelector('textarea, input[type="text"], input[type="number"], input[type="date"]');

        if (checkedRadio) {
            respuesta = checkedRadio.value;
        } else if (checkedCheckboxes.length > 0) {
            respuesta = Array.from(checkedCheckboxes).map(cb => cb.value);
        } else if (textInput && textInput.value.trim()) {
            respuesta = textInput.value.trim();
        }

        return { pregunta_id: parseInt(preguntaId), respuesta };
    });

    const payload = {
        encuesta_id: parseInt(encuestaIdInput.value),
        genero: sexoInput.value,
        edad: parseInt(edadInput.value),
        respuestas
    };

    const tokenMeta = document.querySelector('meta[name="csrf-token"]');
    const token = tokenMeta ? tokenMeta.content : '';

    try {
        const response = await fetch('/respuestas', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': token,
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify(payload)
        });

        if (!response.ok) {
            if (response.status === 403) {
                const errorData = await response.json();
                showAlert(errorData.error || 'Ya has votado desde esta IP. No puedes votar nuevamente.', 'error');
                return;
            }
            throw new Error(await response.text());
        }

        await response.json();

        showAlert('¡Encuesta enviada con éxito! Gracias por participar.');

        form.style.display = 'none';

        // Mostrar el div con mensajeGracias
        const mensajeGracias = document.getElementById('mensajeGracias');
        if (mensajeGracias) {
            mensajeGracias.style.display = 'block';
        }

        // Opcional: agregar eventos a los botones para redireccionar
        const btnInicio = document.getElementById('btnInicio');
        if (btnInicio) {
            btnInicio.onclick = () => {
                window.location.href = '/'; // o la ruta que quieras para inicio
            };
        }
        const btnResultados = document.getElementById('btnResultados');
        if (btnResultados) {
            btnResultados.onclick = () => {
                window.location.href = '/resultados'; // o la ruta que uses para resultados
            };
        }

    } catch (error) {
        console.error('Error al enviar la encuesta:', error);
        showAlert('Error al enviar. Ver consola para más detalles.', 'error');
    }
}

// Modal editar encuesta
function abrirModal() {
    const modal = document.getElementById('modalEditarEncuesta');
    modal.style.display = 'flex';
    document.body.classList.add('modal-open');
    document.getElementById('nombreEncuesta').focus();
}

function cerrarModal() {
    const modal = document.getElementById('modalEditarEncuesta');
    modal.style.display = 'none';
    document.body.classList.remove('modal-open');
}

document.getElementById('modalEditarEncuesta').addEventListener('click', e => {
    if (e.target === e.currentTarget) cerrarModal();
});

// Slug dinámico
function generarSlug() {
    const nombre = document.getElementById('nombreEncuesta').value;
    const slug = nombre.trim().toLowerCase()
        .normalize('NFD').replace(/[\u0300-\u036f]/g, '')
        .replace(/[^a-z0-9\s-]/g, '')
        .replace(/\s+/g, '-')
        .replace(/-+/g, '-');
    document.getElementById('slugEncuesta').value = slug;
}

// Editor de preguntas
function agregarPregunta() {
    const container = document.getElementById('preguntasNuevasContainer');
    const id = Date.now();

    const div = document.createElement('div');
    div.className = 'pregunta-editable';
    div.dataset.id = id;
    div.innerHTML = `
        <input type="text" name="preguntas_nuevas[${id}][texto]" required />
        <button type="button" class="btn-eliminar" onclick="eliminarPregunta(this)">Eliminar Pregunta</button>
        <div class="opciones-container"></div>
        <button type="button" class="btn-agregar" onclick="agregarOpcion(this, 'nueva')">Agregar Opción</button>
    `;

    container.appendChild(div);
}

function agregarOpcion(btn, tipo = 'nueva') {
    const preguntaDiv = btn.closest('.pregunta-editable');
    const id = preguntaDiv.dataset.id;
    const opciones = preguntaDiv.querySelector('.opciones-container');

    const div = document.createElement('div');
    div.className = 'opcion-editable';

    const name = tipo === 'existente'
        ? `opciones_existentes[${id}][]`
        : `opciones_nuevas[${id}][]`;

    div.innerHTML = `
        <input type="text" name="${name}" required />
        <button type="button" class="btn-eliminar" onclick="eliminarOpcion(this)">Eliminar Opción</button>
    `;

    opciones.appendChild(div);
}

function eliminarPregunta(btn) {
    const div = btn.closest('.pregunta-editable');
    const id = div.dataset.id;

    if (!isNaN(id)) {
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'preguntas_eliminar[]';
        input.value = id;
        document.getElementById('formEditarEncuesta').appendChild(input);
    }

    div.remove();
}

function eliminarOpcion(btn) {
    const div = btn.closest('.opcion-editable');
    const input = div.querySelector('input[type="text"]');
    const matches = input?.name.match(/\[(\d+)\]$/);

    if (matches) {
        const inputHidden = document.createElement('input');
        inputHidden.type = 'hidden';
        inputHidden.name = 'opciones_eliminar[]';
        inputHidden.value = matches[1];
        document.getElementById('formEditarEncuesta').appendChild(inputHidden);
    }

    div.remove();
}
document.getElementById('btnInicio').addEventListener('click', () => {
    window.location.href = "{{ url('/') }}";  // Redirige a la página principal (app.blade.php)
});

document.getElementById('btnResultados').addEventListener('click', () => {
    window.location.href = "{{ url('/verResultados') }}";  // Redirige a la página de resultados
});
