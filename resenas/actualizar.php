<?php

    include("../db/conexion.php");

    $id_resena = $_GET["id_resena"];
    $datos = "SELECT * FROM resenas WHERE id_resena = '".$id_resena."'"; 

    $sesion = $_SESSION['usuario'];
        if($sesion == null || $sesion = ''){
        echo 'Usted no tiene autorización';
        header('Location: ../view/login.php');
        die();

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <!-- STYLESHEET -->
    <title>Administrador</title>
    <link rel="stylesheet"a href="../resenas/stylere.css">
</head>
<body>
    <div class="container1">
        <aside>
            <div class="top">       
                 <div class="logo">
                       <img src="./imag/icon.png">
                       <h2>BON<span class="danger">APPETIT</span></h2>
                 </div>
                 <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>       
            </div>
            <div class="sidebar">
                <a href="../admin/admin.php" >
                     <span class="material-icons-sharp">grid_view</span>
                     <h3>Reservas</h3>
                </a>
                <a href="../clientes/clientes.php">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>Personas</h3>
               </a>
               <a href="../platillos/platillos.php">
                    <span class="material-icons-sharp">restaurant</span>
                    <h3>Platillos</h3>
               </a>
               <a href="../resenas/resenas.php" class="active">
                    <span class="material-icons-sharp">reviews</span>
                    <h3>Reseñas</h3>
                </a>
                <a href="../ventas/ventas.php">
                    <span class="material-icons-sharp">add_alert</span>
                    <h3>Ventas</h3>
                </a>
                <a href="../mesas/mesa.php">
                    <span class="material-icons-sharp">table_bar</span>
                    <h3>Mesas</h3>
                </a>

                <a href="../view/cerrar_sesion.php">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Salir</h3>
                </a>
            </div>
        </aside>
        <!-------------------- END OF ASIDE -------------------->
        <main>
            <h1>Menú Administrador</h1>

            <br>

            <h2 style="margin-top: 15px">Reseña seleccionada</h2>

            <div class="insights">
                
                <!------------------ END OF INGRESOS------------------>
            </div>
            <!--------------- END OF INSIGHTS --------------->
            <div class="recent-orders">

            <form action="update.php" method="POST">

            <table border="0" cellspacing="2" cellpadding="2"> 
            <tr> 
                                <td> <font face="Arial">id</font> </td> 
                                <td> <font face="Arial">nombre</font> </td> 
                                <td> <font face="Arial">correo</font> </td> 
                                <td> <font face="Arial">comentario</font> </td> 
                            </tr>


                    <?php foreach ($conexion -> query($datos) as $row) {
 
                        ?>
                            
                                <tr>
                                
                                    <td><p><textarea readonly="readonly" name="id_resena" id="id_resena" rows="1"><?php echo $row['id_resena'] ?></textarea></p></td>
                                    <td><p><textarea name="Nombre_Completo" id="Nombre_Completo" rows="1"><?php echo $row['Nombre_Completo'] ?></textarea></p></td>
                                    <td><p><textarea name="Correo" id="Correo" rows="1"><?php echo $row['Correo'] ?></textarea></p></td>
                                    <td><p><textarea name="Descripcion" id="Descripcion" rows="1"><?php echo $row['Descripcion'] ?></textarea></p></td>
                                </tr>

                        <?php
                        }
                    ?>
                </table>
                <button type="submit">
                <span class="material-icons-sharp">edit</span>
                <h3>Confirmar</h3>
                </button>
                </form>
            </div>
        </main>
        <!------------------ END OF MAIN ------------------>
        
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Buen día, <b>Administrador</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                       <img src="./imag/user.png">
                    </div>
                </div>
            </div>
            <!----- END OF TOP ------>
            
            <!------------------- END OF RECENT UPDATES -------------------->
            
        </div>
    </div>

    <script src="../admin/index.js"></script>
</body>
</html>
