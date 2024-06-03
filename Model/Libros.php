<?php 
require_once 'Database.php';
require_once 'recursos.php';

class Libros{
    private $conn;
    
    public function __construct() {
        $db = new Database();
        $this->conn = $db->conn;
    }

    public function __destruct() {
        // Cerrar la conexión a la base de datos cuando el objeto se destruye
        $this->conn->close();
    }

    public function getAllLibros() {
        $sql = "
        SELECT 
        l.ID, l.Titulo, l.Autor, l.Fecha_Publicacion,
        r.Cantidad_Disponible, r.Cantidad_Prestada, r.Cantidad_Dañada, r.Cantidad_Total 
        FROM recursos r 
        JOIN libros l ON r.Tipo_Recurso_ID = l.ID 
        WHERE r.Tipo_Recurso = 'libros';
        ";

        $result = $this->conn->query($sql);
        $recursos = array();

        while ($row = $result->fetch_assoc()) {
            $recursos[] = array(
                'ID' => $row['ID'],
                'Titulo' => $row['Titulo'],
                'Autor' => $row['Autor'],
                'Fecha_Publicacion' => $row['Fecha_Publicacion'],
                'Cantidad_Disponible' => $row['Cantidad_Disponible'],
                'Cantidad_Prestada' => $row['Cantidad_Prestada'],
                'Cantidad_Dañada' => $row['Cantidad_Dañada'],
                'Cantidad_Total' => $row['Cantidad_Total'],
            );
        }
        return $recursos;
    }

    public function crearLibro($titulo, $autor, $editorial, $fechaPublicacion, $Descripcion, $ID_Ubicacion, $cantidadDisponible, $cantidadPrestada, $cantidadDañada) {
        // Iniciar transacción
        $this->conn->begin_transaction();
    
        try {
            // Insertar en la tabla libros
            $sqlLibros = "INSERT INTO libros (Titulo, Autor, Editorial, Fecha_Publicacion, Descripcion, ID_Ubicacion) VALUES (?, ?, ?, ?, ?, ?)";
            $stmtLibros = $this->conn->prepare($sqlLibros);
            $stmtLibros->bind_param("sssssi", $titulo, $autor, $editorial, $fechaPublicacion, $Descripcion, $ID_Ubicacion);
            $stmtLibros->execute();
            $libroID = $stmtLibros->insert_id;

            // Insertar en la tabla tiporecurso
            $sqlTipoRecurso = "INSERT INTO tiporecurso (tipo_recurso, recurso_id) VALUES ('libros', ?)";
            $stmtTipoRecurso = $this->conn->prepare($sqlTipoRecurso);
            $stmtTipoRecurso->bind_param("i", $libroID);
            $stmtTipoRecurso->execute();
            $tipoRecursoID = $stmtTipoRecurso->insert_id;
    
            // Calcular cantidad total
            $cantidadTotal = $cantidadDisponible + $cantidadPrestada + $cantidadDañada;
    
            // Insertar en la tabla recursos
            $sqlRecursos = "INSERT INTO recursos (Tipo_Recurso, Tipo_Recurso_ID, Cantidad_Disponible, Cantidad_Prestada, Cantidad_Dañada, Cantidad_Total) VALUES ('libros', ?, ?, ?, ?, ?)";
            $stmtRecursos = $this->conn->prepare($sqlRecursos);
            $stmtRecursos->bind_param("iiiii", $libroID, $cantidadDisponible, $cantidadPrestada, $cantidadDañada, $cantidadTotal);
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