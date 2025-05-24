@extends('layouts.admin')

@php use Illuminate\Support\Str; @endphp

@section('content')

<section class="polls-section-3d">
    <h2 class="section-title-3d">
        Encuestas <span class="highlight">Populares</span>
        <button class="btn-create" onclick="openModal('modalCreate')">+ Crear</button>
        <button class="btn-delete" onclick="openModal('modalDelete')">🗑️ Eliminar</button>
    </h2>

    @foreach ($categorias as $categoria)
        <div class="poll-card-3d">
            <div class="poll-header">
                <h3>Encuestas {{ $categoria->nombre }}</h3>
                <div class="poll-toggle" data-target="polls-{{ Str::slug($categoria->nombre) }}">
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
            <div class="poll-content" id="polls-{{ Str::slug($categoria->nombre) }}">
                @foreach ($categoria->encuestas as $encuesta)
                    @if (!empty($encuesta->nombre))
                        <a href="{{ url('admin/encuestas/' . Str::slug($encuesta->nombre)) }}" class="poll-item">
                            <div class="poll-icon"><i class="fas fa-poll"></i></div>
                            <div class="poll-info">
                                <h4>{{ $encuesta->nombre }}</h4>
                                <p>Última encuesta: {{ $encuesta->created_at->format('d M Y') }}</p>
                            </div>
                            <div class="poll-arrow"><i class="fas fa-arrow-right"></i></div>
                        </a>
                    @endif      
                @endforeach
            </div>
        </div>
    @endforeach

</section>

<!-- Modales -->

<!-- Modal Crear -->
<div id="modalCreate" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal('modalCreate')">&times;</span>
    <h3>Crear Nueva Encuesta</h3>
    <form id="formCreateEncuesta">
      <input id="inputNombreCrear" type="text" placeholder="Naombre de encuesta" required>

      <select id="selectCategoriaCrear" required>
        <option value="">Selecciona categoría</option>
        @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
        @endforeach
      </select>

      <button type="submit">Crear</button>
    </form>
  </div>
</div>

<!-- Modal Eliminar Encuesta -->
<div id="modalDelete" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal('modalDelete')">&times;</span>
    <h3>Eliminar Encuesta</h3>
    <p>Seleccione la encuesta que desea eliminar:</p>
    <select id="encuestaSelect">
      <option value="">-- Seleccione una encuesta --</option>
    </select>
    <button id="btnEliminarEncuesta" disabled>Eliminar</button>
    <p id="deleteStatus" class="status-message"></p>
  </div>
</div>

@endsection

