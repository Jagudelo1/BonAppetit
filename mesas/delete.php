<?php

    include("../db/conexion.php");

    $id_mesa = $_GET["id_mesa"];

    $delete = "DELETE FROM mesas WHERE id_mesa = '$id_mesa'";
    $result = mysqli_query($conexion, $delete);

    if(isset($delete)){
        header("location: mesa.php");
    }
    else{
        echo "No";
    }


?>