<?php
// No mostrar los errores de PHP

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// die();
$Nombre_Completo = $_POST["Nombre_Completo"];
$Correo = $_POST["Correo"];
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

 
$sql = "INSERT INTO resenas (Nombre_Completo, Correo, Descripcion) 
VALUES ('$Nombre_Completo','$Correo','$Descripcion')";
if (mysqli_query ($conn, $sql)) {
      echo '<script language="javascript">alert("Envio de reserva con exito, Que tenga buen dia");</script>';
      header("Location: resena.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error ($conn);
}
mysqli_close($conn);

 
?>