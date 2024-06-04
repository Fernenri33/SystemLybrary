<?php

require_once '../Model/Database.php'; // Asegúrate de tener la clase Database para conectar con la base de datos

// Verificar si hay una sesión iniciada
if (!isset($_SESSION['usuario'])) {
    // Redireccionar al usuario a la página de inicio de sesión si no hay sesión activa
    header("Location: http://localhost/SystemLybrary/login.php");
    exit();
}

// Obtener el ID del usuario de la sesión
$usuario_id = $_SESSION['usuario']->ID;

// Conectar a la base de datos
$db = new Database();
$conn = $db->conn;

// Consulta para obtener las solicitudes del usuario
$sql = "SELECT * FROM solicitud WHERE Usuarios_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $usuario_id);
$stmt->execute();
$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Solicitudes</title>
    <!-- Incluyendo Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .table {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="mb-4">Mis Solicitudes</h2>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Cantidad</th>
                <th>Tipo de Actividad</th>
                <th>Estado</th>
                <th>Fecha Creación</th>
                <th>Fecha Actividad</th>
                <th>Fecha Fin Actividad</th>
                <th>ID Recurso</th>
                <th>Nombre Recurso</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($solicitud = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $solicitud['ID']; ?></td>
                    <td><?php echo $solicitud['cantidad']; ?></td>
                    <td><?php echo $solicitud['tipo_actividad']; ?></td>
                    <td><?php echo $solicitud['estado']; ?></td>
                    <td><?php echo $solicitud['fecha_creacion']; ?></td>
                    <td><?php echo $solicitud['fecha_actividad']; ?></td>
                    <td><?php echo $solicitud['fecha_fin_actividad']; ?></td>
                    <td><?php echo $solicitud['ID_Recurso']; ?></td>
                    <td><?php echo $solicitud['nombre']; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<!-- Incluyendo Bootstrap JS y dependencias -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
