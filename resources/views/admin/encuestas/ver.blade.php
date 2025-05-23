<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Estilos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('css/encuestas.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/resultados.css') }}" />
    <title>Encuesta Comunal</title>
</head>
<body>
    <div class="encuesta-container animate__animated animate__fadeIn">
    <h1 class="animate__animated animate__fadeInDown">{{ $encuesta->nombre }}</h1>

        <div class="progress-container">
            <div class="progress-bar" id="progressBar"></div>
        </div>

        <form action="{{ route('encuestas.store') }}" method="POST" id="encuestaForm">
            @csrf
            <input type="hidden" name="nombre" value="{{ $encuesta->nombre }}" />
            <input type="hidden" name="respuestas" id="respuestasInput" />

            <!-- Página 1 -->
            <div class="page active" id="page1">
                <h2>Datos Personales</h2>

                <div class="form-group">
                    <label for="sexo" class="requerido">Sexo:</label>
                    <select id="sexo" name="sexo" required>
                        <option value="">Seleccione</option>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
                        <option value="prefiero-no-decir">Prefiero no decir</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="edad" class="requerido">Edad:</label>
                    <input type="number" id="edad" name="edad" min="18" max="100" required />
                </div>

            @foreach ($encuesta->preguntas as $index => $pregunta)
                <div class="pregunta">
                    <h3 class="requerido">{{ $index + 1 }}. {{ $pregunta->texto }}</h3>
                    <input type="hidden" name="preguntas[{{ $pregunta->id }}][texto]" value="{{ $pregunta->texto }}" />

                    @if ($pregunta->opciones->count())
                        <div class="opciones">
                            @foreach ($pregunta->opciones as $opcion)
                                <div class="opcion-radio" onclick="animateOption(this)">
                                    <input type="radio" name="respuestas[{{ $pregunta->id }}]" id="opcion-{{ $opcion->id }}" value="{{ $opcion->texto }}" required />
                                    <label for="opcion-{{ $opcion->id }}">{{ $opcion->texto }}</label>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <textarea name="respuestas[{{ $pregunta->id }}]" placeholder="Tu respuesta aquí..." required></textarea>
                    @endif
                </div>
            @endforeach


                <div class="nav-buttons">
                    <!-- Solo mostrar botón Anterior si hay más de una página -->
                    <!-- <button type="button" class="btn-prev" onclick="prevPage(3)">← Anterior</button> -->
                    <button type="submit" class="btn-submit">Enviar Encuesta</button>
                </div>
            </div>
        </form>

        <!-- Resultados -->
        <div id="resultados" style="display:none;">
            <h2>Resultados de la encuesta</h2>
            <canvas id="chartResultados" width="400" height="200"></canvas>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        const rutaEncuestasStore = "{{ route('encuestas.store') }}";
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <script src="{{ asset('js/scriptENC.js') }}"></script>
</body>
</html>
