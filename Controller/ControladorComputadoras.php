<?php

require_once '../Model/Computadoras.php';

class ControladorComputadoras {
    private $modelo;

    public function __construct() {
        $this->modelo = new Computadoras();
    }

    public function mostrarTodasLasComputadoras() {
        $computadoras = $this->modelo->getAllComputadoras();
        include 'test.php';
    }

    public function agregarComputadora($marca, $modelo, $especificaciones, $idUbicacion, $cantidadDisponible, $cantidadPrestada, $cantidadDañada) {
        try {
            $this->modelo->crearComputadora($marca, $modelo, $especificaciones, $idUbicacion, $cantidadDisponible, $cantidadPrestada, $cantidadDañada);
            echo "Computadora creada exitosamente";
        } catch (Exception $e) {
            echo "Error al crear computadora: " . $e->getMessage();
        }
    }
}

?>
