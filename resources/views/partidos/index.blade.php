@extends('layouts.app')

@section('content')
  <!-- Sección Partidos Políticos -->
  <section id="partidos-politicos" class="partidos-section">
      <div class="title-container">
          <h1 class="title">Partidos Políticos</h1>
          <div class="dynamic-line"></div>
      </div>

      <!-- Buscador -->
      <div class="buscador">
          <label for="party-select">Buscar partido:</label>
          <select id="party-select" name="slug"
                  onchange="if(this.value) window.location.href='/partidos/' + this.value;">
              <option value="" disabled selected>Selecciona un partido</option>
              @foreach ($partidos as $partido)
                  <option value="{{ $partido->slug }}">
                      {{ $partido->name }}
                  </option>
              @endforeach
          </select>
      </div>

      <!-- Galería de partidos -->
      <div class="gallery">
          <ul class="cards">
              @forelse ($partidos as $partido)
                  <li class="card">
                      <h3>{{ $partido->name }}</h3>
                      <a href="{{ route('partidos.show', $partido->slug) }}">
                          Ver detalles
                      </a>
                  </li>
              @empty
                  <li>No hay partidos disponibles.</li>
              @endforelse
          </ul>
      </div>
  </section>
@endsection
