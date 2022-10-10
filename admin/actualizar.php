<?php

    include("conexion.php");

    $id_reserva = $_GET["id_reserva"];
    $datos = "SELECT * FROM reservas WHERE id_reserva = '".$id_reserva."'"; 

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
    <link rel="stylesheet"a href="../admin/style.css">
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

                <a href="http://localhost:8080/modelovistacontrolador/index.php">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Salir</h3>
                </a>
            </div>
        </aside>
        <!-------------------- END OF ASIDE -------------------->
        <main>
            <h1>Menú Administrador</h1>

            <br>

            <h2 style="margin-top: 15px">Reserva seleccionada</h2>

            <div class="insights">
                
                <!------------------ END OF INGRESOS------------------>
            </div>
            <!--------------- END OF INSIGHTS --------------->
            <div class="recent-orders">

            <form action="update.php" method="POST">

            <table border="0" cellspacing="2" cellpadding="2"> 
            <tr > 
                            <td> <font face="Arial" style="color: var(--color-info-dark); font-size: 1rem;">id_reserva</font> </td> 
                            <td> <font face="Arial" style="color: var(--color-info-dark); font-size: 1rem;">Fecha</font> </td> 
                            <td> <font face="Arial" style="color: var(--color-info-dark); font-size: 1rem;">Hora</font> </td> 
                            <td> <font face="Arial" style="color: var(--color-info-dark); font-size: 1rem;">Mesa</font> </td> 
                            <td> <font face="Arial" style="color: var(--color-info-dark); font-size: 1rem;">Descripcion</font> </td> 
                            <td> <font face="Arial" style="color: var(--color-info-dark); font-size: 1rem;">Documento</font> </td> 
                            <td> <font face="Arial" style="color: var(--color-info-dark); font-size: 1rem;">Estado</font> </td> 
                        </tr>

                    <?php foreach ($con -> query($datos) as $row) {
 
                        ?>

                            
                                <tr>
                                    <td><p><?php echo $row['id_reserva'] ?></p></td>
                                    <td><p><?php echo $row['Fecha'] ?></p></td>
                                    <td><p><?php echo $row['Hora'] ?></p></td>
                                    <td><p><?php echo $row['Mesa'] ?></p></td>
                                    <td><p><?php echo $row['Descripcion'] ?></p></td>  
                                    <td><p><?php echo $row['Documento'] ?></p></td>  
                                    <td><p><?php echo $row['Estado'] ?></p></td>  
                                    <th><a href="actualizar.php?id_reserva=<?php echo $row['id_reserva']?>"> <span class="material-icons-sharp">edit</span> </a></th>     
                                    <th><a href="delete.php?id_reserva=<?php echo $row['id_reserva']?>"> <span class="material-icons-sharp" style="color: red;">delete</span> </a></th>                                  
                                </tr>


                        <?php
                        }
                    ?>
                </table>
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
                       <img src="./img/user.png">
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
