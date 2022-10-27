<?php
include("conexion.php");

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// die();
$Nombre_Completo = $_POST["Nombre_Completo"];
$Correo = $_POST["Correo"];
$Descripcion = $_POST["Descripcion"];
$puntuacion = $_POST["puntuacion"];
 
$sql = "INSERT INTO resenas (Nombre_Completo, Correo, Descripcion, puntuacion) 
VALUES ('$Nombre_Completo','$Correo','$Descripcion','$puntuacion')";
if (mysqli_query ($conexion, $sql)) {
      echo '<script>alert("Gracias por su resena, que tenga buen dia");
      document.location=("resena.php");</script>';
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error ($conexion);
}
mysqli_close($conexion);

 
?>