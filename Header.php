<!doctype html>
<html lang="en">

<head>
    <title>Biblioteca Pública</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" sizes="any" href="" type="image/x-icon"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/SystemLybrary/Home.php">
            <img src="View/IMG/book-half.svg" width="30" height="30" class="mr-1 mb-1" alt="" >    
            System Library</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="librosDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Libros</a>
                        <div class="dropdown-menu" aria-labelledby="librosDropdown">
                            <a class="dropdown-item" href="/SystemLybrary/templates/Libros/AltaLibro.php">Alta de libro</a>
                            <a class="dropdown-item" href="/SystemLybrary/templates/Libros/ListaLibros.php">Listado de libros</a>
                            <a class="dropdown-item" href="/SystemLybrary/templates/Libros/LibrosPorEstado.php">Listado por estado</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="prestamosDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Prestamos</a>
                        <div class="dropdown-menu" aria-labelledby="prestamosDropdown">
                            <a class="dropdown-item" href="/SystemLybrary/templates/Prestamos/AltaPrestamo.php">Cargar Prestamo</a>
                            <a class="dropdown-item" href="/SystemLybrary/templates/Prestamos/ListaPrestamos.php">Prestamos vigentes</a>
                            <a class="dropdown-item" href="/SystemLybrary/templates/Prestamos/ListaPorSocio.php">Prestamos por socio</a>
                            <a class="dropdown-item" href="/SystemLybrary/templates/Prestamos/ListaPorFecha.php">Prestamos por fechas</a>
                            <a class="dropdown-item" href="/SystemLybrary/templates/Prestamos/ListaPorMenores.php">Prestamos a menores</a>
                            <a class="dropdown-item" href="/SystemLybrary/templates/Prestamos/ListaPrimerSemestre.php">Prestamos primer semestre</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="reparacionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reparación</a>
                        <div class="dropdown-menu" aria-labelledby="reparacionDropdown">
                            <a class="dropdown-item" href="/SystemLybrary/templates/Reparaciones/AltaReparacion.php">Cargar reparación</a>
                            <a class="dropdown-item" href="/SystemLybrary/templates/Reparaciones/ListaReparacion.php">Reparaciones en curso</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="sociosDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Socios</a>
                        <div class="dropdown-menu" aria-labelledby="sociosDropdown">
                            <a class="dropdown-item" href="/SystemLybrary/templates/Socios/AltaSocio.php">Alta de socio</a>
                            <a class="dropdown-item" href="/SystemLybrary/templates/Socios/ListaSocio.php">Listado de socios</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 nav-item">
                    <a class="nav-link text-info" href="/SystemLybrary/logout.php">Cerrar Sesión</a>
                </form>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS y jQuery (Requiere jQuery) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JavaScript to avoid conflicts -->
    <script>
        $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
        });
    </script>
</body>
</html>

