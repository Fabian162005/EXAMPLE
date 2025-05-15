<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados Encuesta</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background: #f5f5f5; }
        h1 { color: #222; }
        .stats { display: flex; flex-wrap: wrap; gap: 20px; }
        .card { background: white; padding: 20px; border-radius: 10px; width: 200px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        canvas { max-width: 100%; margin: 20px auto; }
    </style>
</head>
<body>

    <h1>Resultados de la Encuesta Comunal</h1>

    <div class="stats">
        <div class="card"><strong>Participantes:</strong> {{ $total }}</div>
        <div class="card"><strong>Edad Promedio:</strong> {{ $edadPromedio }}</div>
        <div class="card"><strong>Satisfacción Promedio:</strong> {{ $promedioSatisfaccion }}</div>
        <div class="card"><strong>% Mujeres:</strong> {{ round(($participacionFemenina / max($total, 1)) * 100, 1) }}%</div>
    </div>

    <hr>

    <h2>Gráficos</h2>

    <canvas id="satisfaccionChart"></canvas>
    <canvas id="problemasChart"></canvas>
    <canvas id="frecuenciaChart"></canvas>

    <script>
        // Satisfacción
        const satisfaccionCtx = document.getElementById('satisfaccionChart').getContext('2d');
        new Chart(satisfaccionCtx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($satisfaccion->pluck('satisfaccion')) !!},
                datasets: [{
                    label: 'Cantidad de respuestas',
                    data: {!! json_encode($satisfaccion->pluck('total')) !!},
                    backgroundColor: '#4CAF50'
                }]
            }
        });

        // Problemas
        const problemasCtx = document.getElementById('problemasChart').getContext('2d');
        new Chart(problemasCtx, {
            type: 'doughnut',
            data: {
                labels: {!! json_encode($conteoProblemas->keys()) !!},
                datasets: [{
                    label: 'Frecuencia de problemas',
                    data: {!! json_encode($conteoProblemas->values()) !!},
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#8E44AD', '#2ECC71', '#E67E22']
                }]
            }
        });

        // Frecuencia
        const frecuenciaCtx = document.getElementById('frecuenciaChart').getContext('2d');
        new Chart(frecuenciaCtx, {
            type: 'pie',
            data: {
                labels: {!! json_encode($frecuencia->pluck('frecuencia')) !!},
                datasets: [{
                    label: 'Frecuencia de visitas',
                    data: {!! json_encode($frecuencia->pluck('total')) !!},
                    backgroundColor: ['#3498DB', '#E74C3C', '#1ABC9C', '#F39C12', '#9B59B6']
                }]
            }
        });
    </script>
</body>
</html>
