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

// Crear tarjetas dinámicamente
teams.forEach((team) => {
  const li = document.createElement("li");
  li.innerHTML = `<img src="${team.logo}" alt="${team.name}" /><p>${team.name}</p>`;
  cardsContainer.appendChild(li);
});

// Variables para la animación
let iteration = 0;

const spacing = 0.1,
  snap = gsap.utils.snap(spacing),
  cards = gsap.utils.toArray(".cards li"),
  seamlessLoop = buildSeamlessLoop(cards, spacing),
  scrub = gsap.to(seamlessLoop, {
    duration: 0.5,
    ease: "power3",
    paused: true,
  });

// Funciones para moverse hacia adelante y atrás
function wrapForward() {
  iteration++;
}

function wrapBackward() {
  iteration--;
  if (iteration < 0) {
    iteration = 9;
    seamlessLoop.totalTime(seamlessLoop.totalTime() + seamlessLoop.duration() * 10);
    scrub.pause();
  }
}

function scrubTo(totalTime) {
  let progress = (totalTime - seamlessLoop.duration() * iteration) / seamlessLoop.duration();
  if (progress > 1) {
    wrapForward();
  } else if (progress < 0) {
    wrapBackward();
  } else {
    seamlessLoop.progress(progress); // Actualiza el progreso de la animación
  }
}

// Event listeners para los botones "Anterior" y "Siguiente"
document.querySelector(".next").addEventListener("click", () => {
  scrubTo(scrub.vars.totalTime + spacing);
});

document.querySelector(".prev").addEventListener("click", () => {
  scrubTo(scrub.vars.totalTime - spacing);
});

// Función para crear un bucle infinito de animaciones
function buildSeamlessLoop(items, spacing) {
  let overlap = Math.ceil(1 / spacing),
    startTime = items.length * spacing + 0.5,
    loopTime = (items.length + overlap) * spacing + 1,
    rawSequence = gsap.timeline({ paused: true }),
    seamlessLoop = gsap.timeline({
      paused: true,
      repeat: -1,
      onRepeat() {
        this._time === this._dur && (this._tTime += this._dur - 0.01);
      },
    }),
    l = items.length + overlap * 2,
    time = 0,
    i, index, item;

  gsap.set(items, { xPercent: 400, opacity: 0, scale: 0 });

  for (i = 0; i < l; i++) {
    index = i % items.length;
    item = items[index];
    time = i * spacing;
    rawSequence
      .fromTo(
        item,
        { scale: 0, opacity: 0 },
        {
          scale: 1,
          opacity: 1,
          zIndex: 100,
          duration: 0.5,
          yoyo: true,
          repeat: 1,
          ease: "power1.in",
          immediateRender: false,
        },
        time
      )
      .fromTo(item, { xPercent: 400 }, { xPercent: -400, duration: 1, ease: "none", immediateRender: false }, time);
    i <= items.length && seamlessLoop.add("label" + i, time);
  }

  rawSequence.time(startTime);
  seamlessLoop
    .to(rawSequence, {
      time: loopTime,
      duration: loopTime - startTime,
      ease: "none",
    })
    .fromTo(
      rawSequence,
      { time: overlap * spacing + 1 },
      {
        time: startTime,
        duration: startTime - (overlap * spacing + 1),
        immediateRender: false,
        ease: "none",
      }
    );
  return seamlessLoop;
}
