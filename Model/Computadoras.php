<?php 
require_once 'Database.php';
require_once 'recursos.php';

class Computadoras{

    private $conn;
    
    public function __construct() {
        $db = new Database();
        $this->conn = $db->conn;
    }

    public function __destruct() {
        // Cerrar la conexión a la base de datos cuando el objeto se destruye
        $this->conn->close();
    }

    public function getAllComputadoras() {
        // Consulta SQL para obtener los datos de las computadoras y sus respectivos recursos
        $sql = "
        SELECT 
        c.ID, c.Marca, c.Modelo, 
        r.Cantidad_Disponible, r.Cantidad_Prestada, r.Cantidad_Dañada, r.Cantidad_Total 
        FROM recursos r 
        JOIN computadoras c ON r.Tipo_Recurso_ID = c.ID 
        WHERE r.Tipo_Recurso = 'computadoras'
        ";
    
        $result = $this->conn->query($sql);
        $recursos = array();
    
        // Iterar sobre los resultados y estructurarlos en un array
        while ($row = $result->fetch_assoc()) {
            $recursos[] = array(
                'ID' => $row['ID'],
                'Marca' => $row['Marca'],
                'Modelo' => $row['Modelo'],
                'Cantidad_Disponible' => $row['Cantidad_Disponible'],
                'Cantidad_Prestada' => $row['Cantidad_Prestada'],
                'Cantidad_Dañada' => $row['Cantidad_Dañada'],
                'Cantidad_Total' => $row['Cantidad_Total']
            );
        }
        return $recursos;
    }

//-------------------------------------------------------------------------------------------------------------------------------------------------------

    public function crearComputadora($marca, $modelo, $especificaciones, $idUbicacion, $cantidadDisponible, $cantidadPrestada, $cantidadDañada) {
        // Iniciar transacción
        $this->conn->begin_transaction();

        try {
            // Insertar en la tabla computadoras
            $sqlComputadoras = "INSERT INTO computadoras (Marca, Modelo, Especificaciones, ID_Ubicacion) VALUES (?, ?, ?, ?)";
            $stmtComputadoras = $this->conn->prepare($sqlComputadoras);
            $stmtComputadoras->bind_param("sssi", $marca, $modelo, $especificaciones, $idUbicacion);
            $stmtComputadoras->execute();
            $computadoraID = $stmtComputadoras->insert_id;

            // Insertar en la tabla tiporecurso
            $sqlTipoRecurso = "INSERT INTO tiporecurso (tipo_recurso, recurso_id) VALUES ('computadoras', ?)";
            $stmtTipoRecurso = $this->conn->prepare($sqlTipoRecurso);
            $stmtTipoRecurso->bind_param("i", $computadoraID);
            $stmtTipoRecurso->execute();
            $tipoRecursoID = $stmtTipoRecurso->insert_id;

            // Calcular cantidad total
            $cantidadTotal = $cantidadDisponible + $cantidadPrestada + $cantidadDañada;

            // Insertar en la tabla recursos
            $sqlRecursos = "INSERT INTO recursos (Tipo_Recurso, Tipo_Recurso_ID, Cantidad_Disponible, Cantidad_Prestada, Cantidad_Dañada, Cantidad_Total) VALUES ('computadoras', ?, ?, ?, ?, ?)";
            $stmtRecursos = $this->conn->prepare($sqlRecursos);
            $stmtRecursos->bind_param("iiiii", $computadoraID, $cantidadDisponible, $cantidadPrestada, $cantidadDañada, $cantidadTotal);
            $stmtRecursos->execute();

            // Confirmar transacción
            $this->conn->commit();

        } catch (Exception $e) {
            // Revertir transacción en caso de error
            $this->conn->rollback();
            throw $e;
        }
    }
}

?>