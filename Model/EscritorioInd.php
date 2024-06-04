<?php 
require_once 'Database.php';
require_once 'recursos.php';

class EscritorioInd{

    private $conn;
    
    public function __construct() {
        $db = new Database();
        $this->conn = $db->conn;
    }

    public function __destruct() {
        // Cerrar la conexión a la base de datos cuando el objeto se destruye
        $this->conn->close();
    }

    public function getAllEscritorios() {
        // Consulta SQL para obtener los datos de las computadoras y sus respectivos recursos
        $sql = "
        SELECT 
        e.ID, e.ID_Ubicacion,
        r.Cantidad_Disponible, r.Cantidad_Prestada, r.Cantidad_Dañada, r.Cantidad_Total 
        FROM recursos r 
        JOIN escritorio_individual e ON r.Tipo_Recurso_ID = e.ID 
        WHERE r.Tipo_Recurso = 'escritorio_individual';
        ";
    
        $result = $this->conn->query($sql);
        $recursos = array();
    
        // Iterar sobre los resultados y estructurarlos en un array

        while ($row = $result->fetch_assoc()) {
            $recursos[] = array(
                'ID' => $row['ID'],
                'ID_Ubicacion' => $row['ID_Ubicacion'],
                'Cantidad_Disponible' => $row['ID_Ubicacion'],
                'Cantidad_Prestada' => $row['Cantidad_Prestada'],
                'Cantidad_Dañada' => $row['Cantidad_Dañada'],
                'Cantidad_Total' => $row['Cantidad_Total']
            );
        }
        return $recursos;
    }

//-------------------------------------------------------------------------------------------------------------------------------------------------------

    public function crearEscritorio($ID_Ubicacion, $cantidadDisponible, $cantidadPrestada, $cantidadDañada) {
        // Iniciar transacción
        $this->conn->begin_transaction();

        try {
            // Insertar en la tabla computadoras
            $sqlEscritorio = "INSERT INTO escritorio_individual (ID_Ubicacion) VALUES (?)";
            $stmtEscritorio = $this->conn->prepare($sqlEscritorio);
            $stmtEscritorio->bind_param("i", $ID_Ubicacion);
            $stmtEscritorio->execute();
            $escritorioID = $stmtEscritorio->insert_id;

            // Insertar en la tabla tiporecurso
            $sqlTipoRecurso = "INSERT INTO tiporecurso (tipo_recurso, recurso_id) VALUES ('escritorio_individual', ?)";
            $stmtTipoRecurso = $this->conn->prepare($sqlTipoRecurso);
            $stmtTipoRecurso->bind_param("i", $escritorioID);
            $stmtTipoRecurso->execute();
            $tipoRecursoID = $stmtTipoRecurso->insert_id;

            // Calcular cantidad total
            $cantidadTotal = $cantidadDisponible + $cantidadPrestada + $cantidadDañada;

            // Insertar en la tabla recursos
            $sqlRecursos = "INSERT INTO recursos (Tipo_Recurso, Tipo_Recurso_ID, Cantidad_Disponible, Cantidad_Prestada, Cantidad_Dañada, Cantidad_Total) VALUES ('escritorio_individual', ?, ?, ?, ?, ?)";
            $stmtRecursos = $this->conn->prepare($sqlRecursos);
            $stmtRecursos->bind_param("iiiii", $escritorioID, $cantidadDisponible, $cantidadPrestada, $cantidadDañada, $cantidadTotal);
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