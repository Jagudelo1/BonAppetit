<?php
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

 
$sql = "INSERT INTO reservas (Nombre_Completo, Telefono, Fecha, Hora, Mesa, Descripcion) 
VALUES ('$Nombre_Completo','$Telefono','$Fecha','$Hora','$Mesa','$Descripcion')";
if (mysqli_query ($conn, $sql)) {
      echo '<script language="javascript">alert("Envio de reserva con exito, Que tenga buen dia");</script>';

      
      include 'reservas.php';
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error ($conn);
}
mysqli_close($conn);

 
?>