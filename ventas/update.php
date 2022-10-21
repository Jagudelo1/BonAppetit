<?php

    include("conexion.php");

    $Id_Platillo  = $_POST["Id_Platillo"];
    $ventas  = $_POST["ventas"];


    $update = "UPDATE platillos SET ventas  ='$ventas' WHERE Id_Platillo ='$Id_Platillo'";
    $result = mysqli_query($con,$update);

    if(isset($result)){
        header('Location: ventas.php');
    }




?>