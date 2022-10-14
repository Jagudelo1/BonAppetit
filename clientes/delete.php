<?php

    include("../db/conexion.php");

    $Documento = $_GET["Documento"];

    $delete = "DELETE FROM clientes WHERE Documento = '$Documento'";
    $result = mysqli_query($conexion, $delete);

    if(isset($delete)){
        header("location:./clientes.php");
    }
    else{
        echo "No";
    }


?>