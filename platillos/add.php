<?php

    require '../db/conexion.php';

    $Nombre_Platillo = $_POST["Nombre_Platillo"];
    $Precio_Platillo = $_POST["Precio_Platillo"];
    $Foto_Platillo = addslashes(file_get_contents($_FILES['Foto_Platillo']['tmp_name']));
    $Descripcion = $_POST["Descripcion"];
    $Estado = $_POST["Estado"];
    $Id_Categoria  = $_POST["Id_Categoria"];


    $sql = "INSERT INTO platillos (Nombre_Platillo, Precio_Platillo, Foto_Platillo, Descripcion, Id_Categoria, Estado)
    VALUES ('$Nombre_Platillo','$Precio_Platillo','$Foto_Platillo','$Descripcion','$Id_Categoria','$Estado')";

if(mysqli_query ($conexion, $sql)){
    echo '<script language="javascript">alert("Se añadió un nuevo platillo");</script>';
    header("Location: platillos.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error ($conexion);
}
mysqli_close($conexion);
?>