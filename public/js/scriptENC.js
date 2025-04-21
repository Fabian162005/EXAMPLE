// Variables globales
const totalPages = 3;
let currentPage = 1;

// Animación al seleccionar opciones
function animateOption(element) {
    element.classList.add('animate_animated', 'animate_pulse');
    setTimeout(() => {
        element.classList.remove('animate_animated', 'animate_pulse');
    }, 1000);
    updateProgressBar();
}

// Navegación entre páginas
function nextPage() {
    if(validateCurrentPage()) {
        if(currentPage < totalPages) {
            document.getElementById(`page${currentPage}`).classList.remove('active');
            currentPage++;
            document.getElementById(`page${currentPage}`).classList.add('active');
            updateProgressBar();
            window.scrollTo(0, 0);
        }
    }
}

function prevPage() {
    if(currentPage > 1) {
        document.getElementById(`page${currentPage}`).classList.remove('active');
        currentPage--;
        document.getElementById(`page${currentPage}`).classList.add('active');
        updateProgressBar();
        window.scrollTo(0, 0);
    }
}

// Validar campos requeridos en la página actual
function validateCurrentPage() {
    let isValid = true;
    
    // Validación específica para la página 1 (edad y sexo)
    if(currentPage === 1) {
        const sexo = document.getElementById('sexo');
        const edad = document.getElementById('edad');
        
        if(!sexo.value) {
            markAsInvalid(sexo);
            isValid = false;
        }
        
        if(!edad.value || edad.value < 18 || edad.value > 100) {
            markAsInvalid(edad);
            isValid = false;
        }
    }
    
    // Validación para preguntas requeridas en cualquier página
    const requiredInputs = document.querySelectorAll(`#page${currentPage} [required]`);
    
    requiredInputs.forEach(input => {
        if(input.type === 'radio' || input.type === 'checkbox') {
            const name = input.name;
            if(!document.querySelector(`input[name="${name}"]:checked`)) {
                isValid = false;
                const group = input.closest('.opciones') || input.closest('.escala');
                if(group) markAsInvalid(group);
            }
        }
    });
    
    if(!isValid) {
        alert('Por favor complete todos los campos requeridos antes de continuar.');
    }
    
    return isValid;
}

// Marcar elemento como inválido temporalmente
function markAsInvalid(element) {
    element.style.borderColor = 'var(--error-color)';
    element.style.boxShadow = '0 0 0 2px var(--error-color)';
    setTimeout(() => {
        element.style.borderColor = '';
        element.style.boxShadow = '';
    }, 2000);
}

// Actualizar barra de progreso
function updateProgressBar() {
    let completed = 0;
    const totalRequired = 2; // Solo edad y sexo son obligatorios
    
    // Validar sexo
    if(document.getElementById('sexo').value) completed++;
    
    // Validar edad
    const edad = document.getElementById('edad');
    if(edad.value && edad.value >= 18 && edad.value <= 100) completed++;
    
    const percentage = Math.min(Math.floor((completed / totalRequired) * 100), 100);    
    const progressBar = document.getElementById('progressBar');
    
    progressBar.style.width = percentage + '%';
    
    // Cambiar color según progreso
    if(percentage < 50) {
        progressBar.style.background = 'linear-gradient(90deg, var(--error-color), var(--warning-color))';
    } else {
        progressBar.style.background = 'linear-gradient(90deg, var(--accent-color), var(--success-color))';
    }
}

// Inicialización
document.addEventListener('DOMContentLoaded', () => {
    // Configurar event listeners para los botones
    document.querySelectorAll('.btn-next').forEach(btn => {
        btn.addEventListener('click', nextPage);
    });
    
    document.querySelectorAll('.btn-prev').forEach(btn => {
        btn.addEventListener('click', prevPage);
    });
    
    // Validar edad en tiempo real
    document.getElementById('edad').addEventListener('input', function() {
        if(this.value < 18) this.value = 18;
        if(this.value > 100) this.value = 100;
        updateProgressBar();
    });
    
    // Validar sexo en tiempo real
    document.getElementById('sexo').addEventListener('change', updateProgressBar);
    
    // Inicializar barra de progreso
    updateProgressBar();
});