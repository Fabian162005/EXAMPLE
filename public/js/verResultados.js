document.addEventListener('DOMContentLoaded', () => {
  const resultadosContainer = document.getElementById('resultados-container');

  const resultados = [
    {
      titulo: "Encuesta Presidencial Lima",
      descripcion: "Resultados finales de la encuesta realizada el 15 Oct 2023.",
      imagen: "https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=600&q=80"
    },
    {
      titulo: "Encuesta Regional Piura",
      descripcion: "Datos y análisis de la encuesta regional del 10 Oct 2023.",
      imagen: "https://images.unsplash.com/photo-1494526585095-c41746248156?auto=format&fit=crop&w=600&q=80"
    },
    {
      titulo: "Encuesta Regional Morropon",
      descripcion: "Estadísticas y gráficos de la encuesta del 8 Oct 2023.",
      imagen: "https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=600&q=80"
    }
  ];

  resultados.forEach(res => {
    const card = document.createElement('div');
    card.className = 'result-card';

    card.innerHTML = `
      <img src="${res.imagen}" alt="${res.titulo}" />
      <div class="result-info">
        <h3>${res.titulo}</h3>
        <p>${res.descripcion}</p>
      </div>
    `;

    resultadosContainer.appendChild(card);
  });
});