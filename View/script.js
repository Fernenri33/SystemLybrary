function login() {
  var email = document.getElementById("loginInputEmail1").value;
  var password = document.getElementById("loginInputPassword1").value;

  // Aquí puedes agregar una validación adicional antes de enviar los datos al servidor

  // Llamar a la función PHP para realizar el inicio de sesión
  $.ajax({
      type: "POST",
      url: "Model\Usuarios.php", // Ruta a tu script PHP que contiene la función login
      data: { email: email, password: password },
      success: function(response) {
          // Manejar la respuesta del servidor
          if (response.success) {
              // Inicio de sesión exitoso, redireccionar al usuario a la página de inicio
              window.location.href = "inicio.php"; // Cambia "inicio.php" por la URL de tu página de inicio
          } else {
              // Inicio de sesión fallido, mostrar un mensaje de error al usuario
              alert("Inicio de sesión fallido. Verifica tu correo electrónico y contraseña.");
          }
      },
      error: function() {
          // Manejar errores de conexión o errores internos del servidor
          alert("Ocurrió un error al intentar iniciar sesión. Por favor, inténtalo de nuevo más tarde.");
      }
  });
}
