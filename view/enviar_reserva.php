<?php
include("../db/conexion.php");
// No mostrar los errores de PHP
error_reporting(0);
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// die();
$Nombre_Completo = $_POST["Nombre_Completo"];
$Telefono = $_POST["Telefono"];
$Fecha = $_POST["Fecha"];
$Hora = $_POST["Hora"];
$Mesa = $_POST["Mesa"];
$Descripcion = $_POST["Descripcion"];
 
$sql = "INSERT INTO reservas (Nombre_Completo, Telefono, Fecha, Hora, Mesa, Descripcion) 
VALUES ('$Nombre_Completo','$Telefono','$Fecha','$Hora','$Mesa','$Descripcion')";
if (mysqli_query ($conexion, $sql)) {
      echo '<script language="javascript">alert("Envio de reserva con exito, Que tenga buen dia");</script>';

      
      header('Location: index.php');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error ($conexion);
}
mysqli_close($conexion);

 
?>