<?php
session_start();

if (!isset($_SESSION['id'])) {
  header("Location: index.php");
}

$usuario      = $_SESSION['usuario'];
$nombre       = $_SESSION['nombre'];
$tipo_usuario = $_SESSION['tipo_usuario'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer proyecto</title>
    <link rel="stylesheet" href=".//css/styles.css">
</head>
<?php if ($tipo_usuario == 7) { ?>
<!-- Pantalla principal sin inicio de sesion -->
<!-- Encabezado de la pagina  -->
    <header class="headerIndex">
        <ul class="ul1">
            <li>
                <button class="btn15" id="btnDropDown"><img src="img/dropdownicon.png" alt="" class="imgIndex"></button>
                <ul class="dropDown">
                    <li><a href="html/listaPedidos.html" class="aIndex">Mis pedidos</a></li>
                    <li><a href="" class="aIndex">Segunda opcion</a></li>
                    <li><a href="" class="aIndex">Tercera opcion</a></li>
                    <li><a href="" class="aIndex">Cuarta opcion</a></li>
                    <li><a href="" class="aIndex">Quinta opcion</a></li>
                </ul>
            </li>
        </ul>
        <!-- Barra de busqueda -->
        <div class="divIndex">
                <input type="text" placeholder="Buscar..." class="inputIndex" id="buscar">
                <button class="btn16" id="btnBuscar"><img src="img/glassIcon.png" alt="" class="imgIndex2"></button>
        </div>

        <!-- <div class="divIndex2">
            <a href="html/inicioSesion.html" class="aIndex2">Iniciar sesion</a>
            <a href="html/registro.html" class="aIndex2">Registrarse</a>
        </div> -->
        <div class="divIndex2">
        <a href="./logout.php"> Cerrar sesión </a>
        </div>
    </header>
    <!-- Prototipo de vista productos no dinamicos -->
    <h2 class="h2Index">Productos</h2>
    <p class="pIndex2">Categoria: Juegos</p>
    <div class="divIndex3">
        <div class="divIndex4">
            <img src="img/caja.png" alt="Primer producto" class="imgIndex3">
            <p class="pIndex">Nombre producto</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia error temporibus hic alias quasi voluptatem veniam molestias ipsam laboriosam ipsa?</p>
            <p class="pIndex">Precio: $$$$$</p>
            <button class="btn17"><a href="html/vistaProducto.html" class="aP7">Ver mas</a></button>
        </div>
        <div class="divIndex4">
            <img src="img/caja.png" alt="Primer producto" class="imgIndex3">
            <p class="pIndex">Nombre producto</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia error temporibus hic alias quasi voluptatem veniam molestias ipsam laboriosam ipsa?</p>
            <p class="pIndex">Precio: $$$$$</p>
            <button class="btn17"><a href="html/vistaProducto.html" class="aP7">Ver mas</a></button>
        </div>
        <div class="divIndex4">
            <img src="img/caja.png" alt="Primer producto" class="imgIndex3">
            <p class="pIndex">Nombre producto</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia error temporibus hic alias quasi voluptatem veniam molestias ipsam laboriosam ipsa?</p>
            <p class="pIndex">Precio: $$$$$</p>
            <button class="btn17"><a href="html/vistaProducto.html" class="aP7">Ver mas</a></button>
        </div>
        <div class="divIndex4">
            <img src="img/caja.png" alt="Primer producto" class="imgIndex3">
            <p class="pIndex">Nombre producto</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia error temporibus hic alias quasi voluptatem veniam molestias ipsam laboriosam ipsa?</p>
            <p class="pIndex">Precio: $$$$$</p>
            <button class="btn17"><a href="html/vistaProducto.html" class="aP7">Ver mas</a></button>
        </div>
        <div class="divIndex4">
            <img src="img/caja.png" alt="Primer producto" class="imgIndex3">
            <p class="pIndex">Nombre producto</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia error temporibus hic alias quasi voluptatem veniam molestias ipsam laboriosam ipsa?</p>
            <p class="pIndex">Precio: $$$$$</p>
            <button class="btn17"><a href="html/vistaProducto.html" class="aP7">Ver mas</a></button>
        </div>
        <div class="divIndex4">
            <img src="img/caja.png" alt="Primer producto" class="imgIndex3">
            <p class="pIndex">Nombre producto</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia error temporibus hic alias quasi voluptatem veniam molestias ipsam laboriosam ipsa?</p>
            <p class="pIndex">Precio: $$$$$</p>
            <button class="btn17"><a href="html/vistaProducto.html" class="aP7">Ver mas</a></button>
        </div>
        
    </div>
    <p class="pIndex2">Categoria: Hogar</p>
    <div class="divIndex3">
        <div class="divIndex4">
            <img src="img/caja.png" alt="Primer producto" class="imgIndex3">
            <p class="pIndex">Nombre producto</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia error temporibus hic alias quasi voluptatem veniam molestias ipsam laboriosam ipsa?</p>
            <p class="pIndex">Precio: $$$$$</p>
            <button class="btn17"><a href="html/vistaProducto.html" class="aP7">Ver mas</a></button>
        </div>
        <div class="divIndex4">
            <img src="img/caja.png" alt="Primer producto" class="imgIndex3">
            <p class="pIndex">Nombre producto</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia error temporibus hic alias quasi voluptatem veniam molestias ipsam laboriosam ipsa?</p>
            <p class="pIndex">Precio: $$$$$</p>
            <button class="btn17"><a href="html/vistaProducto.html" class="aP7">Ver mas</a></button>
        </div>
        <div class="divIndex4">
            <img src="img/caja.png" alt="Primer producto" class="imgIndex3">
            <p class="pIndex">Nombre producto</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia error temporibus hic alias quasi voluptatem veniam molestias ipsam laboriosam ipsa?</p>
            <p class="pIndex">Precio: $$$$$</p>
            <button class="btn17"><a href="html/vistaProducto.html" class="aP7">Ver mas</a></button>
        </div>
        <div class="divIndex4">
            <img src="img/caja.png" alt="Primer producto" class="imgIndex3">
            <p class="pIndex">Nombre producto</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia error temporibus hic alias quasi voluptatem veniam molestias ipsam laboriosam ipsa?</p>
            <p class="pIndex">Precio: $$$$$</p>
            <button class="btn17"><a href="html/vistaProducto.html" class="aP7">Ver mas</a></button>
        </div>
        <div class="divIndex4">
            <img src="img/caja.png" alt="Primer producto" class="imgIndex3">
            <p class="pIndex">Nombre producto</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia error temporibus hic alias quasi voluptatem veniam molestias ipsam laboriosam ipsa?</p>
            <p class="pIndex">Precio: $$$$$</p>
            <button class="btn17"><a href="html/vistaProducto.html" class="aP7">Ver mas</a></button>
        </div>
        <div class="divIndex4">
            <img src="img/caja.png" alt="Primer producto" class="imgIndex3">
            <p class="pIndex">Nombre producto</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia error temporibus hic alias quasi voluptatem veniam molestias ipsam laboriosam ipsa?</p>
            <p class="pIndex">Precio: $$$$$</p>
            <button class="btn17"><a href="html/vistaProducto.html" class="aP7">Ver mas</a></button>
        </div>
    </div>
    <!-- Pie de pagina o footer para enlaces a pantalla adicionales -->
    <h3 class="mapa">Mapa de navegacion</h3>
    <footer>
        <div class="divfooter">
            <label for="">Acerca de</label><br>
            <a href="">Inicio</a><br>
            <a href="./index.php">Iniciar sesion</a>
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
            <a href="/html/registro.html">Registrate</a><br>
        </div>
    </footer>
    <?php } ?>
</body>
</html>

