<?php

    include("conexion.php");

    $id_reserva = $_GET["id_reserva"];

    $delete = "DELETE FROM reservas WHERE id_reserva = '$id_reserva'";
    $result = mysqli_query($con, $delete);

    if(isset($delete)){
        header("location:/ADMIN/admin/Admin.php");
    }
    else{
        echo "No";
    }


?>