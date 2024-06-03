<?php
require_once 'Database.php';

class Recursos{
    public $ID;
    public $Tipo_Recurso;
    public $Tipo_Recurso_ID;
    public $Cantidad_Disponible;
    public $Cantidad_Prestada;
    public $Cantidad_Dañada;
    public $Cantidad_Total;
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conn;
    }

    public function setID($ID) { $this->ID = $ID;}
    public function setTipoRecurso($Tipo_Recurso) {$this->Tipo_Recurso = $Tipo_Recurso;}
    public function setTipoRecursoID($Tipo_Recurso_ID) {$this->Tipo_Recurso_ID = $Tipo_Recurso_ID;}
    public function setCantidadDisponible($Cantidad_Disponible) {$this->Cantidad_Disponible = $Cantidad_Disponible;}
    public function setCantidadPrestada($Cantidad_Prestada) {$this->Cantidad_Prestada = $Cantidad_Prestada;}
    public function setCantidadDañada($Cantidad_Dañada) {$this->Cantidad_Dañada = $Cantidad_Dañada;}
    public function setCantidadTotal($Cantidad_Total) {$this->Cantidad_Total = $Cantidad_Total;}

    public function getAllRecursos() {
        $sql = "SELECT * FROM recursos";
        $result = $this->conn->query($sql);
        $recurso = array();
        $recursos = array();

        while ($row = $result->fetch_assoc()) {
            $recurso = new Recursos();
            $recurso->setID($row['ID']);
            $recurso->setTipoRecurso($row['Tipo_Recurso']);
            $recurso->setTipoRecursoID($row['Tipo_Recurso_ID']);
            $recurso->setCantidadDisponible($row['Cantidad_Disponible']);
            $recurso->setCantidadPrestada($row['Cantidad_Prestada']);
            $recurso->setCantidadDañada($row['Cantidad_Dañada']);
            $recurso->setCantidadTotal($row['Cantidad_Total']);
            $recursos[] = $recurso;
        }
        return $recursos;
    }
}
?>