<?php

    include("../conexion.php");

    $Documento = $_POST["Documento"];
    $Nombres = $_POST["Nombres"];
    $Apellidos = $_POST["Apellidos"];
    $Correo_Electronico = $_POST["Correo_Electronico"];
    $Celular = $_POST["Celular"];
    $Contrasena = $_POST["Contrasena"];

    $update = "UPDATE clientes SET Nombres ='$Nombres', Apellidos ='$Apellidos',Correo_Electronico ='$Correo_Electronico', Celular ='$Celular',
    Contrasena ='$Contrasena' WHERE Documento ='$Documento'";
    $result = mysqli_query($conexion,$update);

    if(isset($result)){
        header("Location: ../perfil.php");
    }
    
?>