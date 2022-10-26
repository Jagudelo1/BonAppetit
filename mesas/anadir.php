<?php
    // No mostrar los errores de PHP
    error_reporting(0);

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    include("../db/conexion.php");

    $mesas= "SELECT * FROM mesas";

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
    <link rel="shortcut icon" href="img/icon.png">

    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Clientes</title>
    <link rel="stylesheet"a href="../mesas/styleM.css">
</head>
<body>
<div class="container1">
    <aside>
        <div class="top1">       
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
            <a href="../ventas/ventas.php">
                    <span class="material-icons-sharp">add_alert</span>
                    <h3>Ventas</h3>
                </a>
                <a href="../mesas/mesa.php" class="active">
                    <span class="material-icons-sharp">table_bar</span>
                    <h3>Mesas</h3>
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
            <h2>Añadir Platillos</h2>

            <div class="recent-orders">

            <form action="add.php" method="POST">
                <div>
            <label>Foto</label>
            <input class="input form-control" type="file" id="Foto_Platillo" name="Foto_Platillo" accept="image/*" required>
            <p style="color: white">Peso maximo de 60kb</p>
            <label>Nombre</label>
            <input class="input form-control" type="text" id="Nombre_Platillo" name="Nombre_Platillo" required>
            <label>Precio</label>
            <input class="input form-control" type="number" id="Precio_Platillo" name="Precio_Platillo" required>
            <label>Descripcion</label>
            <input class="input form-control" type="text" id="Descripcion" name="Descripcion" required>
            <label>Estado</label>
            <input class="input form-control" type="text" id="Estado" name="Estado" required>
            <br />
            <select name="Id_Categoria" id="Id_Categoria">
                <?php
                    $query=mysqli_query($conexion,$category);
                    while($row=mysqli_fetch_array($query)){
                        $idcategory=$row['Id_Categoria'];
                        $nombrecategory=$row['Nombre_Categoria'];
                    ?>
                        <option value="<?php echo $idcategory ?>"><?php echo $nombrecategory ?></option>
                <?php
                    }
                ?>
            </select>
                </div>

            <button type="submit">
            <span class="material-icons-sharp">edit</span>
            <h3>Confirmar</h3>
            </button>
            </form>
            </div>
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
            <div class="item offline">
                <div class="icon">
                    <a href="platillos.php"><span class="material-icons-sharp">undo</span></a>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>Atrás</h3>
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
</body>
</html>