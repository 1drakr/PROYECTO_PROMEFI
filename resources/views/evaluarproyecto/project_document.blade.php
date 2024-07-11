<!DOCTYPE html>
<html>
<head>
    <title>DOCUMENTO DEL PROJECTO</title>
    <style>
        body {
            font-family: 'Arial, sans-serif';
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h1 {
            margin: 0;
        }
        .content {
            margin: 20px;
        }
        .content .section {
            margin-bottom: 20px;
        }
        .content .section h2 {
            margin-bottom: 10px;
            border-bottom: 1px solid #000;
            padding-bottom: 5px;
        }
        .content .section p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Documento del proyecto</h1>
        <h2>{{ $solicitud->proyecto->titulo }}</h2>
    </div>
    <div class="content">
        <div class="section">
            <h2>General Information</h2>
            <p><strong>Title:</strong> {{ $solicitud->proyecto->titulo }}</p>
            <p><strong>Subtitle:</strong> {{ $solicitud->proyecto->subtitulo }}</p>
            <p><strong>Main Category:</strong> {{ $solicitud->proyecto->categoria_principal }}</p>
            <p><strong>Category:</strong> {{ $solicitud->proyecto->categoria }}</p>
            <p><strong>Subcategory:</strong> {{ $solicitud->proyecto->subcategoria }}</p>
            <p><strong>Location:</strong> {{ $solicitud->proyecto->ubicacion }}</p>
            <p><strong>Deadline:</strong> {{ $solicitud->proyecto->fecha_limite }}</p>
            <p><strong>Campaign Duration:</strong> {{ $solicitud->proyecto->duracion_campaña }}</p>
            <p><strong>Goal Amount:</strong> {{ $solicitud->proyecto->monto_meta }}</p>
            <p><strong>Risks and Challenges:</strong> {{ $solicitud->proyecto->riesgos_desafios }}</p>
            <p><strong>Project Type:</strong> {{ $solicitud->proyecto->tipo_proyecto }}</p>
            <p><strong>Status:</strong> {{ $solicitud->proyecto->estado->nombre }}</p>
        </div>
        <div class="section">
            <h2>Informacion del perfil</h2>
            <p><strong>First Name:</strong> {{ $solicitud->proyecto->perfil->Nombre }}</p>
            <p><strong>Last Name:</strong> {{ $solicitud->proyecto->perfil->Apellido }}</p>
            <p><strong>Location:</strong> {{ $solicitud->proyecto->perfil->ubicacion }}</p>
            <p><strong>Time Zone:</strong> {{ $solicitud->proyecto->perfil->zona_horaria }}</p>
            <p><strong>User Name:</strong> {{ $solicitud->proyecto->perfil->user->name }}</p>
            <p><strong>User Email:</strong> {{ $solicitud->proyecto->perfil->user->email }}</p>
        </div>
        <div class="section">
            <h2>Historia de Proyecto</h2>
            <p><strong>Story Title:</strong> {{ $solicitud->proyecto->historia->titulo }}</p>
            <p><strong>Story Text:</strong> {{ $solicitud->proyecto->historia->texto }}</p>
        </div>
        <div class="section">
            <h2>Puntuacion de Popularidad</h2>
            <p><strong>Puntuacion:</strong> {{ $score->score }}</p>
            <canvas id="scoreChart" width="400" height="200"></canvas>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                var ctx = document.getElementById('scoreChart').getContext('2d');
                var scoreChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Puntuacion'],
                        datasets: [{
                            label: 'Puntuacion',
                            data: [{{ $score->score * 100 }}],
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                                max: 100
                            }
                        }
                    }
                });
            </script>
    </div>
</body>
</html>
