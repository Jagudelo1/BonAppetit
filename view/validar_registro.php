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
 
$sql = "INSERT INTO clientes (Documento, Nombres, Apellidos, Celular, Fecha, Usuario, Contrasena, Foto) 
VALUES ('$Documento','$Nombres','$Apellidos','$Celular', '$Fecha','$Usuario','$Contrasena','$Foto')";
if (mysqli_query ($conn, $sql)) {
      echo '<script language="javascript">alert("Registro completado con exito");</script>';

      
      include 'login.php';
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error ($conn);
}
mysqli_close($conn);

 
?>




