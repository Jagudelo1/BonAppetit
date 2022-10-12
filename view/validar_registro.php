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

$servername = "localhost";
$database = "bonappetit";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

//Validar Registros
$checkNombre = "SELECT Usuario FROM clientes WHERE Usuario = '$Usuario' and Correo_Electronico = '$Correo_Electronico' ";
if (mysqli_query ($conn, $checkNombre)) {
      echo '<script language="javascript">alert("El usuario y/o correo ya existe");</script>';
      
      include 'registrate.php';
}else{
//Consulta para Subir los Datos del Usuario
$sql = "INSERT INTO clientes (Documento, Nombres, Apellidos, Correo_Electronico, Celular, Fecha, Usuario, Contrasena, Foto) 
VALUES ('$Documento','$Nombres','$Apellidos','$Correo_Electronico', '$Celular', '$Fecha','$Usuario','$Contrasena','$Foto')";
if (mysqli_query ($conn, $sql)) {
      echo '<script language="javascript">alert("Registro completado con exito");</script>';

      include 'login.php';
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error ($conn);
}
mysqli_close($conn);
}
?>




