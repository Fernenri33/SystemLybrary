<?php
session_start(); // Iniciar la sesión si aún no está iniciada

// Destruir todas las variables de sesión
$_SESSION = array();

// Destruir la sesión
session_destroy();

// Redireccionar al usuario a la página de inicio de sesión
header("Location: http://localhost/SystemLybrary/login.php");
exit();
?>

