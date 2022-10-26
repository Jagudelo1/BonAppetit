<?php
include("conexion.php");

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
      echo '<script>alert("Se realizo exitosamente su reservación, que tenga buen día");
      document.location=("reservas.php");</script>';
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error ($conexion);
}
mysqli_close($conexion);

 
?>