<?php

    include("conexion.php");

    $Documento = $_GET["Documento"];

    $delete = "DELETE FROM clientes WHERE Documento = '$Documento'";
    $result = mysqli_query($con, $delete);

    if(isset($delete)){
        header("location:/ADMIN/clientes/clientes.php");
    }
    else{
        echo "No";
    }


?>