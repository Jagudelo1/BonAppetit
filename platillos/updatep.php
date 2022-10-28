<?php

    include("../db/conexion.php");

    $Id_Platillo = $_POST["Id_Platillo"];
    $Nombre_Platillo = $_POST["Nombre_Platillo"];
    $Precio_Platillo = $_POST["Precio_Platillo"];
    $Descripcion = $_POST["Descripcion"];
    $Id_Categoria = $_POST["Id_Categoria"];

    $update = "UPDATE platillos SET Nombre_Platillo ='$Nombre_Platillo', Precio_Platillo ='$Precio_Platillo', Descripcion ='$Descripcion', Id_Categoria ='$Id_Categoria' WHERE Id_Platillo ='$Id_Platillo'";
    $result = mysqli_query($conexion,$update);

    if(isset($result)){
        header("Location: platillos.php");
    }
    
?>