<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>GP CANAL RESULTADO ADMIN</title>
    <link rel="stylesheet" href="{{ asset('css/admin/   verResultados.css') }}">
</head>
<body>
    <h1 class="titulo">Resultados de Encuestas</h1>

    <div class="btn-container">
        <button class="btn" onclick="abrirModal()">Subir Foto de Resultado</button>
    </div>

    <div id="resultados-container" class="resultados-grid">
        {{-- Aquí se cargarán dinámicamente las imágenes desde la base de datos --}}
        @foreach ($fotos as $foto)
            <div class="foto-card">
                <img src="{{ asset('storage/resultados/' . $foto->archivo) }}" alt="Resultado">
                <button class="editar" onclick="editarFoto({{ $foto->id }}, '{{ $foto->archivo }}')">Editar</button>
                <button class="eliminar" onclick="eliminarFoto({{ $foto->id }})">Eliminar</button>
            </div>
        @endforeach
    </div>

    <!-- Modal Subir/Editar Foto -->
    <div id="fotoModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="cerrarModal()">&times;</span>
            <h3 id="modal-title">Subir Foto de Resultado</h3>
            <form id="fotoForm" action="{{ route('resultados.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="foto_id">
                <input type="file" name="foto" accept="image/*" required>
                <br><br>
                <button type="submit" class="btn">Guardar</button>
            </form>
        </div>
    </div>


    <script src="{{ asset('js/admin-verResultados.js') }}"></script>
</body>
</html>