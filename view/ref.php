<?php
    // No mostrar los errores de PHP
    error_reporting(0);

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    include("../db/conexion.php");
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
    <script src="https://kit.fontawesome.com/fc2b9b04bc.js" crossorigin="anonymous"></script>
    <script src="app.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/Platillos.css">
    <title>Bon Appetit - Bebidas</title>
</head>
<body>
<!--Preloader-->
<div class="preloader">
    <div class="spiner">
        <div class="spiner">
            <div class="spiner">
                <div class="spiner"></div>
            </div>
        </div>
    </div>
</div>

<!--Estilos Preloader-->
<style>
    .preloader{
        width: 100%;
        height: 100%;
        background: #000;
        position: fixed;
        left: 0;
        top: 0;
        z-index: 10000;
    }

    .spiner{
        width: 70px;
        height: 70px;
        border-top: 5px solid blue;
        border-right: 5px solid transparent;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        margin: auto;
        z-index: 100000;
    }

    .spiner > div{
        box-sizing: border-box;
        margin: auto;
        width: 100%;
        height: 100%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        100%{
            transform: rotate(360deg);
        }
    }
</style>

<!--Javascript Preloader-->
<script>
    const preloader = document.querySelector(".preloader");

    window.addEventListener("load",() =>{
        preloader.style.display = "none"
    })
</script>

<!--Navbar-->
<?php include("../template/navbar.php") ?>

<div class="ContainerP">
    
    <!--Titulo-->
    <h1 class="titleP">Bebidas</h1>

    <!--Categorias-->
        <div class="dropdown categorias">
            <a class="btn btn-primary dropdown-toggle categ" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Filtrar <i class="fa-solid fa-filter"></i>
            </a>

            <ul class="dropdown-menu lista" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="platillos.php">Todos</a></li>
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
                <button type="button" class="btn btn-primary botonVer" data-bs-toggle="modal" data-bs-target="#modalp<?php echo $row['Id_Platillo']; ?>">
                        Ver más
                    </button>
                </center>
            </div>
        </div>
        <?php include('modalp.php'); ?>
        <?php } ?>
    </div>
</div>

<?php include("../template/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>