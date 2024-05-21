<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="../View/CSS/IndexStyle.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200;300;400&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div class="navMenu">
      <div class="logo">
        <a class="navbar-brand" href="#">
          <img class="logo" src="../View/IMG/book-half.svg" alt="Logo de Biblioteca Inteligente">
          System Lybrary
        </a>
      </div>
      <div class="buttonsNav">
        <nav>
          <div class="list-group" id="myList" role="tablist">
            <a class="list-group-item list-group-item-action active" href="login.html" role="tab">Iniciar sesión</a>
            <a class="list-group-item list-group-item-action" href="#profile" role="tab">Conócenos</a>
            <a class="list-group-item list-group-item-action" href="#messages" role="tab">Novedades</a>
            <a class="list-group-item list-group-item-action" href="#settings" role="tab">Home</a>
          </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav">
              <a class="nav-item nav-link" data-toggle="list" href="../Sistem Library/login.html" role="tab">Iniciar sesión</a>
              <a class="nav-item nav-link" data-toggle="list" href="#profile" role="tab">Conócenos</a>
              <a class="nav-item nav-link" data-toggle="list" href="#messages" role="tab">Novedades</a>
              <a class="nav-item nav-link active" data-toggle="list" href="#settings" role="tab">Home</a>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
</body>
</html>
