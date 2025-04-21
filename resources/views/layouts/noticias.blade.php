<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        header {
            background: #2A5E90;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 24px;
        }
        main {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .filters {
            display: flex;
            justify-content: center;
            gap: 15px;
            padding: 15px;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .filters input, .filters select {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .filters button {
            background: #007bff; /* Azul llamativo */
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        .filters button:hover {
            background: #0056b3; /* Azul más oscuro al pasar el mouse */
        }
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .news-item {
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: 0.3s;
        }
        .news-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        }
        .news-item img {
            max-width: 100%;
            border-radius: 10px;
        }
        h3 {
            text-align: center;
            margin-top: 30px;
            color: #333;
        }
        .no-results {
            text-align: center;
            font-size: 18px;
            color: #777;
            margin-top: 20px;
        }
        .back-button {
            display: block;
            margin: 20px auto; /* Centrar el botón */
            padding: 10px 20px;
            background-color: #6c757d; /* Color gris */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none; /* Sin subrayado */
            transition: background-color 0.3s ease;
        }
        .back-button:hover {
            background-color: #5a6268; /* Color gris más oscuro al pasar el mouse */
        }
    </style>
</head>
<body>
    <header>
        <h1>Noticias</h1>
    </header>

    <main>
        <div class="filters">
            <!-- Formulario de búsqueda -->
            <form action="" method="GET" style="display: flex; align-items: center; gap: 10px;">
                <input type="text" name="query" placeholder="Buscar noticias..." required>
                <button type="submit">Buscar 🔍</button>
            </form>

            <!-- Filtros adicionales -->
            <select class="province-filter">
                <option value="piura">Piura</option>
                <option value="lima">Ayabaca</option>
                <option value="arequipa">Huancabamba</option>
                <option value="cusco">Chulucanas</option>
            </select>
            <input type="date" class="date-filter">
            <input type="time" class="time-filter">
        </div>

        <div class="news-grid">
            <?php
            // Array de noticias
            $noticias = [
                ["titulo" => "Noticia 1", "descripcion" => "Descripción de la noticia 1", "imagen" => "images/image1.jpg"],
                ["titulo" => "Noticia 2", "descripcion" => "Descripción de la noticia 2", "imagen" => "images/image2.jpg"],
                ["titulo" => "Noticia 3", "descripcion" => "Descripción de la noticia 3", "imagen" => "images/image3.jpg"],
                ["titulo" => "Noticia 4", "descripcion" => "Descripción de la noticia 4", "imagen" => "images/image4.jpg"],
                ["titulo" => "Noticia 5", "descripcion" => "Descripción de la noticia 5", "imagen" => "images/image5.jpg"],
                ["titulo" => "Noticia 6", "descripcion" => "Descripción de la noticia 6", "imagen" => "images/image6.jpg"],
            ];

            // Filtrar noticias según la consulta
            $query = isset($_GET['query']) ? strtolower($_GET['query']) : '';
            $noticiasFiltradas = array_filter($noticias, function ($noticia) use ($query) {
                return strpos(strtolower($noticia["titulo"]), $query) !== false ||
                       strpos(strtolower($noticia["descripcion"]), $query) !== false;
            });

            // Mostrar noticias filtradas
            if (empty($noticiasFiltradas)): ?>
                <p class="no-results">No se encontraron noticias para: "<?php echo htmlspecialchars($query); ?>"</p>
            <?php else: ?>
                <?php foreach ($noticiasFiltradas as $noticia): ?>
                    <div class="news-item">
                        <img src="<?php echo $noticia['imagen']; ?>" alt="<?php echo $noticia['titulo']; ?>">
                        <p><?php echo $noticia['descripcion']; ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- Botón Volver -->
        <a href="{{ route('app') }}" class="back-button">Volver</a> <!-- Cambia 'noticias' por la ruta correcta -->
    </main>
</body>
</html>
