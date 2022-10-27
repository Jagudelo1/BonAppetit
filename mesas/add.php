<?php

    require '../db/conexion.php';

    $no_mesa = $_POST["no_mesa"];


    $sql = "INSERT INTO mesas(no_mesa)
    VALUES ('$no_mesa')";

if(mysqli_query ($conexion, $sql)){
    echo '<script language="javascript">alert("Se añadió un nuevo platillo");</script>';
    header("Location: mesa.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error ($conexion);
}
mysqli_close($conexion);
?>