let currentPage = 1;
const totalPages = 3;

document.addEventListener('DOMContentLoaded', () => {
    showPage(currentPage);
    document.getElementById('encuestaForm').addEventListener('submit', handleSubmit);
});

function showPage(pageNumber) {
    document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
    const current = document.getElementById(`page${pageNumber}`);
    if (current) current.classList.add('active');

    const progressBar = document.getElementById('progressBar');
    if (progressBar) {
        const percent = (pageNumber / totalPages) * 100;
        progressBar.style.width = `${percent}%`;
    }
    currentPage = pageNumber;
}

function validatePage(pageElement) {
    if (!pageElement) return false;

    const requiredFields = pageElement.querySelectorAll('[required]');
    const validatedGroups = new Set();

    for (const field of requiredFields) {
        const tag = field.tagName;
        const type = field.type;

        if ((type === 'radio' || type === 'checkbox') && !validatedGroups.has(field.name)) {
            validatedGroups.add(field.name);
            const checked = pageElement.querySelectorAll(`input[name="${field.name}"]:checked`);
            if (checked.length === 0) return false;
        } else if (['SELECT', 'TEXTAREA', 'INPUT'].includes(tag) && !field.value.trim()) {
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
    setTimeout(() => {
        element.classList.remove('animate__animated', 'animate__pulse');
    }, 600);
}

async function handleSubmit(e) {
    e.preventDefault();
    const form = e.target;
    const currentPageElement = document.getElementById(`page${currentPage}`);

    if (!validatePage(currentPageElement)) {
        alert('Por favor, complete los campos requeridos antes de enviar.');
        return;
    }

    const respuestas = Array.from(document.querySelectorAll('.pregunta')).map(container => {
        const preguntaTexto = container.querySelector('h3')?.innerText.trim() || 'Pregunta sin texto';
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

        return { pregunta: preguntaTexto, respuesta };
    });

    document.getElementById('respuestasInput').value = JSON.stringify({
        fecha: new Date().toISOString(),
        respuestas
    });

    const formData = new FormData(form);
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

        if (!response.ok) throw new Error(await response.text());

        await response.json();
        form.style.display = 'none';
        mostrarResultadosReales();

    } catch (error) {
        console.error('Error al enviar la encuesta:', error);
        alert('Hubo un error al enviar la encuesta. Por favor, intente nuevamente.');
    }
}

function mostrarResultadosReales() {
    const resultadosDiv = document.getElementById('resultados');
    resultadosDiv.style.display = 'block';
    resultadosDiv.innerHTML = 'Cargando resultados...';

    fetch('/respuestas-con-encuesta')
        .then(res => res.json())
        .then(data => {
            resultadosDiv.innerHTML = '';
            const preguntas = [...new Set(data.map(item => item.pregunta))];

            preguntas.forEach(pregunta => {
                const respuestasFiltradas = data.filter(item => item.pregunta === pregunta);
                const conteo = {};

                respuestasFiltradas.forEach(item => {
                    const resp = item.respuesta;
                    if (Array.isArray(resp)) {
                        resp.forEach(op => conteo[op] = (conteo[op] || 0) + 1);
                    } else {
                        conteo[resp] = (conteo[resp] || 0) + 1;
                    }
                });

                const contenedor = document.createElement('div');
                contenedor.classList.add('grafico-pregunta');
                contenedor.style.marginBottom = '40px';

                const titulo = document.createElement('h4');
                titulo.textContent = pregunta;
                contenedor.appendChild(titulo);

                const canvas = document.createElement('canvas');
                contenedor.appendChild(canvas);
                resultadosDiv.appendChild(contenedor);

                new Chart(canvas.getContext('2d'), {
                    type: 'bar',
                    data: {
                        labels: Object.keys(conteo),
                        datasets: [{
                            label: `Respuestas para: ${pregunta}`,
                            data: Object.values(conteo),
                            backgroundColor: 'rgba(75, 192, 192, 0.6)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        indexAxis: 'y',
                        responsive: true,
                        scales: {
                            x: { beginAtZero: true },
                            y: { beginAtZero: true }
                        }
                    }
                });
            });
        })
        .catch(err => {
            console.error('Error al cargar los resultados:', err);
            resultadosDiv.innerHTML = 'No se pudieron cargar los resultados.';
        });
}
