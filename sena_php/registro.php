<?php
    session_start();
    date_default_timezone_set("America/Bogota");
    header("Content-Type: text/html;charset=utf-8");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer proyecto</title>
    <link rel="stylesheet" href=".//css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        function evitarEspacios(e) {
                if (e.which === 32) {
                    return false;
                }
            }

            function togglePasswordVisibility() {
                var passwordField = document.getElementById("password");
                var passwordToggle = document.getElementById("password-toggle");
                if (passwordField.type === "password") {
                    passwordField.type = "text";
                    passwordToggle.classList.remove("fa-eye");
                    passwordToggle.classList.add("fa-eye-slash");
                } else {
                    passwordField.type = "password";
                    passwordToggle.classList.remove("fa-eye-slash");
                    passwordToggle.classList.add("fa-eye");
                }
            }
    </script>
</head>
<body>

<?php
    require('conexion.php');
    $mysqli->set_charset('utf8');
    if (isset($_REQUEST['usuario'])){
        $usuario = stripslashes($_REQUEST['usuario']); // removes backslashes
        $usuario = mysqli_real_escape_string($mysqli, $usuario); //escapes special characters in a string
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($mysqli, $password);
        $nombre = stripslashes($_REQUEST['nombre']);
        $tipo_usuario = 7;
        $numeroCel = stripslashes($_REQUEST['numeroCel']);
        
        $query = "INSERT INTO `usuarios` (usuario, password, tipo_usuario, nombre, numeroCel) VALUES ('$usuario', '".sha1($password)."', '$tipo_usuario', '$nombre', '$numeroCel')";
        $result = mysqli_query($mysqli, $query);
        if ($result) {
            echo "<center><p style='border-radius: 20px;box-shadow: 10px 10px 5px #c68615; font-size: 23px; font-weight: bold;' >REGISTRO CREADO SATISFACTORIAMENTE<br><br></p></center>
                <div class='form' align='center'><h3>Regresar para iniciar la sesión... <br/><br/><center><a href='index.php'>Regresar</a></center></h3></div>";
        }
    } else {
?>
    <!-- Formulario de registro -->
    <header>
        <h3>My project</h3>
        <h1>Registrarse</h1>
    </header>
    <form action="" method="POST">
        <h2>Crea tu cuenta</h2>
        <!-- Preguntas de formulario -->
        <P>
            <label for="nombre">Ingrese su nombre</label>
        </P>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre completo" maxlength="50" minlength="2" required>
        <P>
            <label for="usuario">Correo electronico</label>
        </P>
            <input type="email" name="usuario" id="usuario" placeholder="minombre@miproyecto.com" required onkeypress="return evitarEspacios(event)">
        <P>
            <label for="numeroCel">Numero celular</label>
        </P>
            <input type="text" name="numeroCel" placeholder="Numero de celular" id="numeroCel" required>
        <P>
            <label for="password">Contraseña</label>
        </P>
            <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" required>
        <P>
        <!-- Imagen de perfil -->
      
        <button type="submit" class="btn1" id="registrarse">Registrarse</button>
    </form>
    <!-- Boton principal para envio del formulario -->
    <p>
        
        <img src=".//img/imagen2.png" alt="caja" class="img2">
        <label for="terminos" class="term">Al crear una cuenta, acepta las condiciones de uso y aviso de privacidad.</label>
    </p>
    <!-- Pie de pagina o footer para enlaces a pantalla adicionales -->
    <h3 class="mapa">Mapa de navegacion</h3>
    <footer>
        <div class="divfooter">
            <label for="">Acerca de</label><br>
            <a href=".//index">Inicio</a><br>
            <a href="./index.php">Iniciar sesion</a>
        </div>
        <div class="divfooter">
            <label for="">Vendedor</label><br>
            <a href="registroArticulo.html">Ingresar producto nuevo</a><br>
            <a href="ingresarMetodoPago.html">Medios de pago</a><br>
            <a href="ingresarMetodoPago2.html">Confirmacion pagos</a><br>
        </div>
        <div class="divfooter">
            <label for="">Redes Sociales</label><br>
            <a href="https://x.com">X</a><br>
            <a href="https://www.facebook.com/">Facebook</a><br>
            <a href="https://www.instagram.com">Instagram</a><br>
            <a href="https://www.youtube.com/">Youtube</a><br>
        </div>
        <div class="divfooter">
            <label for="">Cliente</label><br>
            <a href="entregaPedido.html">Datos de entrega</a><br>
            <a href="registro.html">Registrate</a><br>
        </div>
    </footer>
    <script src="..//js/proyecto.js"></script>
</body>
</html>

<?php } ?>