<?php

    include("../db/conexion.php");

    $id_reserva = $_REQUEST["id_reserva"];

    $delete = ("DELETE FROM reservas WHERE id_reserva = '"$id_reserva" '");
    $result = mysqli_query($conexion, $delete);

    if(isset($delete)){
        header("location:admin.php");
    }

?>