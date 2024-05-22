<?php 
include '../../config/funciones.php';
include '../../config/database.php';

// Verifico que el usuario esté autenticado
$auth = estaAutenticado();

if (!$auth) {
    header('Location: /SystemLybrary/login.php');
    exit;
}

if (isset($_GET['id'])) {
    $cod_prestamo = $_GET['id'];

    if (is_numeric($cod_prestamo)) {
        // Query para traer la tabla completa
        $query = "SELECT * FROM prestamo p JOIN socio s ON p.cod_socio = s.cod_socio WHERE p.cod_prestamo = $cod_prestamo";
        // Hago la consulta
        $resultado = mysqli_query(conectarDB(), $query);
        $pres = mysqli_fetch_assoc($resultado);
    } else {
        header('Location: /SystemLybrary/templates/Prestamos/ListaPrestamos.php');
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cod_prestamo = $_POST['cod_prestamo'];
    $cod_socio = $_POST['cod_socio'];
    $fecha_prestamo = $_POST['fecha_prestamo'];
    $fecha_devolucion = $_POST['fecha_devolucion'];

    // Primero damos por devuelto el préstamo con fecha de devolución
    $query = "UPDATE prestamo SET fecha_devolucion = '$fecha_devolucion' WHERE cod_prestamo = $cod_prestamo";
    $resultado1 = mysqli_query(conectarDB(), $query);

    // Segundo cambiamos el estado de los libros de X préstamo a "En biblioteca"
    $query = "UPDATE libro l INNER JOIN detalleprestamo d ON l.cod_libro = d.cod_libro SET estado = 'En biblioteca' WHERE d.cod_prestamo = $cod_prestamo";
    $resultado2 = mysqli_query(conectarDB(), $query);
    
    if ($resultado1 && $resultado2) {
        header('Location: /SystemLybrary/templates/Prestamos/ListaPrestamos.php');
        exit;
    } else {
        echo 'Revisar SQL';
    }
}

include '../../Header.php';

if ($resultado) {
?>

<!-- Modal -->
<div class="modal fade show" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true" style="display: block;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Devolución de Préstamo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/SystemLybrary/templates/Prestamos/BajaPrestamo.php" method="POST">
                    <div class="form-group">
                        <label for="cod_prestamo">ID Préstamo</label>
                        <input type="text" readonly name="cod_prestamo" id="" class="form-control" value="<?php echo $pres['cod_prestamo'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="">ID Socio</label>
                        <input type="hidden" name="cod_socio" id="" class="form-control" value="<?php echo $pres['cod_socio'] ?>">
                        <input type="text" readonly class="form-control" value="<?php echo $pres['cod_socio'] . " - " . $pres['nomyape'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="fecha_prestamo">Fecha de Préstamo</label>
                        <input type="date" readonly name="fecha_prestamo" id="" class="form-control" value="<?php echo $pres['fecha_prestamo'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="fecha_devolucion">Fecha de Devolución</label>
                        <input type="date" min="<?php echo $pres['fecha_prestamo'] ?>" name="fecha_devolucion" id="fecha_devolucion" class="form-control">
                    </div>
            </div>

            <div class="modal-footer">
                <a name="" id="" class="btn btn-primary" href="/SystemLybrary/Biblioteca_Control/templates/Prestamos/ListaPrestamos.php" role="button">Cancelar</a>
                <button type="submit" class="btn btn-danger">Dar de baja!</button>
            </div>
                </form>
        </div>
    </div>
</div>

<?php 
}
include '../../Footer.php';
?>

<!-- Incluir jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Incluir Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
    $('#modelId').modal('show');
});
</script>
