<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Estilos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('css/admin/encuestas.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/resultados.css') }}" />
    <title>Encuesta Comunal Admin</title>
       <!-- Favicon / Logo -->
    <link rel="icon" href="{{ asset('images/logogpcanal.jpg') }}" type="image/jpeg">

</head>
<body>
    <div class="wrapper">

    <div class="encuesta-container animate__animated animate__fadeIn">
    <h1 class="animate__animated animate__fadeInDown">{{ $encuesta->nombre }}</h1>

        <div class="progress-container">
            <div class="progress-bar" id="progressBar"></div>
        </div>
        <!-- Botón para abrir el modal -->
        <button type="button" class="btn-editar" onclick="abrirModal()">Editar Encuesta</button>

        <form action="{{ route('encuestas.store') }}" method="POST" id="encuestaForm">
            @csrf
            <input type="hidden" name="encuesta_id" value="{{ $encuesta->id }}">
            <input type="hidden" name="categoria_id" value="{{ $encuesta->categoria_id }}" />
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
            <div class="pregunta" data-pregunta-id="{{ $pregunta->id }}">
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
        <div id="mensajeGracias" style="display: none; text-align: center; margin-top: 20px;">
            <h2>¡Gracias por votar! Si gustas ver los resultados vuelve a la página principal para visualizarlos</h2>
            <div style="margin-top: 20px;">
                <button id="btnInicio" style="margin-right: 10px; padding: 10px 20px;">Ir a Inicio</button>
                <a href="{{ url('/verResultados') }}" style="font-weight: bold; margin-right: 10px; padding: 10px 20px; display: inline-block; text-decoration: none; color: inherit;">
                    Ver Resultados
                </a>
            </div>
        </div>
        <!-- Modal -->
        <div id="modalEditarEncuesta" class="modal">
            <div class="modal-content">
                <span class="close" onclick="cerrarModal()">&times;</span>
                <h2>Editar Encuesta</h2>

                <form id="formEditarEncuesta" method="POST" action="{{ route('admin.encuestas.actualizar', $encuesta->id) }}">
                    @csrf
                    @method('PUT')

                    <!-- Editar nombre de encuesta -->
                    <div class="form-group">
                        <label for="nombreEncuesta">Nombre:</label>
                        <input type="text" name="nombre" id="nombreEncuesta" value="{{ $encuesta->nombre }}" required oninput="generarSlug()" />
                    </div>

                    <!-- Editar slug automáticamente -->
                    <div class="form-group">
                        <label for="slugEncuesta">Slug:</label>
                        <input type="text" name="slug" id="slugEncuesta" value="{{ $encuesta->slug }}" readonly />
                    </div>

                            <div id="preguntasContainer">
                                @foreach ($encuesta->preguntas as $pregunta)
                                    <div class="pregunta-editable" data-id="{{ $pregunta->id }}">
                                        <input type="text" name="preguntas[{{ $pregunta->id }}][texto]" value="{{ $pregunta->texto }}" required />
                                        <button type="button" onclick="eliminarPregunta(this)">Eliminar Pregunta</button>

                                        <div class="opciones-container">
                                            {{-- Opciones existentes (editar) --}}
                                            @foreach ($pregunta->opciones as $opcion)
                                                <div class="opcion-editable">
                                                    <input type="text" name="opciones[{{ $pregunta->id }}][{{ $opcion->id }}]" value="{{ $opcion->texto }}" />
                                                    <button type="button" onclick="eliminarOpcion(this)">Eliminar Opción</button>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button type="button" onclick="agregarOpcion(this, 'existente')">Agregar Opción</button>
                                    </div>
                                @endforeach
                            </div>
                        <!-- Contenedor para preguntas nuevas -->
                        <div id="preguntasNuevasContainer"></div>
                    <button type="button" onclick="agregarPregunta()">Agregar Pregunta Nueva</button>
                    <button type="submit">Guardar Cambios</button>
                </form>
            </div>
        </div>
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
