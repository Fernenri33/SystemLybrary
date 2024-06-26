<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>System Lybrary</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="View/CSS/IndexStyle.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200;300;400&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200;300;400&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

</head>
<body>
  <header>
    <div class="navMenu">
      <div class="logo">
        <a class="navbar-brand" href="#"><
          <img class="logo" src="View/IMG/book-half.svg" alt="Logo de Biblioteca Inteligente">
          System Library
        </a>
      </div>
  
      <div class="buttonsNav">
        <nav>
          
          <div class="list-group" id="myList" role="tablist">
            <a class="list-group-item list-group-item-action " href="/SystemLybrary/login.php" role="tab">Iniciar sesión</a>
            <a class="list-group-item list-group-item-action"  href="#profile" role="tab">Conócenos</a>
            <a class="list-group-item list-group-item-action"  href="#messages" role="tab">Novedades</a>
            <a class="list-group-item list-group-item-action active"  href="/SystemLybrary/templates/Libros/ListaLibros.php" role="tab">Home</a>
          </div>
          
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav">
              <a class="nav-item nav-link" data-toggle="list" href="/SystemLybrary/login.php" role="tab">Iniciar sesión</a>
              <a class="nav-item nav-link" data-toggle="list" href="#profile" role="tab">Conócenos</a>
              <a class="nav-item nav-link" data-toggle="list" href="#messages" role="tab">Novedades</a>
              <a class="nav-item nav-link active" data-toggle="list" href="/SystemLybrary/templates/Libros/ListaLibros.php" role="tab">Home</a>
            </div>
          </div>
        </nav>
  
      </div>
    </div>
    <div class="ilustracionContededor">

      <div class="ilustarcion">
        <img class="ilustarcionIMG" src="View/IMG/mejores-libros-educativos-2021-1.jpg" alt="ilustarcion de libros">
      </div>

      <div class="ilustarciontxt">
        <h1 class="textoPrincipal">Más que lectura, una experiencia.</h1>
        <br>
        <button type="button" class="btn btn-info">Conoce más</button>
        <button type="button" class="btn btn-light">Registrarme</button>
      </div>

    </div>
  </header>
  <main>

    <div class="textDiv">
      <h1>Ya Puedes Reservar Cualquier Recurso</h1><br>
    </div>
    <div class="contentDiv">
      <div class="parrafo">

        <span>
          Olvida las largas esperas. Nuestro sistema de ingreso inteligente agiliza tu acceso a la biblioteca, permitiéndote disfrutar de una experiencia fluida y sin contratiempos desde el momento en que llegas. Hemos implementado tecnología de vanguardia para gestionar y optimizar el flujo de visitantes, lo que significa que no tendrás que preocuparte por perder tiempo en filas interminables.
          Nuestro sistema utiliza identificación digital rápida y eficiente, lo que reduce significativamente el tiempo de espera y mejora la precisión en el control de acceso. Además, con el uso de aplicaciones móviles y kioscos de autoservicio, puedes gestionar tu ingreso de manera autónoma, reservando tu visita con antelación o registrándote rápidamente al llegar.
        </span>
        <br><br>
        <span>
          Esta innovación no solo mejora la eficiencia, sino que también se adapta a las necesidades de todos nuestros usuarios, incluyendo personas mayores y niños, proporcionando una interfaz fácil de usar y accesible para todos. Al minimizar las demoras en el ingreso, podrás dedicar más tiempo a explorar nuestros vastos recursos, asistir a actividades y disfrutar de todo lo que la biblioteca tiene para ofrecer.
        </span>
      </div>
    </div>

    <div class="textDiv">
      <h1>¿Qué Hay De Nuevo?</h1><br>
    </div>
    <div class="contentDiv">
      <div class="parrafo">

        <span>
          Olvida las largas esperas. Nuestro sistema de ingreso inteligente agiliza tu acceso a la biblioteca, permitiéndote disfrutar de una experiencia fluida y sin contratiempos desde el momento en que llegas. Hemos implementado tecnología de vanguardia para gestionar y optimizar el flujo de visitantes, lo que significa que no tendrás que preocuparte por perder tiempo en filas interminables.
          Nuestro sistema utiliza identificación digital rápida y eficiente, lo que reduce significativamente el tiempo de espera y mejora la precisión en el control de acceso. Además, con el uso de aplicaciones móviles y kioscos de autoservicio, puedes gestionar tu ingreso de manera autónoma, reservando tu visita con antelación o registrándote rápidamente al llegar.
        </span>
        <br><br>
        <span>
          Esta innovación no solo mejora la eficiencia, sino que también se adapta a las necesidades de todos nuestros usuarios, incluyendo personas mayores y niños, proporcionando una interfaz fácil de usar y accesible para todos. Al minimizar las demoras en el ingreso, podrás dedicar más tiempo a explorar nuestros vastos recursos, asistir a actividades y disfrutar de todo lo que la biblioteca tiene para ofrecer.
        </span>
      </div>
    </div>

    <div class="textDiv">
      <h1>Sobre nosotros</h1><br>
    </div>
    <div class="contentDiv">
      <div class="parrafo">

        <span>
          Olvida las largas esperas. Nuestro sistema de ingreso inteligente agiliza tu acceso a la biblioteca, permitiéndote disfrutar de una experiencia fluida y sin contratiempos desde el momento en que llegas. Hemos implementado tecnología de vanguardia para gestionar y optimizar el flujo de visitantes, lo que significa que no tendrás que preocuparte por perder tiempo en filas interminables.
          Nuestro sistema utiliza identificación digital rápida y eficiente, lo que reduce significativamente el tiempo de espera y mejora la precisión en el control de acceso. Además, con el uso de aplicaciones móviles y kioscos de autoservicio, puedes gestionar tu ingreso de manera autónoma, reservando tu visita con antelación o registrándote rápidamente al llegar.
        </span>
        <br><br>
        <span>
          Esta innovación no solo mejora la eficiencia, sino que también se adapta a las necesidades de todos nuestros usuarios, incluyendo personas mayores y niños, proporcionando una interfaz fácil de usar y accesible para todos. Al minimizar las demoras en el ingreso, podrás dedicar más tiempo a explorar nuestros vastos recursos, asistir a actividades y disfrutar de todo lo que la biblioteca tiene para ofrecer.
        </span>
      </div>
    </div>
  </main>
  <footer>
    <h1>
      Footer
    </h1>
      <p>

      </p>
      <br><br>
    </h1>
  </footer>

  <!-- Bootstrap JS y jQuery (Requiere jQuery) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
