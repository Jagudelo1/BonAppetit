<?php

    include("../db/conexion.php");

    $Documento = $_POST["Documento"];
    $Nombres = $_POST["Nombres"];
    $Apellidos = $_POST["Apellidos"];
    $Celular = $_POST["Celular"];
    $Fecha = $_POST["Fecha"];
    $Usuario = $_POST["Usuario"];
    $Contrasena = $_POST["Contrasena"];

    

    $update = "UPDATE clientes SET Nombres ='$Nombres', Apellidos ='$Apellidos', Celular ='$Celular', Fecha ='$Fecha',Usuario ='$Usuario', Contrasena ='$Contrasena' WHERE Documento ='$Documento'";
    $result = mysqli_query($conexion,$update);

    if(isset($result)){
        header("Location: clientes.php");
    }
    
?>