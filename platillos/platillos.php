<?php
    // No mostrar los errores de PHP
    error_reporting(0);

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    include("../db/conexion.php");

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
            <!--Animation Script-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <!-- MATERIAL CDN -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <!-- STYLESHEET -->
    <link rel="shortcut icon" href="Img/ICONO.png">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Clientes</title>
    <link rel="stylesheet"a href="../platillos/stylep.css">
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
            <h2>Platillos</h2>

            <table id="tablax" border="0" cellspacing="5" cellpadding="5" class="table table-striped table-bordered" style="width:100%"> 
            <div class="container2" style="margin-top: 10px;padding: 5px">
                <thead>
                    <tr> 
                        <td> <font face="Arial">Imagen</font> </td> 
                        <td> <font face="Arial">Nombre</font> </td> 
                        <td> <font face="Arial">Precio</font> </td> 
                        <td> <font face="Arial">Descripcion</font> </td> 
                        <td> <font face="Arial">Ventas</font> </td> 
                        <td> <font face="Arial">Estado</font> </td>    
                        <td> <font face="Arial">Editar</font> </td>    
                        <td> <font face="Arial">Eliminar</font> </td>    
                    </tr>
                </thead>
            </div>
            <tbody>
                <?php foreach ($conexion -> query($datos) as $row) {

                ?>      
                    <tr>
                        <td><img height="50px" src="data:image/png/jpg/jpeg;base64,<?php echo base64_encode($row['Foto_Platillo']) ?>"></td>
                        <td><p><?php echo $row['Nombre_Platillo'] ?></p></td>
                        <td><p><?php echo $row['Precio_Platillo'] ?></p></td>
                        <td><p><?php echo $row['Descripcion'] ?></p></td>
                        <td class="tdp"><p><?php echo $row['ventas'] ?></p></td>
                        <td class="tdp"><p><?php echo $row['Estado'] ?></p></td>
                        <th><a href="actualizar.php?Id_Platillo=<?php echo $row['Id_Platillo'] ?> "> <span class="material-icons-sharp">edit</span> </a></td>     
                        <th><a href="delete.php?Id_Platillo=<?php echo $row['Id_Platillo'] ?> "> <span class="material-icons-sharp" style="color: red;">delete</span> </a></td>                                  
                    </tr>
                <?php
                }
                ?>
            </tbody>
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
            <div class="item online">
                <div class="icon">
                    <a href="anadir.php"> <span class="material-icons-sharp">add</span> </a>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>Añadir Platillo</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
        </script>
    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
    </script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js">
    </script>
    <script>
        $(document).ready(function () {
            $('#tablax').DataTable({
                language: {
                    processing: "Tratamiento en curso...",
                    search: "Buscar&nbsp;:",
                    lengthMenu: "Agrupar de _MENU_ items",
                    info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
                    infoEmpty: "No existen datos.",
                    infoFiltered: "(filtrado de _MAX_ elementos en total)",
                    infoPostFix: "",
                    loadingRecords: "Cargando...",
                    zeroRecords: "No se encontraron datos con tu busqueda",
                    emptyTable: "No hay datos disponibles en la tabla.",
                    paginate: {
                        first: "Primero",
                        previous: "Anterior",
                        next: "Siguiente",
                        last: "Ultimo"
                    },
                    aria: {
                        sortAscending: ": active para ordenar la columna en orden ascendente",
                        sortDescending: ": active para ordenar la columna en orden descendente"
                    }
                },
                scrollY: 400,
                lengthMenu: [ [5, 10, -1], [5, 10, "All"] ],
            });
        });
    </script>

<script src="./indexp.js"></script>
<script src="../loader.min.js"></script>
</body>
</html>