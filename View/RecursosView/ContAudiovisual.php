<?php
require_once 'C:\xampp\htdocs\SystemLybrary\Model\ContAudioVisual.php';

$videoObj = new ContAudioVisual();
$videos = $videoObj->getAllvideo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursos - Video</title>
    <!-- Incluyendo Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .table{
        text-align: center;
    }
</style>
<body>

    <div class="container mt-4">
        <h2 class="mb-4">Recursos - Video</h2>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Director</th>
                    <th>Formato</th>
                    <th>Cantidad Disponible</th>
                    <th>Solicitar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($videos as $video): ?>
                <tr>
                    <td><?php echo $video['ID']; ?></td>
                    <td><?php echo $video['Titulo']; ?></td>
                    <td><?php echo $video['Director']; ?></td>
                    <td><?php echo $video['Formato']; ?></td>
                    <td><?php echo $video['Cantidad_Disponible']; ?></td>
                    
                    <td>
                        <a href="SolicitudesView.php?id=<?php echo $video['ID']; ?>&tipo_recurso=cont_audiovisual" class="btn btn-info">Solicitar préstamo</a>
                    </td>
                    
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Incluyendo Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
