<?php

    $conexion=mysqli_connect('localhost','root','','bonappetit')

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
    <link rel="stylesheet"a href="../facturas/stylefac.css">
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
            <a href="../resenas/resenas.php">
                <span class="material-icons-sharp">reviews</span>
                <h3>Reseñas</h3>
            </a>
            <a href="../facturas/facturas.php"class="active">
                <span class="material-icons-sharp">inventory</span>
                <h3>Facturas</h3>
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
            <h2>Facturas</h2>

            <table border="0" cellspacing="2" cellpadding="2"> 
                            <tr> 
                                <td> <font face="Arial">Id_Factura</font> </td> 
                                <td> <font face="Arial">Id_Cliente</font> </td> 
                                <td> <font face="Arial">Id_Categoria</font> </td> 
                                <td> <font face="Arial">Id_Reserva</font> </td> 
                                <td> <font face="Arial">Id_Platillo</font> </td> 
                                <td> <font face="Arial">Fecha</font> </td>
                            </tr>

                    <?php
                        $query="SELECT * from factura_ventas";
                        $resultado = $conexion->query($query);
                        while($row = $resultado->fetch_assoc()){

                            
                        ?>

                            
                                <tr>
                                    <td><p><?php echo $row['Id_Factura'] ?></p></td>
                                    <td><p><?php echo $row['Id_Cliente'] ?></p></td>
                                    <td><p><?php echo $row['Id_Categoria'] ?></p></td>
                                    <td><p><?php echo $row['Id_Reserva'] ?></p></td>
                                    <td><p><?php echo $row['Id_Platillo'] ?></p></td>
                                    <td><p><?php echo $row['Fecha'] ?></p></td>
                                    <th><a href="actualizar.php?Id_Factura=<?php echo $row['Id_Factura'] ?> "> <span class="material-icons-sharp">edit</span> </a></td>     
                                    <th><a href="delete.php?Id_Factura=<?php echo $row['Id_Factura'] ?> "> <span class="material-icons-sharp" style="color: red;">delete</span> </a></td>                                 
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
        <div class="sales-analytics">
            <h2>Analizador de CLIENTES</h2>
            <div class="item customers">
                <div class="icon">
                    <a href="#"> <span class="material-icons-sharp">add_circle</span> </a>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>Añadir</h3>
                    </div>
                </div>
            </div>
            <div class="item customers">
                <div class="icon">
                    <a href="../repfact/index.php"> <span class="material-icons-sharp">inventory</span> </a>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>Imprimir reporte</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./indexfac.js"></script>
</body>
</html>