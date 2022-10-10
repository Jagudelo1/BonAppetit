<?php

    include("conexion.php");

    $id_platillo  = $_POST["id_platillo"];
    $ventas  = $_POST["ventas"];


    $update = "UPDATE platillos SET ventas  ='$ventas' WHERE id_platillo ='$id_platillo'";
    $result = mysqli_query($con,$update);

    if(isset($result)){
        include("ventas.php");
    }




?>