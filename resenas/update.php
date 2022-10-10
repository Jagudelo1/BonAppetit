<?php

    include("conexion.php");

    $id_resena = $_POST["id_resena"];
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $comentario = $_POST["comentario"];
    $fecha = $_POST["fecha"];

    

    $update = "UPDATE resenas SET nombre ='$nombre', correo ='$correo', comentario ='$comentario', fecha ='$fecha' WHERE id_resena ='$id_resena'";
    $result = mysqli_query($con,$update);

    if(isset($result)){
        echo "Registro actualizado";
    }




?>