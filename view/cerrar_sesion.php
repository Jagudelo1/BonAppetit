<?php
session_start();
error_reporting(0);

$sesion = $_SESSION['usuario'];
if($sesion == null || $sesion = ''){
    echo 'Usted no tiene autorización';
    die();
}
session_destroy();
header("location: ../index.php");
?>