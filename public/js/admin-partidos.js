//candidatos
gsap.registerPlugin(ScrollTrigger);

const teams = [
  {name: "Acción Popular", logo: "../imagenes/image1.png"},
  {name: "Fuerza Popular", logo: "../imagenes/image2.png"},
  {name: "Partido de los Trabajadores y Emprendedores (PTE-Perú)", logo: "../imagenes/image3.png"},
  {name: "Ahora Nación - AN", logo: "../imagenes/image4.png"},
  {name: "Juntos por el Perú", logo: "../imagenes/image5.png"},
  {name: "Partido del buen Gobierno", logo: "../imagenes/image6.png"},
  {name: "Alianza para el Progreso", logo: "../imagenes/image7.png"},
  {name: "Libertad Popular", logo: "../imagenes/image8.png"},
  {name: "Partido Demócrata Unido Perú", logo: "../imagenes/image9.png"},
  {name: "Avanza País - Partido de Integración Social", logo: "../imagenes/image10.png"},
  {name: "Nuevo Perú por el Buen Vivir", logo: "../imagenes/image11.png"},
  {name: "Partido Demócrata Verde", logo: "../imagenes/image12.png"},
  {name: "Batalla Perú", logo: "../imagenes/image13.png"},
  {name: "Partido Aprista Peruano", logo: "../imagenes/image14.png"},
  {name: "Partido Democrático Federal", logo: "../imagenes/image15.png"},
  {name: "Fe en el Perú", logo: "../imagenes/image16.png"},
  {name: "Partido Ciudadanos por el Perú", logo: "../imagenes/image17.png"},
  {name: "Partido Democrático Somos Perú", logo: "../imagenes/image18.png"},
  {name: "Frente Popular Agrícola FIA del Perú", logo: "../imagenes/image19.png"},
  {name: "Partido Cívico Obras", logo: "../imagenes/image20.png"},
  {name: "Partido Frente de la Esperanza 2021", logo: "../imagenes/image21.png"},
  {name: "Partido Morado", logo: "../imagenes/image22.png"},
  {name: "Partido Político Perú Acción", logo: "../imagenes/image23.png"},
  {name: "Perú Moderno", logo: "../imagenes/image24.png"},
  {name: "Partido País para Todos", logo: "../imagenes/image25.png"},
  {name: "Partido Político Perú Primero", logo: "../imagenes/image26.png"},
  {name: "Podemos Perú", logo: "../imagenes/image27.png"},
  {name: "Partido Patriótico del Perú", logo: "../imagenes/image28.png"},
  {name: "Partido Político Peruanos Unidos: ¡Somos Libres!", logo: "../imagenes/image29.png"},
  {name: "Primero La Gente - Comunidad, Ecología, Libertad y Progreso", logo: "../imagenes/image30.png"},
  {name: "Partido Político Cooperación Popular", logo: "../imagenes/image31.png"},
  {name: "Partido Político Popular Voces del Pueblo", logo: "../imagenes/image32.png"},
  {name: "Partido Político PRIN", logo: "../imagenes/image33.png"},
  {name: "Progresemos", logo: "../imagenes/image34.png"},
  {name: "Partido Político Fuerza Moderna", logo: "../imagenes/image35.png"},
  {name: "Partido Popular Cristiano - PPC", logo: "../imagenes/image36.png"},
  {name: "Renovación Popular", logo: "../imagenes/image37.png"},
  {name: "Partido Político Integridad Democrática", logo: "../imagenes/image38.png"},
  {name: "Partido SiCreo", logo: "../imagenes/image39.png"},
  {name: "Salvemos al Perú", logo: "../imagenes/image40.png"},
  {name: "Partido Político Nacional Perú Libre", logo: "../imagenes/image41.png"},
  {name: "Partido Unidad y Paz", logo: "../imagenes/image42.png"},
  {name: "Un Camino Diferente", logo: "../imagenes/image43.png"},
];

// Contenedor donde se insertarán las tarjetas
const cardsContainer = document.querySelector(".cards");

// Crear tarjetas iniciales
function createCards() {
  cardsContainer.innerHTML = "";
  teams.forEach((team, index) => {
    const li = document.createElement("li");
    li.id = `card-${index}`;
    li.innerHTML = `<img src="${team.logo}" alt="${team.name}" /><p>${team.name}</p>`;
    li.style.cursor = "pointer";

    li.addEventListener("click", () => {
      if (team.infoPage) {
        window.location.href = team.infoPage;
      }
    });

    cardsContainer.appendChild(li);
  });
}

// Variables globales para navegación
let currentIndex = 0;

// Función para actualizar la tarjeta activa
function updateActiveCard() {
  const cards = gsap.utils.toArray(".cards li");
  gsap.to(cards, {
    x: (i) => {
      let diff = (i - currentIndex + teams.length) % teams.length;
      if (diff > teams.length / 2) diff -= teams.length;
      return diff * 300;
    },
    duration: 0.5,
    ease: "power1.inOut",
  });

  cards.forEach((card, i) => {
    const distance = Math.min(
      Math.abs(i - currentIndex),
      teams.length - Math.abs(i - currentIndex)
    );
    gsap.set(card, {
      opacity: 1 - distance * 0.3,
      scale: 1 - distance * 0.2,
    });
  });
}

// Función para navegar entre tarjetas
function navigate(direction) {
  currentIndex = (currentIndex + direction + teams.length) % teams.length;
  updateActiveCard();
}

// Botones de navegación
document.querySelector(".next").addEventListener("click", (e) => {
  e.stopPropagation();
  navigate(1);
});
document.querySelector(".prev").addEventListener("click", (e) => {
  e.stopPropagation();
  navigate(-1);
});

// Menú desplegable
const partySelect = document.getElementById("party-select");
function populatePartySelect() {
  partySelect.innerHTML = '<option value="" disabled selected>Selecciona un partido</option>';
  teams.forEach((team, index) => {
    const option = document.createElement("option");
    option.value = index;
    option.textContent = team.name;
    partySelect.appendChild(option);
  });
}
populatePartySelect();

partySelect.addEventListener("change", (event) => {
  const selectedIndex = parseInt(event.target.value);
  if (!isNaN(selectedIndex)) {
    currentIndex = selectedIndex;
    updateActiveCard();
  }
});

// EDITAR PARTIDO
const editButton = document.getElementById("edit-button");
const editModal = document.getElementById("edit-modal");
const closeModalEdit = editModal.querySelector(".close");
const editForm = document.getElementById("edit-form");
const editNameInput = document.getElementById("edit-name");
const editLogoInput = document.getElementById("edit-logo");

let currentEditIndex = null;

editButton.addEventListener("click", () => {
  const selectedIndex = parseInt(partySelect.value);
  if (isNaN(selectedIndex)) {
    alert("Por favor, selecciona un partido para editar.");
    return;
  }

  const selectedTeam = teams[selectedIndex];
  currentEditIndex = selectedIndex;

  editNameInput.value = selectedTeam.name;
  editModal.style.display = "block";
});

closeModalEdit.addEventListener("click", () => {
  editModal.style.display = "none";
});

editForm.addEventListener("submit", (e) => {
  e.preventDefault();

  const newName = editNameInput.value.trim();
  const newLogoFile = editLogoInput.files[0];

  if (!newName) {
    alert("El nombre del partido no puede estar vacío.");
    return;
  }

  teams[currentEditIndex].name = newName;

  if (newLogoFile) {
    const reader = new FileReader();
    reader.onload = (event) => {
      teams[currentEditIndex].logo = event.target.result;
      updateUI();
    };
    reader.readAsDataURL(newLogoFile);
  } else {
    updateUI();
  }

  editModal.style.display = "none";
});

// ELIMINAR PARTIDO
const deleteButton = document.getElementById("delete-button");

deleteButton.addEventListener("click", () => {
  const selectedIndex = parseInt(partySelect.value);
  if (isNaN(selectedIndex)) {
    alert("Por favor, selecciona un partido para eliminar.");
    return;
  }

  if (confirm("¿Estás seguro de que deseas eliminar este partido?")) {
    teams.splice(selectedIndex, 1);
    currentIndex = Math.min(currentIndex, teams.length - 1);
    updateUI();
  }
});

// CREAR PARTIDO
const createButton = document.getElementById("create-button");
const createModal = document.getElementById("create-modal");
const closeModalCreate = createModal.querySelector(".close");
const createForm = document.getElementById("create-form");
const createNameInput = document.getElementById("create-name");
const createLogoInput = document.getElementById("create-logo");

createButton.addEventListener("click", () => {
  createModal.style.display = "block";
});

closeModalCreate.addEventListener("click", () => {
  createModal.style.display = "none";
});

createForm.addEventListener("submit", (e) => {
  e.preventDefault();

  const newName = createNameInput.value.trim();
  const newLogoFile = createLogoInput.files[0];

  if (!newName || !newLogoFile) {
    alert("Por favor, completa todos los campos.");
    return;
  }

  const reader = new FileReader();
  reader.onload = (event) => {
    teams.push({
      name: newName,
      logo: event.target.result,
    });
    updateUI();
    createModal.style.display = "none";
    createForm.reset();
  };
  reader.readAsDataURL(newLogoFile);
});

// Función para actualizar completamente la interfaz
function updateUI() {
  createCards(); // Regenerar tarjetas
  populatePartySelect(); // Actualizar menú desplegable
  updateActiveCard(); // Actualizar tarjeta activa
}

// Inicializar la interfaz
createCards();
populatePartySelect();
updateActiveCard();
