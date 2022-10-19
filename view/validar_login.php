<?php
include("conexion.php");
session_start();
// No mostrar los errores de PHP
error_reporting(0);

 // echo '<pre>';
 // print_r($_POST);
 // echo '</pre>';
 // die();
$Usuario = $_POST["Usuario"];
$Contrasena = $_POST["Contrasena"];

//Leer//

$query = mysqli_query ($conexion, "SELECT * FROM clientes WHERE Usuario = '".$Usuario."' and Contrasena = '".$Contrasena."'");
$Acceder=mysqli_fetch_array($query);

if($Acceder['id_rol'] == 1){
    $_SESSION['usuario']=$Usuario;
    header("Location:../admin/admin.php");
} else if($Acceder['id_rol'] == 2){
    $_SESSION['usuario']=$Usuario;
    header("Location: index.php");
} else{
    echo '<script language="javascript">alert("No estás registrado");</script>';
    include 'login.php';
}

?>