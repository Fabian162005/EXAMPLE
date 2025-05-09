//candidatos
gsap.registerPlugin(ScrollTrigger);

  const teams = [
    {name: "Acción Popular", filename: "accion-popular", logo: "../imagenes/image1.png"},
    {name: "Fuerza Popular", filename: "fuerza-popular", logo: "../imagenes/image2.png"},
    {name: "Partido de los Trabajadores y Emprendedores (PTE-Perú)", filename: "partido-de-los-trabajadores-y-emprendedores-pte-peru", logo: "../imagenes/image3.png"},
    {name: "Ahora Nación - AN", filename: "ahora-nacion-an", logo: "../imagenes/image4.png"},
    {name: "Juntos por el Perú", filename: "juntos-por-el-peru", logo: "../imagenes/image5.png"},
    {name: "Partido del buen Gobierno", filename: "partido-del-buen-gobierno", logo: "../imagenes/image6.png"},
    {name: "Alianza para el Progreso", filename: "alianza-para-el-progreso", logo: "../imagenes/image7.png"},
    {name: "Libertad Popular", filename: "libertad-popular", logo: "../imagenes/image8.png"},
    {name: "Partido Demócrata Unido Perú", filename: "partido-democrata-unido-peru", logo: "../imagenes/image9.png"},
    {name: "Avanza País - Partido de Integración Social", filename: "avanza-pais-partido-de-integracion-social", logo: "../imagenes/image10.png"},
    {name: "Nuevo Perú por el Buen Vivir", filename: "nuevo-peru-por-el-buen-vivir", logo: "../imagenes/image11.png"},
    {name: "Partido Demócrata Verde", filename: "partido-democrata-verde", logo: "../imagenes/image12.png"},
    {name: "Batalla Perú", filename: "batalla-peru", logo: "../imagenes/image13.png"},
    {name: "Partido Aprista Peruano", filename: "partido-aprista-peruano", logo: "../imagenes/image14.png"},
    {name: "Partido Democrático Federal", filename: "partido-democratico-federal", logo: "../imagenes/image15.png"},
    {name: "Fe en el Perú", filename: "fe-en-el-peru", logo: "../imagenes/image16.png"},
    {name: "Partido Ciudadanos por el Perú", filename: "partido-ciudadanos-por-el-peru", logo: "../imagenes/image17.png"},
    {name: "Partido Democrático Somos Perú", filename: "partido-democratico-somos-peru", logo: "../imagenes/image18.png"},
    {name: "Frente Popular Agrícola FIA del Perú", filename: "frente-popular-agricola-fia-del-peru", logo: "../imagenes/image19.png"},
    {name: "Partido Cívico Obras", filename: "partido-civico-obras", logo: "../imagenes/image20.png"},
    {name: "Partido Frente de la Esperanza 2021", filename: "partido-frente-de-la-esperanza-2021", logo: "../imagenes/image21.png"},
    {name: "Partido Morado", filename: "partido-morado", logo: "../imagenes/image22.png"},
    {name: "Partido Político Perú Acción", filename: "partido-politico-peru-accion", logo: "../imagenes/image23.png"},
    {name: "Perú Moderno", filename: "peru-moderno", logo: "../imagenes/image24.png"},
    {name: "Partido País para Todos", filename: "partido-pais-para-todos", logo: "../imagenes/image25.png"},
    {name: "Partido Político Perú Primero", filename: "partido-politico-peru-primero", logo: "../imagenes/image26.png"},
    {name: "Podemos Perú", filename: "podemos-peru", logo: "../imagenes/image27.png"},
    {name: "Partido Patriótico del Perú", filename: "partido-patriotico-del-peru", logo: "../imagenes/image28.png"},
    {name: "Partido Político Peruanos Unidos: ¡Somos Libres!", filename: "partido-politico-peruanos-unidos-somos-libres", logo: "../imagenes/image29.png"},
    {name: "Primero La Gente - Comunidad, Ecología, Libertad y Progreso", filename: "primero-la-gente-comunidad-ecologia-libertad-y-progreso", logo: "../imagenes/image30.png"},
    {name: "Partido Político Cooperación Popular", filename: "partido-politico-cooperacion-popular", logo: "../imagenes/image31.png"},
    {name: "Partido Político Popular Voces del Pueblo", filename: "partido-politico-popular-voces-del-pueblo", logo: "../imagenes/image32.png"},
    {name: "Partido Político PRIN", filename: "partido-politico-prin", logo: "../imagenes/image33.png"},
    {name: "Progresemos", filename: "progresemos", logo: "../imagenes/image34.png"},
    {name: "Partido Político Fuerza Moderna", filename: "partido-politico-fuerza-moderna", logo: "../imagenes/image35.png"},
    {name: "Partido Popular Cristiano - PPC", filename: "partido-popular-cristiano-ppc", logo: "../imagenes/image36.png"},
    {name: "Renovación Popular", filename: "renovacion-popular", logo: "../imagenes/image37.png"},
    {name: "Partido Político Integridad Democrática", filename: "partido-politico-integridad-democratica", logo: "../imagenes/image38.png"},
    {name: "Partido SiCreo", filename: "partido-sicreo", logo: "../imagenes/image39.png"},
    {name: "Salvemos al Perú", filename: "salvemos-al-peru", logo: "../imagenes/image40.png"},
    {name: "Partido Político Nacional Perú Libre", filename: "partido-politico-nacional-peru-libre", logo: "../imagenes/image41.png"},
    {name: "Partido Unidad y Paz", filename: "partido-unidad-y-paz", logo: "../imagenes/image42.png"},
    {name: "Un Camino Diferente", filename: "un-camino-diferente", logo: "../imagenes/image43.png"},
  ];

// Contenedor donde se insertarán las tarjetas
const cardsContainer = document.querySelector(".cards");

// Modifica la función mostrarOpciones así:
function mostrarOpciones(partidosFiltrados) {
  select.innerHTML = '';
  
  if (partidosFiltrados.length === 0) {
      select.style.display = 'none';
      document.querySelector('.custom-select').classList.remove('has-results');
      return;
  }
  
  document.querySelector('.custom-select').classList.add('has-results');
}

// Crear tarjetas con redirección
teams.forEach((team, index) => {
    const li = document.createElement("li");
    li.id = `card-${index}`;
    li.innerHTML = `<img src="${team.logo}" alt="${team.name}" /><p>${team.name}</p>`;
    li.style.cursor = "pointer";

// Evento click para redirección
li.addEventListener("click", () => {
  if (team.filename) {
      window.location.href = `/partidos/${team.filename}`;
  }
});

    cardsContainer.appendChild(li);
});


let currentIndex = 0;
const totalCards = teams.length;
const cards = gsap.utils.toArray(".cards li");

function updateActiveCard() {
  gsap.to(cards, {
    x: (i) => {
      let diff = (i - currentIndex + totalCards) % totalCards;
      if (diff > totalCards / 2) diff -= totalCards;
      return diff * 300;
    },
    duration: 0.5,
    ease: "power1.inOut",
  });

  cards.forEach((card, i) => {
    const distance = Math.min(
      Math.abs(i - currentIndex),
      totalCards - Math.abs(i - currentIndex)
    );
    gsap.set(card, {
      opacity: 1 - distance * 0.3,
      scale: 1 - distance * 0.2,
    });
  });
}

function navigate(direction) {
  currentIndex = (currentIndex + direction + totalCards) % totalCards;
  updateActiveCard();
}

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
teams.forEach((team, index) => {
  const option = document.createElement("option");
  option.value = index;
  option.textContent = team.name;
  partySelect.appendChild(option);
});

partySelect.addEventListener("change", (event) => {
  const selectedIndex = parseInt(event.target.value);
  if (!isNaN(selectedIndex)) {
    currentIndex = selectedIndex;
    updateActiveCard();
  }
});

updateActiveCard();