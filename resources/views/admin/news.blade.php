<?php
session_start();
if(!isset($_SESSION['admin_logged_in'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin - Noticias</title>
    <!-- Incluye tus estilos CSS -->
</head>
<body>
    <div class="admin-container">
        <h1>Administrar Noticias</h1>
        <div class="news-editor">
            <!-- Formulario para agregar/editar noticias -->
            <form id="news-form">
                <input type="text" id="news-title" placeholder="Título">
                <textarea id="news-content" placeholder="Contenido"></textarea>
                <input type="text" id="news-iframe" placeholder="Código iframe (opcional)">
                <button type="submit">Guardar Noticia</button>
            </form>
            
            <!-- Listado de noticias existentes -->
            <div class="news-list">
                <!-- Aquí se cargarán las noticias existentes -->
            </div>
        </div>
    </div>
    <script src="admin-news.js"></script>
</body>
</html>