<?php
    // No mostrar los errores de PHP
    error_reporting(0);

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    include("../db/conexion.php");

    $datos= "SELECT * FROM reservas";

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
        <!--Animation Script-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- STYLESHEET -->
    <title>Administrador</title>
    <link rel="stylesheet"a href="../admin/style.css">
</head>
<body>

<div class="loader">
    <div></div>
</div>

<div class="content">
    <div class="container">
        <aside>
            <div class="top">       
                 <div class="logo">
                       <img src="img/icon.png">
                       <h2>BON<span class="danger">APPETIT</span></h2>
                 </div>
                 <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>       
            </div>
            <div class="sidebar">
                <a href="../admin/admin.php" class="active">
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
                <a href="../ventas/ventas.php">
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

            <h2 style="margin-top: 15px">Reservas</h2>

            <div class="recent-orders">
            <table border="0" cellspacing="2" cellpadding="2"> 
            <tr >  
                            <td> <font face="Arial" style="color: var(--color-info-dark); font-size: 1rem;">Nombre</font> </td> 
                            <td> <font face="Arial" style="color: var(--color-info-dark); font-size: 1rem;">Teléfono</font> </td> 
                            <td> <font face="Arial" style="color: var(--color-info-dark); font-size: 1rem;">Fecha</font> </td> 
                            <td> <font face="Arial" style="color: var(--color-info-dark); font-size: 1rem;">Hora</font> </td> 
                            <td> <font face="Arial" style="color: var(--color-info-dark); font-size: 1rem;">Mesa</font> </td> 
                            <td> <font face="Arial" style="color: var(--color-info-dark); font-size: 1rem;">Descripcion</font> </td>
                        </tr>

                    <?php foreach ($conexion -> query($datos) as $row) {
 
                        ?>

                            
                                <tr>
                                    <td><p><?php echo $row['Nombre_Completo'] ?></p></td>
                                    <td><p><?php echo $row['Telefono'] ?></p></td>
                                    <td><p><?php echo $row['Fecha'] ?></p></td>
                                    <td><p><?php echo $row['Hora'] ?></p></td>  
                                    <td><p><?php echo $row['Mesa'] ?></p></td>  
                                    <td><p><?php echo $row['Descripcion'] ?></p></td>
                                    <th><a href="actualizar.php?id_reserva=<?php echo $row['id_reserva']?>"> <span class="material-icons-sharp">edit</span> </a></th>     
                                    <th><a href="delete.php?id_reserva=<?php echo $row['id_reserva']?>"> <span class="material-icons-sharp" style="color: red;">delete</span> </a></th>                                  
                                </tr>


                        <?php
                        }
                    ?>
                </table>
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
            </div>
        </div>
    </div>
</div>
    <script src="index.js"></script>
    <script src="../loader.min.js"></script>
</body>
</html>
