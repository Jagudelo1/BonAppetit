<?php
include("../db/conexion.php");

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// die();
$Nombre_Completo = $_POST["Nombre_Completo"];
$Correo = $_POST["Correo"];
$Descripcion = $_POST["Descripcion"];
 
$sql = "INSERT INTO resenas (Nombre_Completo, Correo, Descripcion) 
VALUES ('$Nombre_Completo','$Correo','$Descripcion')";
if (mysqli_query ($conexion, $sql)) {
      echo '<script language="javascript">alert("Envio de reserva con exito, Que tenga buen dia");</script>';
      include 'resena.php';
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error ($conexion);
}
mysqli_close($conexion);

 
?>