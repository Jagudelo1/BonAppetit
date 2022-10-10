<?php

    include("conexion.php");

    $id_platillo = $_POST["id_platillo"];
    $nombre_platillo = $_POST["nombre_platillo"];
    $Precio_Platillo = $_POST["precio"];
    $descripcion = $_POST["descripcion"];
    $id_categoria  = $_POST["id_categoria "];
    $Estado  = $_POST["Estado "];


    $update = "UPDATE platillos SET nombre_platillo ='$nombre_platillo', precio ='$precio', descripcion ='$descripcion', id_categoria  ='$id_categoria', Estado  ='$Estado' WHERE id_platillo ='$id_platillo'";
    $result = mysqli_query($con,$update);

    if(isset($result)){
        echo "Registro actualizado";
    }




?>