<?php
    // No mostrar los errores de PHP
    error_reporting(0);

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    include("conexion.php");

    $datos= "SELECT * FROM platillos";

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
    <link rel="stylesheet"a href="../platillos/stylep.css">
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
            <a href="../platillos/platillos.php" class="active">
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
            <h2>Platillos</h2>

            <table border="0" cellspacing="2" cellpadding="2"> 
                            <tr> 
                                <td> <font face="Arial">imagen</font> </td> 
                                <td> <font face="Arial">nombre</font> </td> 
                                <td> <font face="Arial">precio</font> </td> 
                                <td> <font face="Arial">descripcion</font> </td> 
                                <td> <font face="Arial">Estado</font> </td>     
                            </tr>

                            <?php foreach ($con -> query($datos) as $row) {

                            
                        ?>

                            
                                <tr>
                                    <td><img src="data:image/png/jpeg/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"></td>
                                    <td><p><?php echo $row['nombre_platillo'] ?></p></td>
                                    <td><p><?php echo $row['precio'] ?></p></td>
                                    <td class="tdp"><p><?php echo $row['descripcion'] ?></p></td>
                                    <td><p><?php echo $row['Estado'] ?></p></td>  
                                    <th><a href="actualizar.php?id_platillo=<?php echo $row['id_platillo'] ?> "> <span class="material-icons-sharp">edit</span> </a></td>     
                                    <th><a href="delete.php?id_platillo=<?php echo $row['id_platillo'] ?> "> <span class="material-icons-sharp" style="color: red;">delete</span> </a></td>                                  
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
                    <img src="./imag/user.png" class="foto">
                </div>
            </div>
        </div>
        <!----- END OF TOP ------>

            <!------------------- END OF RECENT UPDATES -------------------->
        <div class="sales-analytics">
        <h2>Analizador de INGRESOS</h2>
            <div class="item customers">
                <div class="icon">
                    <a target="_blank" href="../platillosr/index.php"> <span class="material-icons-sharp">inventory</span> </a>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>Imprimir reporte</h3>
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
</div>


<script src="./indexp.js"></script>
</body>
</html>