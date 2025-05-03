    <?php

    $mysqli = new mysqli("localhost","root","Miabella20","sena_php");
    if ($mysqli->connect_error) {
        die("Error en la conexión". $mysqli->connect_error);
    }

    ?>