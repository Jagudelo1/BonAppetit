<?php

    include("../db/conexion.php");

    $id_reserva = $_POST["id_reserva"];
    $Fecha = $_POST["Fecha"];
    $Hora = $_POST["Hora"];
    $Mesa = $_POST["Mesa"];
    $Descripcion = $_POST["Descripcion"];
    $Telefono = $_POST["Telefono"];

    

    $update = "UPDATE reservas SET Fecha ='$Fecha', Hora ='$Hora', Mesa ='$Mesa', Descripcion ='$Descripcion', Telefono ='$Telefono' WHERE id_reserva ='$id_reserva'";
    $result = mysqli_query($conexion,$update);

    if(isset($result)){
        header("Location:admin.php");
    }




?>