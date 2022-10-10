<?php

    include("conexion.php");

    $Id_Factura = $_GET["Id_Factura"];

    $delete = "DELETE FROM factura_ventas WHERE Id_Factura = '$Id_Factura'";
    $result = mysqli_query($con, $delete);

    if(isset($delete)){
        header("location:/ADMIN/facturas/facturas.php");
    }
    else{
        echo "No";
    }


?>