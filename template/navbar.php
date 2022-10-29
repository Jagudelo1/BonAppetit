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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Clicker+Script&family=Open+Sans&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid ml-auto">
        <a class="navbar-brand titulo" href="#">Bonappetit</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
        aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <!--Despues de logearse-->
    <?php
        //En el if va la variable con la que identificas si estan logueados
        if($_SESSION['usuario'] == true){
    ?>
    <div class="collapse navbar-collapse navcolor" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="platillos.php">Platillos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="resena.php">Reseña</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reservas.php">Mis Reservas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactanos.php">Contactanos</a>
                </li>
            </ul>
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                   <b>Hola</b>, <?php echo $_SESSION['usuario']; ?>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../view/perfil.php">Mi Perfil</a></li>
                    <li><a class="dropdown-item" href="cerrar_sesion.php">Cerrar Sesion</a></li>
                </ul>
            </div>
            
        </div>

    <?php
        //Acción que se ejecutaria en caso de que no estes logueado
        }else{
    ?>
    <!--Antes de logearse-->
    <div class="collapse navbar-collapse navcolor" id="navbarNav">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../view/platillos.php">Platillos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../view/resena.php">Reseña</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../view/contactanos.php">Contactanos</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="../view/login.php">Ingresar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../view/registrate.php">Registrate</a>
            </li>
        </ul>
    </div>
    <?php
        }
    ?>
    </div>
</nav>
</body>
</html>

<style>
    body{
        overflow-x: hidden;
        background-image: linear-gradient(rgba(5, 10, 5, 0.80), rgba(254, 229, 204, 0.8)), url(../view/img/Fondo.png);
        background-size: cover;
        background-position: center center;
    }

    *{
        margin: 0;
    }

    :root{
        --primary-color: #fc5500;
    }

    /*Navbar*/
    .navbar{
        background-color: var(--primary-color);
        box-shadow: 4px 4px 7px #C71414;
    }

    .titulo{
        color: white;
        font-size: 30px;
        font-weight: 900;
        text-transform: uppercase;

        pointer-events: none;
        cursor: default;
    }

    .nav-item a{
        font-size: 17px;
        color: white;
        font-weight: 900;
    }

    .dropdown button{
        border: none;
        color: white !important;
    }

    .dropdown button:hover{
        color: white !important;
    }

    .dropdown-menu{
        border: 0;
        background-color: #fc5500;
        border-radius: 0;
    }

    .dropdown-menu li a{
        color: #fff;
    }
</style>