<?php

// require_once '../Model/Usuarios.php';
// require_once '../Model/Libros.php';
// require_once '../Model/Recursos.php';
require_once '../Model/ContAudioVisual.php';

 $videosObj = new ContAudioVisual();
 $videosObj->crearContAudioVisual(
    
    "Inception",          // Título
    "Christopher Nolan",  // Director
    "2010-07-16",         // Fecha de Lanzamiento
    "DVD",            // Formato
    "Película de ciencia ficción", // Descripción
    1,                    // ID de Ubicación
    10,                   // Cantidad Disponible
    2,                    // Cantidad Prestada
    1                     // Cantidad Dañada
);

 //--------------------------------
// $usuario = new Usuarios();
// $user = $usuario->login('fernenri33@gmail.com', '22067000');

// if ($user) {
//     echo 'Login exitoso. Bienvenido ' . $user->nombre;
// } else {
//     echo 'Credenciales incorrectas';
// }

//-------------------------------------------------------

// $recursosObj = new Computadoras();
// $recursosEspecificos = $recursosObj->getAllComputadoras();

// foreach ($recursosEspecificos as $recurso) {
//     echo 'ID: ' . $recurso['ID'] . ', Marca: ' . $recurso['Marca'] . ', Modelo: ' . $recurso['Modelo'] . ', Cantidad Disponible: ' . $recurso['Cantidad_Disponible'] . ', Cantidad Prestada: ' . $recurso['Cantidad_Prestada'] . ', Cantidad Dañada: ' . $recurso['Cantidad_Dañada'] . ', Cantidad Total: ' . $recurso['Cantidad_Total'] . "\n";
//  }

//-------------------------------------------------------

// $librosObj = new Libros();
// $librosObj->crearLibro(
//     "El nombre del viento",  
//     "Patrick Rothfuss",      
//     "Debolsillo",            
//     "2007-03-27",            
//     "Una novela épica y emocionante que narra la historia de Kvothe.", // Descripción
//     1,                       
//     10,                      
//     2,                       
//     1                        
// );


// foreach ($recursosEspecificos as $recurso) {
//     echo 'ID: ' . $recurso['ID'] . ', Marca: ' . $recurso['Marca'] . ', Modelo: ' . $recurso['Modelo'] . ', Cantidad Disponible: ' . $recurso['Cantidad_Disponible'] . ', Cantidad Prestada: ' . $recurso['Cantidad_Prestada'] . ', Cantidad Dañada: ' . $recurso['Cantidad_Dañada'] . ', Cantidad Total: ' . $recurso['Cantidad_Total'] . "\n";
//  }

//----------------------------------------------------------------

// $tabletsObj = new Tablets();
// $tabletsObj->crearTablets(
//     "Apple",           // Marca
//     "iPad Pro",        // Modelo
//     "256GB, Wi-Fi",    // Especificaciones
//     3,                 // ID de Ubicación
//     10,                // Cantidad Disponible
//     2,                 // Cantidad Prestada
//     1                  // Cantidad Dañada
// );
?>