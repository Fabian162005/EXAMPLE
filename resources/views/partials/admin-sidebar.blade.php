<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Admin - Noticias</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
        }

        .admin-container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        .news-editor form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input[type="text"],
        textarea {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .news-list {
            margin-top: 30px;
        }

        .news-item {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            position: relative;
        }

        .news-title {
            font-weight: bold;
            font-size: 20px;
            margin-bottom: 8px;
        }

        .news-content {
            color: #555;
            margin-bottom: 15px;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 8px 14px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-edit {
            background-color: #ffc107;
            color: #fff;
        }

        .btn-edit:hover {
            background-color: #e0a800;
        }

        .btn-delete {
            background-color: #dc3545;
            color: white;
        }

        .btn-delete:hover {
            background-color: #bd2130;
        }

        .btn-update {
            background-color: #28a745;
            color: white;
        }

        .btn-update:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <h1>Administrar Noticias</h1>
        <div class="news-editor">
            <!-- Formulario para agregar/editar noticias -->
            <form id="news-form">
                <input type="text" id="news-title" placeholder="Título" required>
                <textarea id="news-content" placeholder="Contenido" rows="5" required></textarea>
                <input type="text" id="news-iframe" placeholder="Código iframe (opcional)">
                <button type="submit">Guardar Noticia</button>
            </form>

            <!-- Listado de noticias existentes -->
            <div class="news-list" id="news-list">
                <!-- Aquí se cargarán las noticias existentes -->
            </div>
        </div>
    </div>

    <script src="admin-news.js"></script>
</body>
</html>
