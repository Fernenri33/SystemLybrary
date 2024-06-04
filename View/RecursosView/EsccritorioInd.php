<?php
require_once 'C:\xampp\htdocs\SystemLybrary\Model\EscritorioInd.php';

$escritorio = new EscritorioInd();
$escritorios = $escritorio->getAllEscritorios();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursos - Escritorios</title>
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
        <h2 class="mb-4">Recursos - Escritorios</h2>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Cantidad Disponible</th>
                    <th>Solicitar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($escritorios as $escritorio): ?>
                <tr>
                    <td><?php echo $escritorio['ID']; ?></td>
                    <td><?php echo $escritorio['Cantidad_Disponible']; ?></td>
                    
                    <td>
                        <a href="SolicitudesView.php?id=<?php echo $escritorio['ID']; ?>&tipo_recurso=escritorio_individual" class="btn btn-info">Solicitar préstamo</a>
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
