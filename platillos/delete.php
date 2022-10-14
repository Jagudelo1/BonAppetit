<?php

    include("../db/conexion.php");

    $Id_Platillo = $_GET["Id_Platillo"];

    $delete = "DELETE FROM platillos WHERE Id_Platillo = '$Id_Platillo'";
    $result = mysqli_query($conexion, $delete);

    if(isset($delete)){
        header("location: platillos.php");
    }
    else{
        echo "No";
    }


?>