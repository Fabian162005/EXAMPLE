// Variables globales para control de paginación
let currentPage = 1;
const totalPages = 3; // Ajusta según el número total de páginas de tu encuesta

// Función para mostrar la página indicada y actualizar barra de progreso
function showPage(pageNumber) {
    const pages = document.querySelectorAll('.page');
    pages.forEach(page => page.classList.remove('active'));

    const current = document.getElementById('page' + pageNumber);
    if (current) current.classList.add('active');

    // Actualiza barra de progreso
    const progressBar = document.getElementById('progressBar');
    if (progressBar) {
        const percent = (pageNumber / totalPages) * 100;
        progressBar.style.width = percent + '%';
    }

    currentPage = pageNumber;
}

// Valida que todos los campos requeridos de la página actual estén completos
function validatePage(pageElement) {
    if (!pageElement) return false;

    const requiredFields = pageElement.querySelectorAll('[required]');
    const validatedGroups = new Set();

    for (const field of requiredFields) {
        if (field.type === 'radio' || field.type === 'checkbox') {
            const groupName = field.name;
            if (validatedGroups.has(groupName)) continue;
            validatedGroups.add(groupName);

            const checkedGroup = pageElement.querySelectorAll(`input[name="${groupName}"]:checked`);
            if (checkedGroup.length === 0) return false;

        } else if (['SELECT', 'TEXTAREA', 'INPUT'].includes(field.tagName)) {
            if (!field.value.trim()) return false;
        }
    }
    return true;
}

// Avanza a la siguiente página si está validada
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

// Retrocede a la página anterior
function prevPage(pageNumber) {
    if (pageNumber > 1) {
        showPage(pageNumber - 1);
    }
}

// Animación visual al seleccionar una opción
function animateOption(element) {
    if (!element) return;
    element.classList.add('animate__animated', 'animate__pulse');
    setTimeout(() => {
        element.classList.remove('animate__animated', 'animate__pulse');
    }, 600);
}

// Evento para capturar el submit del formulario de encuesta
document.getElementById('encuestaForm').addEventListener('submit', async function (e) {
    e.preventDefault();

    // Validar página actual antes de enviar
    const currentPageElement = document.getElementById('page' + currentPage);
    if (!validatePage(currentPageElement)) {
        alert('Por favor, complete los campos requeridos antes de enviar.');
        return;
    }

    // Recopilar respuestas de todas las preguntas visibles en el formulario
    const respuestas = [];
    const preguntaContainers = document.querySelectorAll('.pregunta');

    preguntaContainers.forEach(container => {
        const preguntaTexto = container.querySelector('h3')?.innerText.trim() || 'Pregunta sin texto';

        const radios = container.querySelectorAll('input[type="radio"]');
        const checkboxes = container.querySelectorAll('input[type="checkbox"]');
        const textInput = container.querySelector('textarea, input[type="text"], input[type="number"], input[type="date"]');

        let respuesta = null;

        if (radios.length) {
            const checkedRadio = container.querySelector('input[type="radio"]:checked');
            respuesta = checkedRadio ? checkedRadio.value : null;
        } else if (checkboxes.length) {
            const checkedBoxes = container.querySelectorAll('input[type="checkbox"]:checked');
            respuesta = Array.from(checkedBoxes).map(cb => cb.value);
        } else if (textInput) {
            respuesta = textInput.value.trim();
        }

        respuestas.push({
            pregunta: preguntaTexto,
            respuesta
        });
    });

    const encuestaCompleta = {
        fecha: new Date().toISOString(),
        respuestas
    };

    // Poner el JSON en un input oculto para enviarlo
    document.getElementById('respuestasInput').value = JSON.stringify(encuestaCompleta);

    const formData = new FormData(this);
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    try {
        const response = await fetch(rutaEncuestasStore, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': token,
                'Accept': 'application/json',
            },
            body: formData
        });

        if (!response.ok) {
            const errorText = await response.text();
            throw new Error('Error en el servidor: ' + errorText);
        }

        await response.json();

        // Mostrar resultados tras envío exitoso
        mostrarResultadosReales();

        // Ocultar formulario
        this.style.display = 'none';

    } catch (error) {
        alert('Hubo un error al enviar la encuesta. Por favor, intente nuevamente.');
        console.error('Detalles del error:', error);
    }
});

// Función para mostrar resultados reales con gráficos usando Chart.js
function mostrarResultadosReales() {
    const resultadosDiv = document.getElementById('resultados');
    resultadosDiv.style.display = 'block';
    resultadosDiv.innerHTML = 'Cargando resultados...';

    fetch('/respuestas-con-encuesta')
        .then(response => response.json())
        .then(data => {
            resultadosDiv.innerHTML = ''; // Limpiar resultados previos

            // Obtener preguntas únicas
            const preguntasUnicas = [...new Set(data.map(item => item.pregunta))];

            preguntasUnicas.forEach(pregunta => {
                const respuestasFiltradas = data.filter(item => item.pregunta === pregunta);

                // Contar ocurrencias de respuestas
                const conteo = {};
                respuestasFiltradas.forEach(item => {
                    const resp = item.respuesta;

                    // Si respuesta es array (checkbox), contar cada opción individualmente
                    if (Array.isArray(resp)) {
                        resp.forEach(r => {
                            conteo[r] = (conteo[r] || 0) + 1;
                        });
                    } else {
                        conteo[resp] = (conteo[resp] || 0) + 1;
                    }
                });

                // Crear contenedor para el gráfico
                const contenedorPregunta = document.createElement('div');
                contenedorPregunta.classList.add('grafico-pregunta');
                contenedorPregunta.style.marginBottom = '40px';

                const tituloPregunta = document.createElement('h4');
                tituloPregunta.textContent = pregunta;
                contenedorPregunta.appendChild(tituloPregunta);

                const canvas = document.createElement('canvas');
                contenedorPregunta.appendChild(canvas);

                resultadosDiv.appendChild(contenedorPregunta);

                // Datos para Chart.js
                const etiquetas = Object.keys(conteo);
                const valores = Object.values(conteo);

                // Crear gráfico de barras horizontal
                new Chart(canvas.getContext('2d'), {
                    type: 'bar',
                    data: {
                        labels: etiquetas,
                        datasets: [{
                            label: `Respuestas para: ${pregunta}`,
                            data: valores,
                            backgroundColor: 'rgba(75, 192, 192, 0.6)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        indexAxis: 'y',    // <-- convierte las barras a horizontal
                        responsive: true,
                        scales: {
                            x: {
                                beginAtZero: true
                            },
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            });
        })
        .catch(error => {
            console.error("Error al cargar los resultados:", error);
            resultadosDiv.textContent = "No se pudieron cargar los resultados reales.";
            alert("No se pudieron cargar los resultados reales.");
        });
}

// Iniciar mostrando la primera página al cargar el DOM
document.addEventListener('DOMContentLoaded', () => {
    showPage(1);
});
