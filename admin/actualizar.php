<?php

    // No mostrar los errores de PHP
    error_reporting(0);

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    include("../db/conexion.php");

    $id_reserva = $_GET["id_reserva"];
    $datos = "SELECT * FROM reservas WHERE id_reserva = '".$id_reserva."'";

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

            <h2 style="margin-top: 15px">Reserva seleccionada</h2>

            <div class="insights">
                
                <!------------------ END OF INGRESOS------------------>
            </div>
            <!--------------- END OF INSIGHTS --------------->
            <div class="recent-orders">

            <form action="update.php" method="POST">

            <table border="0" cellspacing="2" cellpadding="2"> 
            <tr > 
                            <td> <font face="Arial" style="color: var(--color-info-dark); font-size: 1rem;">Número de Reserva</font> </td> 
                            <td> <font face="Arial" style="color: var(--color-info-dark); font-size: 1rem;">Fecha</font> </td> 
                            <td> <font face="Arial" style="color: var(--color-info-dark); font-size: 1rem;">Hora</font> </td> 
                            <td> <font face="Arial" style="color: var(--color-info-dark); font-size: 1rem;">Mesa</font> </td> 
                            <td> <font face="Arial" style="color: var(--color-info-dark); font-size: 1rem;">Descripcion</font> </td>
                            <td> <font face="Arial" style="color: var(--color-info-dark); font-size: 1rem;">Telefono</font> </td> 
                        </tr>

                    <?php foreach ($conexion -> query($datos) as $row) {
 
                        ?>

                            
                                <tr>
                                    <td><p><textarea readonly="readonly" name="id_reserva" id="id_reserva" rows="1"><?php echo $row['id_reserva'] ?></textarea></p></td>
                                    <td><p><textarea name="Fecha" id="Fecha" rows="1"><?php echo $row['Fecha'] ?></textarea></p></td>
                                    <td><p><textarea name="Hora" id="Hora" rows="1"><?php echo $row['Hora'] ?></textarea></p></td>
                                    <td><p><textarea name="Mesa" id="Mesa" rows="1"><?php echo $row['Mesa'] ?></textarea></p></td>
                                    <td><p><textarea name="Descripcion" id="Descripcion" rows="1"><?php echo $row['Descripcion'] ?></textarea></p></td>
                                    <td><p><textarea name="Telefono" id="Telefono" rows="1" onkeypress="return valideKey(event);"><?php echo $row['Telefono'] ?></textarea></p></td>
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
                       <img src="./img/user.png">
                    </div>
                </div>
            </div>
            <!----- END OF TOP ------>
            
            <!------------------- END OF RECENT UPDATES -------------------->
            
        </div>
    </div>
</div>
    <script src="../admin/index.js"></script>
    <script type="text/javascript">
		function valideKey(evt){
			
			// code is the decimal ASCII representation of the pressed key.
			var code = (evt.which) ? evt.which : evt.keyCode;
			
			if(code==8) { // backspace.
			  return true;
			} else if(code>=48 && code<=57) { // is a number.
			  return true;
			} else{ // other keys.
			  return false;
			}
		}
		</script>
        <script src="../loader.min.js"></script>
</body>
</html>
