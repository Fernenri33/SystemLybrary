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
                // Agrega más casos según sea necesario para otras opciones del menú
                default:
                    // Incluir algún contenido por defecto si la opción no está definida
                    include '../View/InicioDefault.php';
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

