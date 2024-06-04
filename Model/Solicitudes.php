<?php
session_start();
require_once 'Database.php'; // Asegúrate de que tienes la clase Database para conectar con la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id_recurso = $_POST['ID_Recurso'];
    $tipo_recurso = $_POST['tipo_recurso'];
    
    $cantidad = $_POST['cantidad'];
    $tipo_actividad = $_POST['tipo_actividad'];
    $fecha_actividad = $_POST['fecha_actividad'];
    $fecha_fin_actividad = $_POST['fecha_fin_actividad'];
    $Usuarios_id = $_POST['Usuarios_id'];
    $estado = 'En revisión'; // Valor predeterminado para el estado

    // Conectar a la base de datos
    $db = new Database();
    $conn = $db->conn;

    // Insertar la solicitud en la base de datos
    $sql = "INSERT INTO solicitud (cantidad, tipo_actividad, estado, fecha_creacion, fecha_revision, fecha_actividad, fecha_fin_actividad, Usuarios_id, ID_Recurso, nombre) 
            VALUES (?, ?, ?, NOW(), NULL, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    // Asegúrate de que la cadena de tipos coincide con los tipos de los parámetros
    $stmt->bind_param('issssiis', 

    $cantidad, 

    $tipo_actividad, 
    $estado,
    $fecha_actividad, 
    $fecha_fin_actividad, 

    $Usuarios_id,  
    $id_recurso, 

    $tipo_recurso
);


    if ($stmt->execute()) {
        // Redireccionar o mostrar un mensaje de éxito
        echo "Añadido con exito";
        header("Location: http://localhost/SystemLybrary/View/inicio.php?opcion=inicio");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Método de solicitud no válido.";
}
?>
