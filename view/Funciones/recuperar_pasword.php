<?php
include("../conexion.php");
session_start();
// No mostrar los errores de PHP

 // echo '<pre>';
 // print_r($_POST);
 // echo '</pre>';
 // die();
$Documento = $_POST["Documento"];
$Contrasena = $_POST["Contrasena"];

//Actualizar Contrasena
$updatepass = "UPDATE clientes SET Contrasena = '$Contrasena' WHERE Documento = '$Documento'";
$query = mysqli_query($conexion, $updatepass);
$update = mysqli_num_rows($query);

//Comprobamos si existe Documento.
if(isset($update)){
    header("Location: ../perfil.php");
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error ($conexion);
}
mysqli_close($conexion);

?>