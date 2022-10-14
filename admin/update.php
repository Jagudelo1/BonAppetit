<?php

    include("../db/conexion.php");

    $Id_Reserva = $_POST["Id_Reserva"];
    $Fecha = $_POST["Fecha"];
    $Hora = $_POST["Hora"];
    $Mesa = $_POST["Mesa"];
    $Descripcion = $_POST["Descripcion"];
    $Estado = $_POST["Estado"];
    $Telefono = $_POST["Telefono"];

    

    $update = "UPDATE reservas SET Fecha ='$Fecha', Hora ='$Hora', Mesa ='$Mesa', Descripcion ='$Descripcion', Estado='$Estado', Telefono ='$Telefono' WHERE Id_Reserva ='$Id_Reserva'";
    $result = mysqli_query($conexion,$update);

    if(isset($result)){
        header("Location:admin.php");
    }




?>