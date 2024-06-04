<?php
require_once '../Model/Usuarios.php';

// session_start();

// Verificar si hay una sesión iniciada
if (!isset($_SESSION['usuario'])) {
    // Redireccionar al usuario a la página de inicio de sesión si no hay sesión activa
    header("Location: http://localhost/SystemLybrary/login.php");
    exit();
}

// Obtener el usuario de la sesión
$usuario = $_SESSION['usuario'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Solicitud</title>
    <!-- Incluyendo Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border-radius: 10px;
        }
        .card-header {
            background-color: #007bff;
            color: white;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="mb-0">Formulario de Solicitud</h2>
                    </div>
                    <div class="card-body">
                    <form action="../Model/Solicitudes.php" method="post">
    <input type="hidden" name="Usuarios_id" value="<?php echo $_SESSION['usuario']->ID; ?>">

    <input type="hidden" name="ID_Recurso" value="<?php echo $_GET['id']; ?>">
    <input type="hidden" name="tipo_recurso" value="<?php echo $_GET['tipo_recurso']; ?>">



    <div class="form-group">


        <label for="cantidad">Cantidad</label>
        <input type="number" class="form-control" id="cantidad" name="cantidad" required>
    </div>
    <div class="form-group">
        <label for="tipo_actividad">Tipo de Actividad</label>
        <select class="form-control" id="tipo_actividad" name="tipo_actividad" required>
            <option value="Préstamo">Préstamo</option>
            <option value="Reserva">Reserva</option>
        </select>
    </div>
    <div class="form-group">
        <label for="fecha_actividad">Fecha de Actividad</label>
        <input type="datetime-local" class="form-control" id="fecha_actividad" name="fecha_actividad" required>
    </div>
    <div class="form-group">
        <label for="fecha_fin_actividad">Fecha Fin de Actividad</label>
        <input type="datetime-local" class="form-control" id="fecha_fin_actividad" name="fecha_fin_actividad" required>
    </div>
    <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Incluyendo Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



