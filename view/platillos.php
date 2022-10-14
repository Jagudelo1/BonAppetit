<?php
    // No mostrar los errores de PHP
    error_reporting(0);

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    include("../db/conexion.php");
    $platillos = "SELECT Id_Platillo, Nombre_Platillo, Descripcion_Platillo, Precio_Platillo, Foto_Platillo FROM platillos";
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
        <!--Animation Script-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Bon Appetit - Platillos</title>

</head>
<body>

<div class="loader">
    <div></div>
</div>

<div class="content">
<!--Navbar-->
<?php include("template/navbar.php") ?>
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
        <div class="card" style="width: 23rem;">
            <div class="ImgCard">
                <img src="data:image/jpg/png/jpeg;base64,<?php echo base64_encode($row['Foto_Platillo']); ?>">
            </div>
            <div class="card-body">
                <p class="card-text">
                    <?php echo $row["Nombre_Platillo"] ?>
                </p>
                <center>
                    <button type="button" class="btn btn-primary botonVer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Ver más
                    </button>
                </center>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $row["Nombre_Platillo"] ?></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php echo $row["Descripcion_Platillo"] ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary botonVer" data-bs-dismiss="modal">Salir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>


        
    </div>
</div>
<?php include("template/footer.php"); ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="../loader.min.js"></script>
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

/*Cards*/
.ContainerCards{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
}

.ContainerCards .card{
    margin: 0 auto;
    border-radius: 18px;
    background-color: #D0D0D0;
    margin-bottom: 30px;
    margin-top: 60px;
}

.ContainerCards .ImgCard{
    background-color: #fc5500;
    display: block;
    margin: 0 auto;
    width: 100%;
    border-radius: 18px 18px 0 0;
    padding: 10px;
}

.ContainerCards .card img{
    height: 200px;
    width: 210px;
    border-radius: 50%;
    border: 7px solid #fff;
    display: block;
    margin: 0 auto;
}

.card .card-text{
    text-align: center;
    text-transform: uppercase;
    font-weight: 900;
    font-family: 'Concert One', cursive;
    font-size: 25px;

    color: #fff;
    text-shadow:
    3px 3px 0px #000,
    6px 6px 0px #000;
}

.card .text_card{
    display: block;
    margin: 0 auto;
    background-color: #fc5500;
    width: 30%;
    padding: 8px;
    border-radius: 12px;
    text-align: center;
    font-weight: 700;
    color: #fff;
}

.botonVer{
    border: 0;
}

.content{
    display: none;
}

body::-webkit-scrollbar{
    width: 11px;
}

body::-webkit-scrollbar-thumb {
    background: #ff9d00;
    border-radius: 5px;
}

.loader{
    height: 100vh;
    width: 100vw;
    overflow: hidden;
    background-color: #16191e;
    position: absolute;
}

.loader>div{
    height: 100px;
    width: 100px;
    border: 15px solid #45474b;
    border-top-color: #2a88e6;
    position: absolute;
    margin: auto;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    border-radius: 50%;
    animation: spin 1.5s infinite linear;
}

@keyframes spin{
    100%{
        transform: rotate(360deg)
    }
}

</style>