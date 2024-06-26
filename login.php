<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login | Biblioteca</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/icons/favicon.ico" type="image/x-icon"/>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">    
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

    <?php
    session_start();
    include 'config/database.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['username'];
        $password = $_POST['pass'];

        $db = conectarDB();

        if (!$db) {
            echo 'Error: No se pudo conectar a la base de datos.';
            exit;
        }

        // Query para verificar el usuario
        $query = "SELECT * FROM usuario WHERE user = ?";
        
        // Preparar la consulta
        $stmt = $db->prepare($query);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $usuario = $resultado->fetch_assoc();

        if ($usuario) {
            if ($usuario['password'] == $password) {
                // El usuario está autenticado
                $_SESSION['user'] = $usuario['user'];
                $_SESSION['login'] = true;
                
                header('Location: /SystemLybrary/index.php'); // Asegúrate de que esta ruta sea correcta
                exit;
            } else {
                echo '<div class="alert alert-danger">Contraseña Incorrecta</div>';
            }
        } else {
            echo '<div class="alert alert-danger">No existe el usuario</div>';
        }

        if ($stmt->error) {
            echo "Error en la consulta: " . $stmt->error;
        }

        $stmt->close();
        $db->close();
    }
    ?>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
                    <span class="login100-form-title-1">
                    System Library
                    </span>
                </div>

                <form class="login100-form validate-form" action="login.php" method='POST'>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Usuario</span>
                        <input class="input100" type="email" name="username" placeholder="Ingresa tu usuario">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="pass" placeholder="Ingresa tu password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-30">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Recordarme
                            </label>
                        </div>

                        <div>
                            <a href="/" class="txt1">
                                ¿Olvidaste tu contraseña?
                            </a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Ingresar
                        </button>
                    </div>

                    <label for="" class="mt-5">Usuario y contraseña de pruebas:</label>
                    <div>
                        <label for="" class="mt-4">admin@correo.com</label>
                        <label for="" class="mt-2">123456</label>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
