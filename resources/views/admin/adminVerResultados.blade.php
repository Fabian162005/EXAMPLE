<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>GP CANAL RESULTADO</title>
    <link rel="stylesheet" href="{{ asset('css/admin/verResultados.css') }}">
</head>
<body>
    <h1 class="titulo">Resultados de Encuestas</h1>

    <form action="{{ route('resultados.subirFoto') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="titulo" placeholder="Título de la imagen" required>
        <input type="file" name="imagen" accept="image/*" required>
        <button type="submit">Subir Imagen</button>
    </form>

    <div id="resultados-container" class="resultados-grid">
        @foreach ($imagenes as $imagen)
            <div class="resultado-item">
                <h3 class="titulo-imagen">{{ $imagen->titulo }}</h3>
                <img src="{{ asset('storage/' . $imagen->ruta) }}" alt="{{ $imagen->titulo }}">
                <button class="btn-eliminar" data-id="{{ $imagen->id }}" data-titulo="{{ $imagen->titulo }}">Eliminar</button>
            </div>
        @endforeach
    </div>


<!-- Modal de confirmación -->
<div id="modalEliminar" class="modal">
    <div class="modal-contenido">
        <span class="cerrar-modal">&times;</span>
        <p id="modalTexto">¿Estás seguro de que deseas eliminar esta imagen?</p>
            <form id="formEliminar" method="POST" action="">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-confirmar">Sí, eliminar</button>
            </form>
    </div>
</div>


    <script src="{{ asset('js/verResultados.js') }}"></script>
</body>
</html>
