<?php
    // No mostrar los errores de PHP
    error_reporting(0);

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    include("conexion.php");

    $datos= "SELECT * FROM resenas";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- MATERIAL CDN -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <!-- STYLESHEET -->
    <link rel="shortcut icon" href="Img/ICONO.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/073e5c788d.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fc2b9b04bc.js" crossorigin="anonymous"></script>
    <title>Clientes</title>
    <link rel="stylesheet"a href="../resenas/stylere.css">
</head>
<body>
<div class="container">
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
            <a href="../admin/admin.php">
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


            <a href="../index.php">
                <span class="material-icons-sharp">logout</span>
                <h3>Salir</h3>
            </a>
        </div>
    </aside>

    <main>

        <h1>Menú Administrador</h1>

             <br> 

        <div class="recent-orders">
            <h2>Reseñas</h2>

            <table border="0" cellspacing="2" cellpadding="2"> 
                            <tr> 
                                <td> <font face="Arial">id</font> </td> 
                                <td> <font face="Arial">nombre</font> </td> 
                                <td> <font face="Arial">correo</font> </td> 
                                <td> <font face="Arial">comentario</font> </td> 
                                <td> <font face="Arial">fecha</font> </td>
                            </tr>

                            <?php foreach ($con -> query($datos) as $row) {

                            
                        ?>

                            
                                <tr>
                                    <td><p><?php echo $row['id_resena'] ?></p></td>
                                    <td><p><?php echo $row['nombre'] ?></p></td>
                                    <td><p><?php echo $row['correo'] ?></p></td>
                                    <td><p><?php echo $row['comentario'] ?></p></td>
                                    <td><p><?php echo $row['fecha'] ?></p></td>
                                    <th><a href="actualizar.php?id_resena=<?php echo $row['id_resena'] ?> "> <span class="material-icons-sharp">edit</span> </a></td>     
                                    <th><a href="delete.php?id_resena=<?php echo $row['id_resena'] ?> "> <span class="material-icons-sharp" style="color: red;">delete</span> </a></td>                                
                                </tr>


                        <?php
                        }
                    ?>

        </table>
        </div>
    </main>
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
                <p>Hola, <b><?php echo $_SESSION['usuario']; ?></b></p>
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

<script src="./indexre.js"></script>
</body>
</html>