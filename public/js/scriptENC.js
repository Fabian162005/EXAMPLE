let currentPage = 1;
const totalPages = 3;

document.addEventListener('DOMContentLoaded', () => {
    showPage(currentPage);
    document.getElementById('encuestaForm').addEventListener('submit', handleSubmit);
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
        alert('Por favor, complete los campos requeridos antes de continuar.');
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
        alert('Por favor, complete los campos requeridos antes de enviar.');
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
        alert("Error interno al enviar el formulario. Consulta la consola.");
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
                alert(errorData.message || 'Ya has votado desde esta IP. No puedes votar nuevamente.');
                return;
            }
            throw new Error(await response.text());
        }

        await response.json();
        alert('¡Encuesta enviada con éxito! Gracias por participar.');
        form.style.display = 'none';

    } catch (error) {
        console.error('Error al enviar la encuesta:', error);
        alert('Error al enviar. Ver consola para más detalles.');
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
        <button type="button" onclick="eliminarPregunta(this)">Eliminar Pregunta</button>
        <div class="opciones-container"></div>
        <button type="button" onclick="agregarOpcion(this, 'nueva')">Agregar Opción</button>
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
        <button type="button" onclick="eliminarOpcion(this)">Eliminar Opción</button>
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
