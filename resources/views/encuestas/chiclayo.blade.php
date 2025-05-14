<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuestas - CHICLAYO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="{{ asset('css/encuestas.css') }}">
</head>
<body>
    <div class="encuesta-container animate_animated animate_fadeIn">
        <h1 class="animate_animated animate_fadeInDown">ENCUESTA COMUNAL DE CHICLAYO</h1>
        
        <div class="progress-container">
            <div class="progress-bar" id="progressBar"></div>
        </div>
        
        <form action="/guardar-encuesta" method="POST" id="encuestaForm">
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
                    <input type="number" id="edad" name="edad" min="18" max="100" required>
                </div>
                
                <div class="divider"></div>
                
                <!-- Pregunta 1 - Escala numérica -->
                <div class="pregunta">
                    <h3 class="requerido">1. En una escala del 1 al 5, ¿qué tan satisfecho está con los servicios municipales en Morropón?</h3>
                    <div class="escala">
                        <label class="escala-item">
                            <input type="radio" name="satisfaccion" value="1" required style="display: none;">
                            <div class="escala-numero">1</div>
                            <div class="escala-label">Muy insatisfecho</div>
                        </label>
                        <label class="escala-item">
                            <input type="radio" name="satisfaccion" value="2" style="display: none;">
                            <div class="escala-numero">2</div>
                            <div class="escala-label">Insatisfecho</div>
                        </label>
                        <label class="escala-item">
                            <input type="radio" name="satisfaccion" value="3" style="display: none;">
                            <div class="escala-numero">3</div>
                            <div class="escala-label">Neutral</div>
                        </label>
                        <label class="escala-item">
                            <input type="radio" name="satisfaccion" value="4" style="display: none;">
                            <div class="escala-numero">4</div>
                            <div class="escala-label">Satisfecho</div>
                        </label>
                        <label class="escala-item">
                            <input type="radio" name="satisfaccion" value="5" style="display: none;">
                            <div class="escala-numero">5</div>
                            <div class="escala-label">Muy satisfecho</div>
                        </label>
                    </div>
                </div>
                
                <div class="divider"></div>
                
                <!-- Pregunta 2 - Texto largo -->
                <div class="pregunta">
                    <h3>2. ¿Qué sugerencias o propuestas tiene para mejorar los servicios en su distrito?</h3>
                    <textarea id="sugerencias" name="sugerencias" placeholder="Escriba aquí sus sugerencias..."></textarea>
                </div>
                
                <div class="nav-buttons">
                    <button type="button" class="btn-next" onclick="nextPage(1)">Siguiente →</button>
                </div>
            </div>
            
            <!-- Página 2 -->
            <div class="page" id="page2">
                <h2>Problemas Comunitarios</h2>
                
                <!-- Pregunta 3 - Selección múltiple -->
                <div class="pregunta">
                    <h3 class="requerido">3. ¿Cuáles son los principales problemas que afectan a su comunidad en Morropón? 
                        <span class="tooltip">
                            <span style="color: var(--primary-color);">(?)</span>
                            <span class="tooltiptext">Seleccione todos los problemas que considere relevantes</span>
                        </span>
                    </h3>
                    <div class="opciones">
                        <div class="opcion-checkbox" onclick="animateOption(this)">
                            <input type="checkbox" id="problema-1" name="problemas[]" value="Falta de agua potable">
                            <label for="problema-1">Falta de agua potable</label>
                        </div>
                        <div class="opcion-checkbox" onclick="animateOption(this)">
                            <input type="checkbox" id="problema-2" name="problemas[]" value="Carencia de servicios de salud">
                            <label for="problema-2">Carencia de servicios de salud</label>
                        </div>
                        <div class="opcion-checkbox" onclick="animateOption(this)">
                            <input type="checkbox" id="problema-3" name="problemas[]" value="Mal estado de carreteras">
                            <label for="problema-3">Mal estado de carreteras</label>
                        </div>
                        <div class="opcion-checkbox" onclick="animateOption(this)">
                            <input type="checkbox" id="problema-4" name="problemas[]" value="Falta de empleo">
                            <label for="problema-4">Falta de empleo</label>
                        </div>
                        <div class="opcion-checkbox" onclick="animateOption(this)">
                            <input type="checkbox" id="problema-5" name="problemas[]" value="Inseguridad ciudadana">
                            <label for="problema-5">Inseguridad ciudadana</label>
                        </div>
                        <div class="opcion-checkbox" onclick="animateOption(this)">
                            <input type="checkbox" id="problema-6" name="problemas[]" value="Contaminación ambiental">
                            <label for="problema-6">Contaminación ambiental</label>
                        </div>
                    </div>
                </div>
                
                <div class="divider"></div>
                
                <!-- Pregunta 4 - Selección única -->
                <div class="pregunta">
                    <h3 class="requerido">4. ¿Con qué frecuencia visita el centro de Morropón?</h3>
                    <div class="opciones">
                        <div class="opcion-radio" onclick="animateOption(this)">
                            <input type="radio" id="frecuencia-1" name="frecuencia" value="Diariamente" required>
                            <label for="frecuencia-1">Diariamente</label>
                        </div>
                        <div class="opcion-radio" onclick="animateOption(this)">
                            <input type="radio" id="frecuencia-2" name="frecuencia" value="Semanalmente">
                            <label for="frecuencia-2">Semanalmente</label>
                        </div>
                        <div class="opcion-radio" onclick="animateOption(this)">
                            <input type="radio" id="frecuencia-3" name="frecuencia" value="Mensualmente">
                            <label for="frecuencia-3">Mensualmente</label>
                        </div>
                        <div class="opcion-radio" onclick="animateOption(this)">
                            <input type="radio" id="frecuencia-4" name="frecuencia" value="Ocasionalmente">
                            <label for="frecuencia-4">Ocasionalmente</label>
                        </div>
                        <div class="opcion-radio" onclick="animateOption(this)">
                            <input type="radio" id="frecuencia-5" name="frecuencia" value="Casi nunca">
                            <label for="frecuencia-5">Casi nunca</label>
                        </div>
                    </div>
                </div>
                
                <div class="divider"></div>
                
                <!-- Pregunta 5 - Fecha -->
                <div class="pregunta">
                    <h3>5. ¿Cuándo fue la última vez que participó en una actividad comunal?</h3>
                    <input type="date" id="ultima-participacion" name="ultima-participacion">
                </div>
                
                <div class="nav-buttons">
                    <button type="button" class="btn-prev" onclick="prevPage(2)">← Anterior</button>
                    <button type="button" class="btn-next" onclick="nextPage(2)">Siguiente →</button>
                </div>
            </div>
            
            <!-- Página 3 -->
            <div class="page" id="page3">
                <h2>Evaluación de Servicios</h2>
                
                <!-- Pregunta 6 - Texto corto -->
                <div class="pregunta">
                    <h3>6. ¿Qué actividad le gustaría que se realice en su comunidad?</h3>
                    <input type="text" id="actividad-deseada" name="actividad-deseada" placeholder="Ej: Talleres de artesanía, deportes, etc.">
                </div>
                
                <div class="divider"></div>
                
                <!-- Pregunta 7 - Escala de satisfacción -->
                <div class="pregunta">
                    <h3 class="requerido">7. ¿Cómo calificaría la calidad de atención que brinda el SATPlus?</h3>
                    <div class="opciones">
                        <div class="opcion-radio" onclick="animateOption(this)">
                            <input type="radio" id="opcion-d" name="calificacion" value="D" required>
                            <label for="opcion-d">D - Deficiente</label>
                        </div>
                        <div class="opcion-radio" onclick="animateOption(this)">
                            <input type="radio" id="opcion-e" name="calificacion" value="E">
                            <label for="opcion-e">E - Regular</label>
                        </div>
                        <div class="opcion-radio" onclick="animateOption(this)">
                            <input type="radio" id="opcion-f" name="calificacion" value="F">
                            <label for="opcion-f">F - Bueno</label>
                        </div>
                        <div class="opcion-radio" onclick="animateOption(this)">
                            <input type="radio" id="opcion-g" name="calificacion" value="G">
                            <label for="opcion-g">G - Muy bueno</label>
                        </div>
                        <div class="opcion-radio" onclick="animateOption(this)">
                            <input type="radio" id="opcion-h" name="calificacion" value="H">
                            <label for="opcion-h">H - Excelente</label>
                        </div>
                    </div>
                </div>
                
                <div class="divider"></div>
                
                <!-- Pregunta 8 - Textarea -->
                <div class="pregunta">
                    <h3>8. ¿Algún comentario adicional sobre la gestión municipal?</h3>
                    <textarea id="comentarios" name="comentarios" placeholder="Escriba aquí sus comentarios..."></textarea>
                </div>
                
                <div class="nav-buttons">
                    <button type="button" class="btn-prev" onclick="prevPage(3)">← Anterior</button>
                    <button type="submit" class="btn-submit pulse">Enviar Encuesta</button>
                </div>
            </div>
        </form>
    </div>

    <script src="{{ asset('js/scriptENC.js') }}"></script>
</body>
</html>