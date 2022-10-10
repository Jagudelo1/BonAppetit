<?php

    include("conexion.php");

    $Documento = $_POST["Documento"];
    $Nombres = $_POST["Nombres"];
    $Apellidos = $_POST["Apellidos"];
    $Celular = $_POST["Celular"];
    $Fecha = $_POST["Fecha"];
    $Usuario = $_POST["Usuario"];
    $contrasena = $_POST["contrasena"];

    

    $update = "UPDATE clientes SET Nombres ='$Nombres', Apellidos ='$Apellidos', Celular ='$Celular', Fecha ='$Fecha',Usuario ='$Usuario', contraseña ='$contraseña' WHERE Documento ='$Documento'";
    $result = mysqli_query($con,$update);

    if(isset($result)){
        echo "Registro actualizado";
    }




?>