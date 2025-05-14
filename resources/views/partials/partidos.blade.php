<!-- Sección Partidos Políticos -->
<section id="partidos-politicos" class="partidos-section">
  <div class="title-container">
    <h1 class="title">Partidos Políticos</h1>
    <div class="dynamic-line"></div>
  </div>

  {{-- Buscador --}}
  <div class="buscador">
    <label for="party-select">Buscar partido:</label>
    <select id="party-select"
            onchange="if(this.value) window.location.href='/partidos/'+this.value;">
      <option value="" disabled selected>Selecciona un partido</option>
      @foreach($partidos as $p)
        <option value="{{ $p->slug }}">{{ $p->name }}</option>
      @endforeach
    </select>
  </div>

  {{-- Galería --}}
  <div class="gallery">
    <ul class="cards">
      @forelse($partidos as $p)
        <li class="card">
          <h3>{{ $p->name }}</h3>
          <a href="{{ route('partidos.show',$p->slug) }}">Ver detalles</a>
        </li>
      @empty
        <li>No hay partidos disponibles.</li>
      @endforelse
    </ul>
  </div>
</section>
