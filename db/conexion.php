<?php

session_start();
// No mostrar los errores de PHP
error_reporting(0);

$servername = "localhost";
$database = "bonappetit";
$username = "root";
$password = "";
// Create connection
$conexion = mysqli_connect ($servername, $username, $password, $database);
// Check connection
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
?>