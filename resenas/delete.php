<?php

    include("conexion.php");

    $id_resena = $_GET["id_resena"];

    $delete = "DELETE FROM resenas WHERE id_resena = '$id_resena'";
    $result = mysqli_query($con, $delete);

    if(isset($delete)){
        header("location:./resenas.php");
    }
    else{
        echo "No";
    }


?>