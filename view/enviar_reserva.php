<?php
// No mostrar los errores de PHP
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// die();
session_start();

$Nombre_Completo = $_POST["Nombre_Completo"];
$Telefono = $_POST["Telefono"];
$Fecha_Reserva = $_POST["Fecha_Reserva"];
$Hora = $_POST["Hora"];
$Descripcion = $_POST["Descripcion"];
$Mesa = $_POST["Mesa"];
$Documento = $_POST["Documento"];

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
 
$sql = "INSERT INTO reservas (Nombre_Completo, Telefono, Fecha_Reserva, Hora, Descripcion, Mesa, Documento) 
VALUES ('$Nombre_Completo','$Telefono','$Fecha_Reserva','$Hora','$Descripcion','$Mesa','$Documento')";
if (mysqli_query ($conn, $sql)) {
      echo '<script>alert("Registro Enviado Con Exito");
      document.location=("reservas.php");</script>';
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error ($conn);
}
mysqli_close($conn);

 
?>