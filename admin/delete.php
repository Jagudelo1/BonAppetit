<?php

    include("../db/conexion.php");

    $Id_Reserva = $_GET["Id_Reserva"];

    $delete = "DELETE FROM reservas WHERE Id_Reserva = '$Id_Reserva'";
    $result = mysqli_query($conexion, $delete);

    if(isset($delete)){
        header("location:Admin.php");
    }
    else{
        echo "No";
    }


?>