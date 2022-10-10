<?php
session_start();
// No mostrar los errores de PHP
error_reporting(0);

 // echo '<pre>';
 // print_r($_POST);
 // echo '</pre>';
 // die();
$Usuario = $_POST["Usuario"];
$Contrasena = $_POST["Contrasena"];

$servername = "localhost";
$database = "bonappetit";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect ($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

//Leer//

$query = mysqli_query ($conn, "SELECT * FROM clientes WHERE Usuario = '".$Usuario."' and Contrasena = '".$Contrasena."'");
$Acceder=mysqli_fetch_array($query);

if($Acceder['id_rol'] == 1){
    $_SESSION['usuario']=$Usuario;
    include '../admin/Admin.php';
} else if($Acceder['id_rol'] == 2){
    $_SESSION['usuario']=$Usuario;
    include 'index.php';
} else{
    echo '<script language="javascript">alert("No estás registrado");</script>';
    include 'login.php';
}

?>