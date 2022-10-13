<?php 
    include "conexion.php";
    $Correo_Electronico =$_POST['Correo_Electronico'];
    $bytes = random_bytes(5);
    $token = bin2hex($bytes);

    include "mail_reset.php";
    if($enviado){
        $conexion->query(" insert into passwords(Correo_Electronico, token, codigo) 
         values('$Correo_Electronico','$token','$codigo') ") or die($conexion->error);
         echo '<p>Verifica tu email para restablecer tu cuenta</p>';
    }
?>