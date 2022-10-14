<?php

    include("conexion.php");

    $id_resena = $_POST["id_resena"];
    $Nombre_Completo = $_POST["Nombre_Completo"];
    $Correo = $_POST["Correo"];
    $Descripcion = $_POST["Descripcion"];
    

    $update = "UPDATE resenas SET Nombre_Completo ='$Nombre_Completo', Correo ='$Correo', Descripcion ='$Descripcion' WHERE id_resena ='$id_resena'";
    $result = mysqli_query($con,$update);

    if(isset($result)){
        include("resenas.php");
    }




?>