<?php

    include("conexion.php");

    $id_platillo = $_GET["id_platillo"];

    $delete = "DELETE FROM platillos WHERE id_platillo = '$id_platillo'";
    $result = mysqli_query($con, $delete);

    if(isset($delete)){
        header("location:/ADMIN/platillos/platillos.php");
    }
    else{
        echo "No";
    }


?>