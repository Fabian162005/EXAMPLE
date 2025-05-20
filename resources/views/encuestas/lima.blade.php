<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Encuestas - Lima</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('css/encuestas.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/resultados.css') }}" />
</head>
<body>
    <div class="encuesta-container animate__animated animate__fadeIn">
        <h1 class="animate__animated animate__fadeInDown">ENCUESTA COMUNAL DE LIMA</h1>

        <div class="progress-container">
            <div class="progress-bar" id="progressBar"></div>
        </div>

        <form action="{{ route('encuestas.store') }}" method="POST" id="encuestaForm">
            @csrf
            <input type="hidden" name="nombre" value="Encuesta Comunal Lima" />
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

                <!-- Pregunta 1 -->
                <div class="pregunta">
                    <h3 class="requerido">1. En una escala del 1 al 5, ¿qué tan satisfecho está con los servicios municipales en Morropón?</h3>
                    <input type="hidden" name="pregunta1_texto" value="1. En una escala del 1 al 5, ¿qué tan satisfecho está con los servicios municipales en Morropón?" />
                    <div class="escala">
                        @for ($i = 1; $i <= 5; $i++)
                            <label class="escala-item">
                                <input type="radio" name="satisfaccion" value="{{ $i }}" required style="display:none;" />
                                <div class="escala-numero">{{ $i }}</div>
                                <div class="escala-label">
                                    @switch($i)
                                        @case(1) Muy insatisfecho @break
                                        @case(2) Insatisfecho @break
                                        @case(3) Neutral @break
                                        @case(4) Satisfecho @break
                                        @case(5) Muy satisfecho @break
                                    @endswitch
                                </div>
                            </label>
                        @endfor
                    </div>
                </div>

                <!-- Pregunta 2 -->
                <div class="pregunta">
                    <h3>2. ¿Qué sugerencias o propuestas tiene para mejorar los servicios en su distrito?</h3>
                    <input type="hidden" name="pregunta2_texto" value="2. ¿Qué sugerencias o propuestas tiene para mejorar los servicios en su distrito?" />
                    <textarea id="sugerencias" name="sugerencias" placeholder="Escriba aquí sus sugerencias..."></textarea>
                </div>

                <div class="nav-buttons">
                    <button type="button" class="btn-next" onclick="nextPage(1)">Siguiente →</button>
                </div>
            </div>

            <!-- Página 2 -->
            <div class="page" id="page2">
                <h2>Problemas Comunitarios</h2>

                <!-- Pregunta 3 -->
                <div class="pregunta">
                    <h3 class="requerido">3. ¿Cuáles son los principales problemas que afectan a su comunidad en Morropón?</h3>
                    <div class="opciones">
                        @php
                            $problemas = [
                                "Falta de agua potable",
                                "Inseguridad ciudadana",
                                "Falta de áreas verdes",
                                "Mal estado de calles",
                                "Otros"
                            ];
                        @endphp
                        @foreach ($problemas as $index => $problema)
                            <div class="opcion-checkbox" onclick="animateOption(this)">
                                <input type="checkbox" id="problema-{{ $index }}" name="problemas[]" value="{{ $problema }}" />
                                <label for="problema-{{ $index }}">{{ $problema }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Pregunta 4 -->
                <div class="pregunta">
                    <h3 class="requerido">4. ¿Con qué frecuencia visita el centro de Morropón?</h3>
                    <div class="opciones">
                        @foreach (["Diariamente", "Semanalmente", "Mensualmente", "Rara vez", "Nunca"] as $i => $f)
                            <div class="opcion-radio" onclick="animateOption(this)">
                                <input type="radio" id="frecuencia-{{ $i }}" name="frecuencia" value="{{ $f }}" required />
                                <label for="frecuencia-{{ $i }}">{{ $f }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Pregunta 5 -->
                <div class="pregunta">
                    <h3>5. ¿Cuándo fue la última vez que participó en una actividad comunal?</h3>
                    <input type="date" id="ultima-participacion" name="ultima_participacion" />
                </div>

                <div class="nav-buttons">
                    <button type="button" class="btn-prev" onclick="prevPage(2)">← Anterior</button>
                    <button type="button" class="btn-next" onclick="nextPage(2)">Siguiente →</button>
                </div>
            </div>

            <!-- Página 3 -->
            <div class="page" id="page3">
                <h2>Evaluación de Servicios</h2>

                <!-- Pregunta 6 -->
                <div class="pregunta">
                    <h3>6. ¿Qué actividad le gustaría que se realice en su comunidad?</h3>
                    <input type="text" id="actividad-deseada" name="actividad_deseada" placeholder="Ej: Talleres de artesanía, deportes, etc." />
                </div>

                <!-- Pregunta 7 -->
                <div class="pregunta">
                    <h3 class="requerido">7. ¿Cómo calificaría la calidad de atención que brinda el SATPlus?</h3>
                    <div class="opciones">
                        @foreach (["D" => "Deficiente", "C" => "Regular", "B" => "Bueno", "A" => "Excelente"] as $val => $text)
                            <div class="opcion-radio" onclick="animateOption(this)">
                                <input type="radio" id="opcion-{{ strtolower($val) }}" name="calificacion" value="{{ $val }}" required />
                                <label for="opcion-{{ strtolower($val) }}">{{ $val }} - {{ $text }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Pregunta 8 -->
                <div class="pregunta">
                    <h3>8. ¿Algún comentario adicional sobre la gestión municipal?</h3>
                    <textarea id="comentarios" name="comentarios" placeholder="Escriba aquí sus comentarios..."></textarea>
                </div>

                <div class="nav-buttons">
                    <button type="button" class="btn-prev" onclick="prevPage(3)">← Anterior</button>
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
