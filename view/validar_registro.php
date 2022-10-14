<?php
// No mostrar los errores de PHP
error_reporting(0);
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// die();
$Documento = $_POST["Documento"];
$Nombres = $_POST["Nombres"];
$Apellidos = $_POST["Apellidos"];
$Correo_Electronico = $_POST["Correo_Electronico"];
$Celular = $_POST["Celular"];
$Fecha = $_POST["Fecha"];
$Usuario = $_POST["Usuario"];
$Contrasena = $_POST["Contrasena"];
$Foto = $_POST["Foto"];

include("../db/conexion.php");

//Consulta para subir los datos del usuario
$sql = "INSERT INTO clientes (Documento, Nombres, Apellidos, Correo_Electronico, Celular, Fecha, Usuario, Contrasena, Foto) 
VALUES ('$Documento','$Nombres','$Apellidos','$Correo_Electronico', '$Celular', '$Fecha','$Usuario','$Contrasena','$Foto')";
if (mysqli_query ($conexion, $sql)) {
      echo '<script language="javascript">alert("Registro completado con exito");</script>';

      
      header("Location: login.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error ($conexion);
}
mysqli_close($conexion);

 
?>




