gsap.registerPlugin(ScrollTrigger);

const teams = [
  {name: "Acción Popular", logo: "../imagenes/image1.png", infoPage: "accion-popular.html"},
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

// Crear tarjetas con redirección
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
