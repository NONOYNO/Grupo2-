<?php
$nombre = "jalil Jorman";
$curso = "Desarrollo Web 4A";
$array_notas = [10, 20, 30, 40, 50];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRI14bx" crossorigin="anonymous">
    <style>
        .border_div {
            border: 2px solid #dee2e6;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            background-color: #f8f9fa;
        }
        .nota-item {
            padding: 5px 10px;
            margin: 5px;
            border-radius: 5px;
            background-color: #e9ecef;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="container border_div">
            <h1 class="text-center">Bienvenido <?php echo $nombre; ?>, del curso <?php echo $curso; ?></h1>
        </div>
        
        <div class="container border_div">
            <h1 class="text-center text-success">HOLA SOY POLK VERNAZA</h1>
            <h1 class="text-center text-success">HOLA SOY Jalil Estupiñan</h1>
            <h2 class="text-center text-success">HOLA SOY DAYANA CORTEZ <h2>
            <h1 class="text-center text-success">HOLA SOY MARIA BARDALES</h1>
            <h3 class="text-center text-info">
                <?php echo $array_notas[3]; ?>
            </h3>
            
            <?php if ($array_notas[3] < 60): ?>
                <p class="text-center text-danger">Tu calificación no es satisfactoria</p>
            <?php else: ?>
                <p class="text-center text-success">¡Felicidades! Tu calificación es satisfactoria</p>
            <?php endif; ?>
            
            <div class="mt-4">
                <h4 class="text-center">Todas las notas:</h4>
                <ul class="list-unstyled text-center">
                    <?php foreach($array_notas as $index => $nota): ?>
                        <li class="nota-item d-inline-block">
                            Nota <?php echo $index + 4; ?>: <?php echo $nota; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <div class="text-center mt-3">
                <p class="fw-bold">Promedio: 
                    <span class="text-primary">
                        <?php echo array_sum($array_notas) / count($array_notas); ?>
                    </span>
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-sRI14bx" crossorigin="anonymous"></script>
</body>
</html>
