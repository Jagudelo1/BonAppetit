<?php

    include("../conexion.php");

    $id_reserva = $_POST["id_reserva"];
    $Nombre_Completo = $_POST["Nombre_Completo"];
    $Telefono = $_POST["Telefono"];
    $Fecha_Reserva = $_POST["Fecha_Reserva"];
    $Hora = $_POST["Hora"];
    $Descripcion = $_POST["Descripcion"];
    $Mesa = $_POST["Mesa"];

    $updater = "UPDATE reservas SET Nombre_Completo = '$Nombre_Completo', 
    Telefono = '$Telefono', Fecha_Reserva = '$Fecha_Reserva', Hora = '$Hora',
    Descripcion = '$Descripcion', Mesa = '$Mesa' WHERE id_reserva = '$id_reserva'";
    $results = mysqli_query($conexion,$updater);

    if(isset($results)){
        header("Location: ../reservas.php");
    }  
?>