<?php
include('conexion.php');
// No mostrar los errores de PHP
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// die();
$Nombre_Completo = $_POST["Nombre_Completo"];
$Telefono = $_POST["Telefono"];
$Fecha = $_POST["Fecha"];
$Hora = $_POST["Hora"];
$Descripcion = $_POST["Descripcion"];
$Mesa = $_POST["Mesa"];

 //Insert//
 
$sql = "INSERT INTO reservas (Nombre_Completo, Telefono, 
Fecha, Hora, Descripcion, Mesa) 
VALUES ('$Nombre_Completo','$Telefono',
'$Fecha','$Hora','$Descripcion','$Mesa')";
if (mysqli_query ($conexion, $sql)) {
      echo '<script language="javascript">alert("Registro Enviado Con Exito");</script>';

      header("Location: reservas.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error ($conexion);
}
mysqli_close($conexion);

 
?>