<?php
    $conn = new mysqli("localhost", "root", "", "bonappetit");
    if ($conn->connect_error) {
        die('Error de conexion ' . $conn->connect_error);
    }
?>