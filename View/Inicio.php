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
    <title>Inicio</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../View/CSS/InicioStyle.css" rel="stylesheet">
</head>
<body>

<div class="contenedor">
    <?php include 'MenuUser.php';?>
    <div class="contenido">
        <!-- Aquí se cargará el contenido dinámico -->
        <?php
        // Verificar si se ha seleccionado alguna opción del menú
        if (isset($_GET['opcion'])) {
            $opcion = $_GET['opcion'];
            switch ($opcion) {
                case 'cubGrupales':
                    include '../View/RecursosView/CubGrupales.php';
                    break;
                case 'computadoras':
                    include '../View/RecursosView/Computadoras.php';
                    break;
                    case 'ContAudiovisual':
                        include '../View/RecursosView/ContAudiovisual.php';
                        break;
                    case 'EscritorioInd':
                        include '../View/RecursosView/EsccritorioInd.php';
                        break;
                    case 'Libro':
                        include '../View/RecursosView/Libros.php';
                        break;
                    case 'Tablet':
                            include '../View/RecursosView/Tablets.php';
                        break;
                    case 'PerfilDeUsuario':
                            include 'PerfilDeUsuario.php';
                        break;
                    case 'Solicitudes':
                        include '../View/RecursosView/SolicitudesLista.php';
                    break;
                    case 'Prestamos':
                        include '../View/RecursosView/PrestamosLista.php';
                    break;
                default:
                    // Incluir algún contenido por defecto si la opción no está definida
                    include '../View/RecursosView/InicioiView.php';
                    break;
            }
        } else {
            // Incluir algún contenido por defecto si no se ha seleccionado ninguna opción

        }
        ?>
    </div>
</div>
        
</body>
</html>

