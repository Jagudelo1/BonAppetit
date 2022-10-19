<?php
    // No mostrar los errores de PHP
    error_reporting(0);

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    include("conexion.php");

    $datos= "SELECT * FROM platillos";

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
    <title>Administrador</title>
    <link rel="stylesheet"a href="../ventas/style.css">
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">       
                 <div class="logo">
                       <img src="./img/icon.png">
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
               <a href="../resenas/resenas.php">
                    <span class="material-icons-sharp">reviews</span>
                    <h3>Reseñas</h3>
                </a>
                <a href="../ventas/ventas.php" class="active">
                    <span class="material-icons-sharp">add_alert</span>
                    <h3>Ventas</h3>
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

            <h2 style="margin-top: 15px">Ventas</h2>

            <div class="recent-orders">
            <table border="0" cellspacing="2" cellpadding="2"> 
                            <tr> 
                                <td> <font face="Arial">Id</font> </td> 
                                <td> <font face="Arial">Nombre</font> </td> 
                                <td> <font face="Arial">Ventas</font> </td> 
                            </tr>

                            <?php foreach ($con -> query($datos) as $row) {

                            
                        ?>

                            
                                <tr>
                                    <td><p><?php echo $row['Id_Platillo'] ?></p></td>
                                    <td><p><?php echo $row['Nombre_Platillo'] ?></p></td>
                                    <td><p><?php echo $row['ventas'] ?></p></td>
                                    <th><a href="actualizar.php?Id_Platillo=<?php echo $row['Id_Platillo']?>"> <span class="material-icons-sharp">add</span> </a></td>                                  
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
                       <img src="./img/user.png">
                    </div>
                </div>
            </div>
            <!----- END OF TOP ------>
            
            <!------------------- END OF RECENT UPDATES -------------------->
            <div class="sales-analytics">
                <h2>Analizador de INGRESOS</h2>
                <div class="item customers">
                    <div class="icon">
                        <a target="_blank" href="../Rreservas/reservas.php"><span class="material-icons-sharp">inventory</span></a>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Imprimir Reporte</h3>
                        </div>
                    </div>
                </div>
                <div class="item online">
                <div class="icon">
                    <a target="_blank" href="../Grafico/index.php"> <span class="material-icons-sharp">analytics</span> </a>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>Gráficos</h3>
                    </div>
                </div>
            </div>         
        </div>
    </div>

    <script src="../admin/index.js"></script>
</body>
</html>
