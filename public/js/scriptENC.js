// Variables globales
let currentPage = 1;
const totalPages = 3;

// Mostrar la página actual y actualizar barra de progreso
function showPage(pageNumber) {
    const pages = document.querySelectorAll('.page');
    pages.forEach(page => page.classList.remove('active'));

    const current = document.getElementById('page' + pageNumber);
    if (current) current.classList.add('active');

    // Actualizar barra de progreso
    const progressBar = document.getElementById('progressBar');
    if (progressBar) {
        const percent = (pageNumber / totalPages) * 100;
        progressBar.style.width = percent + '%';
    }

    currentPage = pageNumber;
}

// Validar los campos requeridos en la página actual
function validatePage(pageElement) {
    if (!pageElement) return false;

    // Para inputs required, verificar si están completos
    const requiredFields = pageElement.querySelectorAll('[required]');
    for (const field of requiredFields) {
        if (field.type === 'radio' || field.type === 'checkbox') {
            // Validar que al menos uno del grupo esté seleccionado
            const groupName = field.name;
            // Solo validar el primer input de cada grupo
            if (field === pageElement.querySelector(`input[name="${groupName}"]`)) {
                const checkedGroup = pageElement.querySelectorAll(`input[name="${groupName}"]:checked`);
                if (checkedGroup.length === 0) return false;
            }
        } else {
            if (!field.value.trim()) return false;
        }
    }

    return true;
}

// Botón siguiente: validar y avanzar página
function nextPage(pageNumber) {
    const page = document.getElementById('page' + pageNumber);
    if (!validatePage(page)) {
        alert('Por favor, complete los campos requeridos antes de continuar.');
        return;
    }
    if (pageNumber < totalPages) {
        showPage(pageNumber + 1);
    }
}

// Botón anterior: retroceder página
function prevPage(pageNumber) {
    if (pageNumber > 1) {
        showPage(pageNumber - 1);
    }
}

// Animación en opciones seleccionadas (checkbox o radio)
function animateOption(element) {
    if (!element) return;
    element.classList.add('animate__animated', 'animate__pulse');
    setTimeout(() => {
        element.classList.remove('animate__animated', 'animate__pulse');
    }, 600);
}

// Evento submit del formulario
document.getElementById('encuestaForm').addEventListener('submit', function (e) {
    e.preventDefault();

    // Validar última página antes de enviar
    const currentPageElement = document.getElementById('page' + currentPage);
    if (!validatePage(currentPageElement)) {
        alert('Por favor, complete los campos requeridos antes de enviar.');
        return;
    }

    // Construir array de respuestas con formato { pregunta, respuesta }
    const respuestasObject = {
        sexo: document.getElementById('sexo').value,
        edad: document.getElementById('edad').value,
        satisfaccion: document.querySelector('input[name="satisfaccion"]:checked')?.value || null,
        sugerencias: document.getElementById('sugerencias').value.trim(),
        problemas: Array.from(document.querySelectorAll('input[name="problemas[]"]:checked')).map(el => el.value),
        frecuencia: document.querySelector('input[name="frecuencia"]:checked')?.value || null,
        ultima_participacion: document.getElementById('ultima-participacion').value,
        actividad_deseada: document.getElementById('actividad-deseada').value.trim(),
        calificacion: document.querySelector('input[name="calificacion"]:checked')?.value || null,
        comentarios: document.getElementById('comentarios').value.trim(),
    };


    // Guardar JSON string en input hidden para enviar al backend
    document.getElementById('respuestasInput').value = JSON.stringify(respuestasObject);

    // Preparar formData
    const formData = new FormData(this);

    // Token CSRF
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // Enviar formulario con fetch
    fetch(rutaEncuestasStore, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': token,
            'Accept': 'application/json',
        },
        body: formData
    })
    .then(response => {
        if (!response.ok) throw new Error('Error en la respuesta del servidor');
        return response.json();
    })
    .then(data => {
        mostrarResultadosSimulados();
        this.style.display = 'none';
    })
    .catch(error => {
        alert('Hubo un error al enviar la encuesta. Por favor, intente nuevamente.');
        console.error(error);
    });
});

// Mostrar resultados con Chart.js (datos simulados)
function mostrarResultadosSimulados() {
    const resultadosDiv = document.getElementById('resultados');
    resultadosDiv.style.display = 'block';

    const ctx = document.getElementById('chartResultados').getContext('2d');

    const data = {
        labels: ['Muy insatisfecho', 'Insatisfecho', 'Neutral', 'Satisfecho', 'Muy satisfecho'],
        datasets: [{
            label: 'Satisfacción con servicios municipales',
            data: [5, 10, 15, 40, 30], // Datos simulados
            backgroundColor: [
                'rgba(255, 99, 132, 0.6)',
                'rgba(255, 159, 64, 0.6)',
                'rgba(255, 205, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(54, 162, 235, 0.6)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 205, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    };

    new Chart(ctx, {
        type: 'bar',
        data: data,
        options: {
            responsive: true,
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
}

// Iniciar la encuesta en la primera página
document.addEventListener('DOMContentLoaded', () => {
    showPage(1);
});
