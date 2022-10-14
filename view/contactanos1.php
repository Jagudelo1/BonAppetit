<?php
include("../db/conexion.php");
// No mostrar los errores de PHP
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// die();
$Nombre = $_POST["Nombre"];
$Apellido = $_POST["Apellido"];
$Correo = $_POST["Correo"];
$Telefono = $_POST["Telefono"];
$Mensaje = $_POST["Mensaje"];


 //Insert//
$sql = "INSERT INTO contactanos (Nombre, Apellido, Correo, Telefono, Mensaje) 
                         VALUES ('$Nombre','$Apellido','$Correo','$Telefono','$Mensaje')";
if (mysqli_query ($conexion, $sql)) {
      echo '<script language="javascript">alert("Registro Enviado Con Exito");</script>';

      
      include('contactanos.php');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error ($conexion);
}
mysqli_close($conexion);

 
?>