<?php
    // No mostrar los errores de PHP
    error_reporting(0);

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    include("../db/conexion.php");

    $Usuario = $_GET["Usuario"];
    $datos = "SELECT * FROM clientes WHERE Usuario = '".$Usuario."'";

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
            <!--Animation Script-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script> 
    <title>Clientes</title>
    <link rel="stylesheet"a href="../clientes/stylec.css">
</head>
<body>
<div class="loader">
    <div></div>
</div>

<div class="content">
<div class="container1">
    <aside>
        <div class="top1">       
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
            <a href="../clientes/clientes.php"  class="active">
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

    <main>
    <h1>Menú Administrador</h1>

        <br>        

        <div class="recent-orders">


            <table border="0" cellspacing="5" cellpadding="5">
                <div class="container2">
                <thead> 
                            <tr>
                                <td> <font face="Arial">Documento</font> </td> 
                                <td> <font face="Arial">Nombres</font> </td> 
                                <td> <font face="Arial">Apellidos</font> </td> 
                                <td> <font face="Arial">Teléfono</font> </td> 
                                <td> <font face="Arial">Fecha</font> </td>
                                <td> <font face="Arial">Usuario</font> </td> 
                                <td> <font face="Arial">Contraseña</font> </td> 
    
                            </tr>
                </thead>
                </div>

                    <tbody id="content">
                    <form action="updatec.php" method="POST">

                        <?php foreach ($conexion -> query($datos) as $row) {
    
                        ?>

        
                                    <tr>
                                        <td><p><textarea readonly="readonly" name="Documento" id="Documento" rows="1"><?php echo $row['Documento'] ?></textarea></p></td>
                                        <td><p><textarea name="Nombres" id="Nombres" rows="1"><?php echo $row['Nombres'] ?></textarea></p></td>
                                        <td><p><textarea name="Apellidos" id="Apellidos" rows="1"><?php echo $row['Apellidos'] ?></textarea></p></td>
                                        <td><p><textarea name="Celular" id="Celular" rows="1"><?php echo $row['Celular'] ?></textarea></p></td>
                                        <td><p><textarea name="Fecha" id="Fecha" rows="1"><?php echo $row['Fecha'] ?></textarea></p></td>
                                        <td><p><textarea name="Usuario" id="Usuario" rows="1"><?php echo $row['Usuario'] ?></textarea></p></td>
                                        <td><p><textarea name="Contrasena" id="Contrasena" rows="1"><?php echo $row['Contrasena'] ?></textarea></p></td>
                                    </tr>


                        <?php
                        }
                        ?>      
                    </tbody>
                </table>
                <button type="submit">
                    <span class="material-icons-sharp">edit</span>
                    <h3>Confirmar</h3>
                </button>
                </form>
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

    </div>
</div>
</div>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script src="./indexc.js"></script>
<script src="./pagination.js"></script>
<script src="./jquery.js"></script>
<script src="../clientes/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="../loader.min.js"></script>
</body>
</html>