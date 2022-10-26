<?php
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

 //Insert//
 
$sql = "INSERT INTO contactanos (Nombre, Apellido, Correo, Telefono, Mensaje) 
VALUES ('$Nombre','$Apellido','$Correo','$Telefono','$Mensaje')";

if (mysqli_query ($conn, $sql)) {
      echo '<script>alert("Registro enviado con Exito");
      document.location=("contactanos.php");</script>';
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error ($conn);
}
mysqli_close($conn);

 
?>