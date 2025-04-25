<?php
// partido.php - Página de información de Fuerza Popular

// Datos del partido político
$partido = [
    'nombre' => 'Fuerza Popular',
    'fundacion' => '4 de marzo de 2010',
    'lider' => 'Keiko Fujimori Higuchi',
    'ideologia' => 'Conservadurismo, Populismo de derecha',
    'colores' => ['Rojo', 'Blanco'],
    'sede_central' => 'Av. Arequipa 3660, San Isidro, Lima',
    'web_oficial' => 'https://www.fuerzapopular.pe',
    'descripcion' => 'Fuerza Popular es un partido político peruano fundado en 2010. 
                     Ha participado en procesos electorales obteniendo representación 
                     en el Congreso de la República del Perú.',
    'resultados' => [
        '2011' => 'Segunda vuelta presidencial (36.5%)',
        '2016' => 'Segunda vuelta presidencial (49.9%)',
        '2020' => 'Congresistas: 15 escaños',
        '2021' => 'Segunda vuelta presidencial (44.2%)'
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $partido['nombre']; ?> - Información del Partido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #d40000;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .party-info {
            background: #f4f4f4;
            padding: 20px;
            margin: 20px 0;
            border-left: 5px solid #d40000;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #d40000;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .logo {
            text-align: center;
            margin: 20px 0;
        }
        .logo img {
            max-width: 200px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1><?php echo $partido['nombre']; ?></h1>
            <p>Partido Político del Perú</p>
        </div>
    </header>

    <div class="container">
        <div class="logo">
            <!-- Reemplaza con la ruta correcta del logo -->
            <img src="logo-fuerza-popular.png" alt="Logo <?php echo $partido['nombre']; ?>">
        </div>

        <div class="party-info">
            <h2>Información Básica</h2>
            <p><strong>Líder:</strong> <?php echo $partido['lider']; ?></p>
            <p><strong>Fecha de Fundación:</strong> <?php echo $partido['fundacion']; ?></p>
            <p><strong>Ideología:</strong> <?php echo $partido['ideologia']; ?></p>
            <p><strong>Colores representativos:</strong> <?php echo implode(', ', $partido['colores']); ?></p>
            <p><strong>Sede Central:</strong> <?php echo $partido['sede_central']; ?></p>
            <p><strong>Sitio Web Oficial:</strong> <a href="<?php echo $partido['web_oficial']; ?>" target="_blank"><?php echo $partido['web_oficial']; ?></a></p>
        </div>

        <div class="party-info">
            <h2>Descripción</h2>
            <p><?php echo $partido['descripcion']; ?></p>
        </div>

        <h2>Resultados Electorales Recientes</h2>
        <table>
            <tr>
                <th>Año Electoral</th>
                <th>Resultado</th>
            </tr>
            <?php foreach ($partido['resultados'] as $ano => $resultado): ?>
            <tr>
                <td><?php echo $ano; ?></td>
                <td><?php echo $resultado; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>

        <div class="party-info">
            <h2>Representación Actual</h2>
            <p>Información sobre cargos públicos actuales, congresistas, autoridades regionales, etc.</p>
            <!-- Aquí podrías agregar una tabla con los congresistas actuales -->
        </div>
    </div>

    <footer style="background: #333; color: white; text-align: center; padding: 20px 0; margin-top: 20px;">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> - <?php echo $partido['nombre']; ?></p>
            <p>Información actualizada al <?php echo date('d/m/Y'); ?></p>
        </div>
    </footer>
</body>
</html>