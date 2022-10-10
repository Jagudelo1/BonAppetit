<?php
    // No mostrar los errores de PHP
    error_reporting(0);

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    include("conexion.php");
    $platillos = "SELECT * FROM platillos WHERE id_categoria = 4";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/ICONO.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/073e5c788d.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="platillos.css">
    <link rel="stylesheet" href="footer.css">
    <script src="https://kit.fontawesome.com/fc2b9b04bc.js" crossorigin="anonymous"></script>
    <script src="app.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <title>Bon Appetit - Bebidas</title>

</head>
<body>
    
<!--Navbar-->
<?php include("../template/navbar.php") ?>

<div class="ContainerP">
    
    <!--Titulo-->
    <h1 class="titleP">Nuestros Platillos</h1>

    <!--Categorias-->
        <div class="dropdown categorias">
            <a class="btn btn-primary dropdown-toggle categ" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Filtrar <i class="fa-solid fa-filter"></i>
            </a>

            <ul class="dropdown-menu lista" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="col.php">Comida Colombiana</a></li>
                <li><a class="dropdown-item" href="asados.php">Comidas Asadas</a></li>
                <li><a class="dropdown-item" href="mar.php">Comida de Mar</a></li>
                <li><a class="dropdown-item" href="Pstre.php">Postres</a></li>
                <li><a class="dropdown-item" href="ref.php">Bebidas</a></li>
            </ul>
        </div>

    <!--Tarjetas-->
    <div class="ContainerCards">
        <?php $resultado = mysqli_query($conexion, $platillos);
        while($row=mysqli_fetch_assoc($resultado)) { ?>
        <div class="card Cards" style="width: 19rem;">
        <img src="data:image/jpg/png/jpeg;base64,<?php echo base64_encode($row['Foto_Platillo']); ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row["Nombre_Platillo"] ?></h5>
                <p class="card-text">$<?php echo $row["Precio_Platillo"] ?></p>
                <button type="button" class="ButtonM" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Más Detalles
                </button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <?php echo $row["Nombre_Platillo"] ?>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo $row["Descripcion_Platillo"] ?>
                </div>
                <div class="modal-body">
                    <?php echo $row["Precio_Platillo"] ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                </div>
                </div>
            </div>
        </div>

        <?php } ?>
    </div>
</div>

<?php include("../template/footer.php"); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

<style>
@import url('https://fonts.googleapis.com/css2?family=Concert+One&display=swap');

body{
    overflow-x: hidden;
    background-image: url(img/Fondo.png);
}

*{
    margin: 0;
}

/*dropdown*/
.btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited{
    background-color: #fc5500 !important;
}

.categorias{
    margin-left: 95px;
    margin-top: 35px;
    margin-bottom: 35px;
}

.categ{
    background-color: #fc5500;
    color: #000;
    font-weight: 700;
    border: 0;
}

.categ:hover{
    background-color: #fc5500;
    color: #fff;
}

.lista{
    background-color: #fc5500;
    
}

.lista a{
    color: #fff;
    font-weight: 700;
}

/*Titulo*/
.titleP{
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 0.2rem;
    font-family: 'Concert One', cursive;
    margin-top: 40px;
    font-weight: 900;
    text-shadow: 3px 3px 0px white,
    6px 6px 0px black;
    font-size: 50px;
}

/*Contenedor Principal*/
.ContainerCards{
    display: grid;
    grid-template-columns: auto auto auto;
}

/*Estilos de las Cards*/
.ContainerCards .Cards{
    margin: 0 auto;
    margin-bottom: 35px;
    border-radius: 15px;
    transition: all .2s;
    cursor: pointer;
}

.ContainerCards .Cards img{
    border-radius: 15px;
    height: 200px;
}

.ContainerCards .Cards:hover{
    transform: scale(1.1);
}

.Cards .card-title{
    text-align: center;
    text-transform: uppercase;
    font-weight: 700;
    font-family: 'Concert One', cursive;
    margin-top: 8px;
}

.Cards .card-text{
    position: absolute;
    right: 0;
    top: 0;
    background: red;
    color: white;
    padding: 0.1em;
    border-radius: 0 6px 0 6px;
    font-weight: 200;
    font-family: 'Concert One', cursive;
}

.Cards .ButtonM{
    display: block;
    margin: 0 auto;
    border: 0;
    background: #E21010;
    color: white;
    font-weight: 600;
    padding: 0.5em;
    border-radius: 12px;
    margin-top: 18px;
}

.Cards .ButtonM:hover{
    background: #D02424;
}

</style>