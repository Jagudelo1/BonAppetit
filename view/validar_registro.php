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
$sentencia = "SELECT Documento FROM clientes WHERE Documento='$Documento' LIMIT 1";
$query = mysqli_query($conn,$sentencia);
$existe = mysqli_num_rows($query);//si encuentra un registro, es decir, usuario existe, su valor sera 1 en caso contrario es 0 (NULL).

//Comprobamos si existe usuario.
if ($existe===1) {
      header("location: registrate.php?fallo=true");
}else{
//Consulta para Subir los Datos del Usuario
$sql = "INSERT INTO clientes (Documento, Nombres, Apellidos, Correo_Electronico, Celular, Fecha, Usuario, Contrasena, Foto) 
VALUES ('$Documento','$Nombres','$Apellidos','$Correo_Electronico', '$Celular', '$Fecha','$Usuario','$Contrasena','$Foto')";

if (mysqli_query ($conn, $sql)) {
      echo '<script>alert("Registro Completado con Exito");
      document.location=("login.php");</script>';
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error ($conn);
}
mysqli_close($conn);
}
?>
