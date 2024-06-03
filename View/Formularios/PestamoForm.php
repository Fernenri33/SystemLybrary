<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buscador de Recursos Bibliográficos</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      padding-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="mb-4">Buscador de Recursos Bibliográficos</h1>
    <form>
      <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" id="titulo" placeholder="Ingrese el título del recurso" required>
      </div>
      <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" id="autor" placeholder="Ingrese el nombre del autor" required>
      </div>
      <div class="form-group">
        <label for="categoria">Categoría</label>
        <input type="text" class="form-control" id="categoria" placeholder="Ingrese la categoría del recurso" required>
      </div>
      <div class="form-group">
        <label for="anoPublicacion">Año de Publicación</label>
        <input type="number" class="form-control" id="anoPublicacion" placeholder="Ingrese el año de publicación" required>
      </div>
      <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



