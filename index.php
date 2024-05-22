<?php 
include 'config/funciones.php';

//Verifico que el usuario esté autenticado
$auth = estaAutenticado();

if(!$auth){
    header('Location: /SystemLybrary/login.php');
}

header('Location: /SystemLybrary/templates/Libros/ListaLibros.php');


?>