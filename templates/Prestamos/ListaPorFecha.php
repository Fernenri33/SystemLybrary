<?php include '../../config/funciones.php';
      include '../../config/database.php';

//Verifico que el usuario esté autenticado
$auth = estaAutenticado();

if(!$auth){
    header('Location: /SystemLybrary/login.php');
}

include '../../Header.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $fechainicio = $_POST['fechainicio'];
        $fechafin = $_POST['fechafin'];

        //traigo todos los libros en prestamos vigentes para cierto socio
        $query = "SELECT * FROM detalleprestamo d JOIN prestamo p ON d.cod_prestamo = p.cod_prestamo JOIN libro l ON d.cod_libro = l.cod_libro WHERE p.fecha_prestamo >= '$fechainicio' AND p.fecha_prestamo <= '$fechafin'";

        //hago la consulta
        $resultado = mysqli_query(conectarDB(), $query);


        
        if ($resultado) {

        ?>
            
            <div class="container mt-4">
            <h2>Listado de prestamos por fechas</h2>
            <table class="table mt-4" >
                <thead>
                    <tr>
                        <th>ID Prestamo</th>
                        <th>Fecha Prestamo</th>
                        <th>Fecha Devolución</th>
                        <th>ID Libro</th>
                        <th>Libro</th>
                        <th>Editorial</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($rep = mysqli_fetch_assoc($resultado)): ?>
                    <tr>
                        <td><?php echo $rep['cod_prestamo'] ?></td>
                        <td><?php echo $rep['fecha_prestamo'] ?></td>
                        <td><?php echo $rep['fecha_devolucion'] ? $rep['fecha_devolucion'] : 'Pendiente' ?></td>
                        <td><?php echo $rep['cod_libro'] ?></td>
                        <td><?php echo $rep['titulo'] ?></td>
                        <td><?php echo $rep['editorial'] ?></td>
                        
                    </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
            </div>

        <?php }else{echo 'REVISAR SQL';}
    }


    if($_SERVER['REQUEST_METHOD'] === 'GET'){
?>


<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Busqueda por fechas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
            <form action="/templates/Prestamos/ListaPorFecha.php" method="post">
                
                <div class="form-group">
                  <label for="">Fecha de inicio</label>
                  <input type="date" name="fechainicio" id="" class="form-control" >
                </div>

                <div class="form-group">
                  <label for="">Fecha final </label>
                  <input type="date" name="fechafin" id="" class="form-control" >
                </div>

            </div>
            <div class="modal-footer">
                <a name="" id="" class="btn btn-primary" href="/SystemLybrary/templates/Prestamos/ListaPrestamos.php" role="button">Cancelar</a>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
            </form>
        </div>
    </div>
</div>



<?php
}

include '../../Footer.php';

?>