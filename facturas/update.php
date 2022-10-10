<?php

    include("conexion.php");

    $Id_Factura = $_POST["Id_Factura"];
    $Id_Cliente = $_POST["Id_Cliente"];
    $Id_Categoria = $_POST["Id_Categoria"];
    $Id_Reserva = $_POST["Id_Reserva"];
    $Id_Platillo = $_POST["Id_Platillo"];
    $Fecha = $_POST["Fecha"];

    

    $update = "UPDATE factura_ventas SET Id_Cliente ='$Id_Cliente', Id_Categoria ='$Id_Categoria', Id_Reserva ='$Id_Reserva', Id_Platillo ='$Id_Platillo', Fecha ='$Fecha' WHERE Id_Factura ='$Id_Factura";
    $result = mysqli_query($con,$update);

    if(isset($result)){
        echo "Registro actualizado";
    }




?>