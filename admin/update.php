<?php

    include("conexion.php");

    $id_reserva = $_POST["id_reserva"];
    $usuario = $_POST["usuario"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $contraseña = $_POST["contraseña"];

    

    $update = "UPDATE usuarios SET Id_Reserva ='$Id_Reserva', usuario ='$usuario', nombre ='$nombre', apellido ='$apellido', contraseña ='$contraseña' WHERE id_reserva ='$id_reserva'";
    $result = mysqli_query($con,$update);

    if(isset($result)){
        echo "Registro actualizado";
    }




?>