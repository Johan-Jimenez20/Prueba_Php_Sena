<?php
    require "conexion.php";
    
session_start();

    if($_POST)
    { 

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";
    //echo $sql;
    $resultado = $mysqli->query($sql);
    $num = $resultado->num_rows;
    
    if($num>0)
    {
      $row = $resultado->fetch_assoc();
      $password_bd = $row['password'];

      $pass_c = sha1($password);

      if($password_bd == $pass_c)
      {
        $_SESSION['id'] = $row['id'];
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['numeroCel'] = $row['numeroCel'];
        $_SESSION['tipo_usuario'] = $row['tipo_usuario'];
        $_SESSION['usuario'] = $row['usuario'];

        if($row['tipo_usuario']==1)
        {
          header("Location: access.php");
        }
        elseif($row['tipo_usuario']==2)
        {
          header("Location: access.php");
        }
        else
          {
            
            header("Location: index.php");
          }
        }else
        {
          echo "La contraseña no coincide";
        }
      }else
      {
        echo "NO existe usuario";
    }    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer proyecto</title>
    <link rel="stylesheet" href=".//css/styles.css">
</head>
<body>
    <!-- Formulario inicio de sesion -->
    <header>
        <h3>My project</h3>
        <h1>Inicio de sesion</h1>
    </header>
    <form action="" class="form1">
        <P>
            <label for="usuario" class="label2">Correo electronico</label>
        </P>
            <input type="email" placeholder="minombre@miproyecto.com" class="inputP2" id="usuario">
        <P>
            <label for="password" class="label2">Contraseña</label>
        </P>
            <input type="password" placeholder="Contraseña" class="inputP2" id="password">
            <p id="incorrecto"></p>
            <button type="submit" class="btn2">Entrar</button>
        <p>
            <a class="aRedireccion" href="./registro.php">¿Nuevo aqui? Registrate</a>
        </p>
    </form>
    
    <!-- Pie de pagina o footer para enlaces a pantalla adicionales -->
    <h3 class="mapa">Mapa de navegacion</h3>
    <footer>
        <div class="divfooter">
            <label for="">Acerca de</label><br>
            <a href="../index.html">Inicio</a><br>
            <a href="./registro.php">Iniciar sesion</a><br>
        </div>
        <div class="divfooter">
            <label for="###">Vendedor</label><br>
            <a href="/html/registroArticulo.html">Ingresar producto nuevo</a><br>
            <a href="/html/ingresarMetodoPago.html">Medios de pago</a><br>
            <a href="/html/ingresarMetodoPago2.html">Confirmacion pagos</a><br>
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
            <a href="/html/entregaPedido.html">Datos de entrega</a><br>
            <a href="./registro.php">Registrate</a><br>
        </div>
    </footer>
    <script src="..//js/proyecto.js"></script>
</body>
</html>