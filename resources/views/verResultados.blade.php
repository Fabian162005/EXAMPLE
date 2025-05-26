<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>GP CANAL RESULTADO</title>
    <link rel="stylesheet" href="{{ asset('css/verResultados.css') }}">
</head>
<body>
    <h1 class="titulo">Resultados de Encuestas</h1>

    <div id="resultados-container" class="resultados-grid">
        @foreach ($imagenes as $imagen)
            <div class="resultado-item">
                <h3 class="titulo-imagen">{{ $imagen->titulo }}</h3>
                <img src="{{ asset('storage/' . $imagen->ruta) }}" alt="{{ $imagen->titulo }}">
            </div>
        @endforeach
    </div>

    <script src="{{ asset('js/verRes    ultados.js') }}"></script>
</body>
</html>
