<?php

// require_once '../Model/Usuarios.php';
// require_once '../Model/Libros.php';
// require_once '../Model/Recursos.php';
//  require_once '../Model/CubGrupal.php';
//  $cubiculoGrupalObj = new CubGrupal();

//--------------------------------

//  $cubiculoGrupalObj->crearCubGrupal(5,4,0,0,0);
//  $cubiculos = $cubiculoGrupalObj->getAllCubGrupal();

// foreach ($cubiculos as $cubiculo) {
//     echo "ID: " . $cubiculo['ID'] . "\n";
//     echo "ID_Ubicacion: " . $cubiculo['ID_Ubicacion'] . "\n";
//     echo "Capacidad: " . $cubiculo['Capacidad'] . "\n";
//     echo "Cantidad Disponible: " . $cubiculo['Cantidad_Disponible'] . "\n";
//     echo "Cantidad Prestada: " . $cubiculo['Cantidad_Prestada'] . "\n";
//     echo "Cantidad Dañada: " . $cubiculo['Cantidad_Dañada'] . "\n";
//     echo "Cantidad Total: " . $cubiculo['Cantidad_Total'] . "\n";
//     echo "-------------------------\n";
// }
//--------------------------------
//  $escritorioObj = new EscritorioInd();
//  $escritorioObj->crearEscritorio(1,1,1,1);

//--------------------------------

// $escitorios = $escritorioObj->getAllEscritorios();

// foreach ($escitorios as $escritorio) {
//     echo 'ID: '.$escritorio['ID'].'ID_Ubicacion: '.$escritorio['ID_Ubicacion'].='Cantidad_Prestada: '.$escritorio['Cantidad_Prestada'].'Cantidad_Dañada: '.$escritorio['Cantidad_Dañada'].''.$escritorio['Cantidad_Total']. "\n";
// }

 //--------------------------------
 //$videosObj = new ContAudioVisual();
 //$videosObj->crearContAudioVisual(
    
    //"Inception",          // Título
    //"Christopher Nolan",  // Director
    //"2010-07-16",         // Fecha de Lanzamiento
    //"DVD",            // Formato
    //"Película de ciencia ficción", // Descripción
    //1,                    // ID de Ubicación
    //10,                   // Cantidad Disponible
    //2,                    // Cantidad Prestada
    //1                     // Cantidad Dañada
//);

 //--------------------------------
// $usuario = new Usuarios();
// $user = $usuario->login('fernenri33@gmail.com', '22067000');

// if ($user) {
//     echo 'Login exitoso. Bienvenido ' . $user->nombre;
// } else {
//     echo 'Credenciales incorrectas';
// }

//-------------------------------------------------------

$recursosObj = new Recursos();
$recursosEspecificos = $recursosObj->getAllRecursos();

foreach ($recursosEspecificos as $recurso) {
    echo "ID: " . $recurso->ID . "<br>";
    echo "Tipo Recurso: " . $recurso->Tipo_Recurso . "<br>";
    echo "Tipo Recurso ID: " . $recurso->Tipo_Recurso_ID . "<br>";
    echo "Cantidad Disponible: " . $recurso->Cantidad_Disponible . "<br>";
    echo "Cantidad Prestada: " . $recurso->Cantidad_Prestada . "<br>";
    echo "Cantidad Dañada: " . $recurso->Cantidad_Dañada . "<br>";
    echo "Cantidad Total: " . $recurso->Cantidad_Total . "<br><br>";
}


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