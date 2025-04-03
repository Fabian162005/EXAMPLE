<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuestas - Morropón</title>
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #e74c3c;
            --text-color: #333;
            --bg-color: #f9f9f9;
            --border-color: #ddd;
            --highlight-color: #3498db;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--bg-color);
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        
        h1, h2 {
            color: var(--primary-color);
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }
        
        h1::after, h2::after {
            content: "";
            display: block;
            width: 100px;
            height: 3px;
            background: var(--secondary-color);
            margin: 10px auto;
        }
        
        .encuesta-container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            padding: 30px;
            margin-bottom: 30px;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }
        
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            font-size: 16px;
        }
        
        .divider {
            border-top: 2px dashed var(--border-color);
            margin: 30px 0;
        }
        
        .pregunta {
            margin-bottom: 25px;
        }
        
        .pregunta h3 {
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        .opciones {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 10px;
        }
        
        .opcion-checkbox {
            display: flex;
            align-items: center;
        }
        
        .opcion-checkbox input {
            margin-right: 10px;
        }
        
        .btn-submit {
            background-color: var(--secondary-color);
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            margin: 30px auto 0;
            transition: background-color 0.3s;
        }
        
        .btn-submit:hover {
            background-color: #c0392b;
        }
        
        @media (max-width: 600px) {
            .opciones {
                grid-template-columns: 1fr;
            }
            
            body {
                padding: 15px;
            }
            
            .encuesta-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="encuesta-container">
        <h1>ELECCIONES MORROPON</h1>
        
        <form action="/guardar-encuesta" method="POST">
            <!-- Datos demográficos -->
            <div class="form-group">
                <label for="sexo">Sexo:</label>
                <select id="sexo" name="sexo" required>
                    <option value="">Seleccione</option>
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                    <option value="otro">Otro</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" min="18" max="100" required>
            </div>
            
            <div class="divider"></div>
            
            <!-- Pregunta 1 -->
            <div class="pregunta">
                <h3>1. ¿Cómo calificaría la calidad de atención que brinda el SATPlus?</h3>
                <div class="opciones">
                    <div class="opcion-checkbox">
                        <input type="radio" id="opcion-d" name="calificacion" value="D" required>
                        <label for="opcion-d">D</label>
                    </div>
                    <div class="opcion-checkbox">
                        <input type="radio" id="opcion-e" name="calificacion" value="E">
                        <label for="opcion-e">E</label>
                    </div>
                    <div class="opcion-checkbox">
                        <input type="radio" id="opcion-f" name="calificacion" value="F">
                        <label for="opcion-f">F</label>
                    </div>
                </div>
            </div>
            
            <div class="divider"></div>
            
            <!-- Pregunta 2 -->
            <div class="pregunta">
                <h3>2. ¿Cuáles son los principales problemas que afectan a su comunidad en Morropón?</h3>
                <div class="opciones">
                    <div class="opcion-checkbox">
                        <input type="checkbox" id="problema-1" name="problemas[]" value="Programa 1">
                        <label for="problema-1">Programa 1</label>
                    </div>
                    <div class="opcion-checkbox">
                        <input type="checkbox" id="problema-2" name="problemas[]" value="Programa 2">
                        <label for="problema-2">Programa 2</label>
                    </div>
                    <div class="opcion-checkbox">
                        <input type="checkbox" id="problema-3" name="problemas[]" value="Programa 3">
                        <label for="problema-3">Programa 3</label>
                    </div>
                    <div class="opcion-checkbox">
                        <input type="checkbox" id="problema-4" name="problemas[]" value="Programa 4">
                        <label for="problema-4">Programa 4</label>
                    </div>
                    <div class="opcion-checkbox">
                        <input type="checkbox" id="problema-5" name="problemas[]" value="Programa 5">
                        <label for="problema-5">Programa 5</label>
                    </div>
                </div>
            </div>
            
            <button type="submit" class="btn-submit">Enviar Encuesta</button>
        </form>
    </div>
</body>
</html>