<?php
require_once 'C:\xampp\htdocs\SystemLybrary\Model\Tablets.php';

$tabletsObj = new Tablets();
$tablets = $tabletsObj->getAllTablets();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursos - Tablets</title>
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

        <h2 class="mb-4">Recursos - Tablets</h2>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Cantidad Disponible</th>

                    <th>Solicitar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tablets as $tablet): ?>
                <tr>
                    <td><?php echo $tablet['ID']; ?></td>
                    <td><?php echo $tablet['Marca']; ?></td>
                    <td><?php echo $tablet['Modelo']; ?></td>
                    <td><?php echo $tablet['Cantidad_Disponible']; ?></td>

                    <td>
                        <a href="SolicitudesView.php?id=<?php echo $tablet['ID']; ?>&tipo_recurso=tablets" class="btn btn-info">Solicitar préstamo</a>
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