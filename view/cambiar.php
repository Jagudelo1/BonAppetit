<?php
    // No mostrar los errores de PHP
    error_reporting(0);

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/ICONO.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Cambiar Contraseña</title>
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
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid ml-auto">
        <a class="navbar-brand titulo" href="#">Bonappetit</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
        aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse navcolor" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="platillos.php">Platillos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="resena.php">Reseña</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contactanos.php">Contactanos</a>
            </li>
        </ul>
        </div>
    </div>
</nav>
    
<div class="ContainerPassword">
    <h1 class="titlePassword">Nueva Contraseña</h1>
    <form action="recuperar.php" class="FormRecuperar">
        <div class="mb-4 input-field">
            <label class="form-label">Contraseña</label>
            <input class="form-control" type="password" name="Contrasena">
        </div>
        <div class="mb-3 input-field">
            <label class="form-label">Repita la Contraseña</label>
            <input class="form-control" type="password" name="Contrasena">
        </div>
        <center>
            <button type="submit">Enviar</button>
        </center>
    </form>
</div>

<?php include("../template/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> 
</body>
</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Concert+One&display=swap');

    *{
        margin: 0;
    }

    body{
        background-image: linear-gradient(rgba(5, 10, 5, 0.80), rgba(254, 229, 204, 0.8)), url(img/Fondo.png);
        background-size: cover;
        background-position: center center;
        overflow-x: hidden;
    }

    :root{
        --primary-color: #fc5500 !important;
    }

    /*Navbar*/
    .navbar{
        background-color: var(--primary-color);
        box-shadow: 4px 4px 7px #C71414 !important;
    }

    .titulo{
        font-size: 30px;
        font-weight: 900;
        text-transform: uppercase;
    }

    .nav-item a{
        font-size: 17px;
        color: white;
        font-weight: 800;
    }

    .ContainerPassword{
        width: 30%;
        display: block;
        margin: 0 auto;
        padding: 30px;
        background: #fc5500;
        border-radius: 5px;
        box-shadow: 2px 2px 5px rgb(0, 0, 0);
        margin-top: 80px;
        margin-bottom: 80px;
    }

    .ContainerPassword .titlePassword{
        text-align: center;
        font-size: 30px;
        font-family: 'Secular One', sans-serif;
        font-weight: 700;
        color: #fff;
        margin-bottom: 20px;
    }

    .input-field label{
        color: #fff;
    }

    .FormRecuperar button{
        border: 0;
        padding: 10px;
        margin: 20px 0 20px 0;
        border-radius: 12px;
        color: #fff;
        background-color: blue;
    }

    @media (max-width: 770px){
        .ContainerPassword{
            width: auto;
        }
    }
</style>