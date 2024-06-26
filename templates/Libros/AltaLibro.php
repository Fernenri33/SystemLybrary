<?php 
include '../../config/funciones.php';
include '../../config/database.php';

// Verifico que el usuario esté autenticado
$auth = estaAutenticado();

if (!$auth) {
    header('Location: /SystemLybrary/login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $editorial = $_POST['editorial'];
    $fedicion = $_POST['fedicion'];
    $idioma = $_POST['idioma'];
    $cantpaginas = $_POST['cantpaginas'];

    // Crear el query para insertar
    $query = "INSERT INTO libro (titulo, editorial, fedicion, idioma, estado, cantpaginas) VALUES ('$titulo', '$editorial', '$fedicion', '$idioma', 'En biblioteca', '$cantpaginas')";

    // Insertar en la DB
    $resultado = mysqli_query(conectarDB(), $query);

    if ($resultado) {
        // Redireccionar al usuario
        header('Location: /SystemLybrary/templates/Libros/ListaLibros.php');
        exit;
    } else {
        echo 'Revisar SQL';
    }
}

include '../../Header.php';
?>

<!-- Modal -->
<div class="modal fade show" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true" style="display: block;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Alta de Nuevo Libro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/SystemLybrary/templates/Libros/AltaLibro.php" method='POST'>
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Título del libro" required>
                    </div>
                    <div class="form-group">
                        <label for="editorial">Editorial</label>
                        <input type="text" name="editorial" id="editorial" class="form-control" placeholder="Nombre de la editorial" required>
                    </div>
                    <div class="form-group">
                        <label for="fedicion">Fecha de edición</label>
                        <input type="date" name="fedicion" id="fedicion" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="idioma">Idioma</label>
                        <input type="text" name="idioma" id="idioma" class="form-control" placeholder="Idioma del libro" required>
                    </div>
                    <div class="form-group">
                        <label for="cantpaginas">Cantidad de páginas</label>
                        <input type="number" name="cantpaginas" id="cantpaginas" class="form-control" placeholder="Ingrese la cantidad de páginas" required>
                    </div>
                    <div class="modal-footer">
                        <a name="" id="" class="btn btn-secondary" href="/SystemLybrary/templates/Libros/ListaLibros.php" role="button">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include '../../Footer.php';
?>

<script>
$(document).ready(function(){
    $('#modelId').modal('show');
});
</script>
