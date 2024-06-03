<?php 
require_once 'Database.php';
require_once 'recursos.php';

class ContAudioVisual{

    private $conn;
    
    public function __construct() {
        $db = new Database();
        $this->conn = $db->conn;
    }

    public function __destruct() {
        // Cerrar la conexión a la base de datos cuando el objeto se destruye
        $this->conn->close();
    }

    public function getAllTablets() {
        
        $sql = "
        SELECT 
        c.ID, c.Titulo, c.Director, c.Formato,
        r.Cantidad_Disponible, r.Cantidad_Prestada, r.Cantidad_Dañada, r.Cantidad_Total 
        FROM recursos r 
        JOIN cont_audiovisual c ON r.Tipo_Recurso_ID = c.ID 
        WHERE r.Tipo_Recurso = 'cont_audiovisual';
        ";
    
        $result = $this->conn->query($sql);
        $recursos = array();
    
        // Iterar sobre los resultados y estructurarlos en un array
        while ($row = $result->fetch_assoc()) {
            $recursos[] = array(
                'ID' => $row['ID'],
                'Titulo' => $row['Titulo'],
                'Director' => $row['Director'],
                'Formato' => $row['Formato'],
                'Cantidad_Disponible' => $row['Cantidad_Disponible'],
                'Cantidad_Prestada' => $row['Cantidad_Prestada'],
                'Cantidad_Dañada' => $row['Cantidad_Dañada'],
                'Cantidad_Total' => $row['Cantidad_Total']
            );
        }
        return $recursos;
    }

//-------------------------------------------------------------------------------------------------------------------------------------------------------

    public function crearContAudioVisual($Titulo, $Director, $Fecha_Lanzamiento, $Formato,  $Descripcion, $ID_Ubicacion, $cantidadDisponible, $cantidadPrestada, $cantidadDañada) {
        // Iniciar transacción
        $this->conn->begin_transaction();

        try {
            $sqlContAudiovisual = "INSERT INTO cont_audiovisual (Titulo, Director, Fecha_Lanzamiento, Formato, Descripcion, ID_Ubicacion) VALUES (?, ?, ?, ?, ?, ?)";
            $stmtContAudiovisual = $this->conn->prepare($sqlContAudiovisual);
            $stmtContAudiovisual->bind_param("sssssi", $Titulo, $Director, $Fecha_Lanzamiento, $Formato, $Descripcion, $ID_Ubicacion);
            $stmtContAudiovisual->execute();
            $contAudiovisualID = $stmtContAudiovisual->insert_id;

            // Insertar en la tabla tiporecurso
            $sqlTipoRecurso = "INSERT INTO tiporecurso (tipo_recurso, recurso_id) VALUES ('cont_audiovisual', ?)";
            $stmtTipoRecurso = $this->conn->prepare($sqlTipoRecurso);
            $stmtTipoRecurso->bind_param("i", $contAudiovisualID);
            $stmtTipoRecurso->execute();
            $tipoRecursoID = $stmtTipoRecurso->insert_id;

            // Calcular cantidad total
            $cantidadTotal = $cantidadDisponible + $cantidadPrestada + $cantidadDañada;

            // Insertar en la tabla recursos
            $sqlRecursos = "INSERT INTO recursos (Tipo_Recurso, Tipo_Recurso_ID, Cantidad_Disponible, Cantidad_Prestada, Cantidad_Dañada, Cantidad_Total) VALUES ('cont_audiovisual', ?, ?, ?, ?, ?)";
            $stmtRecursos = $this->conn->prepare($sqlRecursos);
            $stmtRecursos->bind_param("iiiii", $contAudiovisualID, $cantidadDisponible, $cantidadPrestada, $cantidadDañada, $cantidadTotal);
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