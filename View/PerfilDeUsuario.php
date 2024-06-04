<?php
// Incluir la clase Usuarios para obtener los datos del usuario actual
require_once '../Model/Usuarios.php';

// Verificar si hay una sesión iniciada
// session_start();
if (!isset($_SESSION['usuario'])) {
    // Redireccionar al usuario a la página de inicio de sesión si no hay sesión activa
    header("Location: http://localhost/SystemLybrary/login.php");
    exit();
}

// Obtener el usuario de la sesión
$usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil de Usuario</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Perfil de Usuario</h5>
          </div>
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item"><strong>ID:</strong> <?php echo $usuario->ID; ?></li>
              <li class="list-group-item"><strong>Nombre:</strong> <?php echo $usuario->nombre; ?></li>
              <li class="list-group-item"><strong>Apellidos:</strong> <?php echo $usuario->apellidos; ?></li>
              <li class="list-group-item"><strong>Dirección:</strong> <?php echo $usuario->direccion; ?></li>
              <li class="list-group-item"><strong>Correo electrónico:</strong> <?php echo $usuario->email; ?></li>
              <li class="list-group-item"><strong>Teléfono:</strong> <?php echo $usuario->telefono; ?></li>
              <li class="list-group-item"><strong>Categorías:</strong> <?php echo $usuario->categorías; ?></li>
            </ul>
          </div>
          <div class="card-footer text-right">
          <a href="http://localhost/SystemLybrary/Model/logout.php" class="btn btn-danger">Cerrar sesión</a>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
