<?php
    // No mostrar los errores de PHP
    error_reporting(0);
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    include("conexion.php");
    
    $usuario = "SELECT * FROM clientes WHERE Usuario = '$_SESSION[usuario]' ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="shortcut icon" href="img/ICONO.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/d751bf33a4.js" crossorigin="anonymous"></script>
    <title>Mi Perfil - Cambiar Contraseña</title>
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
        border-top: 5px solid #fc5500;
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
    <?php include("../template/navbar.php"); ?>
    
<div class="ContenedorPRN">
    <!--Barra Nav Vertical-->
    <div class="sidebar">
        <i class="fa-solid fa-user iconos"></i>
        <a class="active" href="perfil.php">Datos Personales</a>

        <i class="fa-solid fa-key"></i>
        <a class="active" href="cambiar_password.php">Cambiar Contraseña</a>

        <div class="Exit">
            <i class="fa-solid fa-door-open iconos"></i>
            <a href="cerrar_sesion.php"> Salir</a>
        </div>
    </div>

    <div class="CambiarPassword">
        <h3>Cambia tu Contraseña</h3>
        <form action="Funciones/recuperar_password" method="POST">
            <div class="mb-3">
                <label class="form-label">Contraseña Anterior</label>
                <input class="form-control" type="password" name="Contrasena">
            </div>
            <div class="mb-3">
                <label class="form-label">Contraseña Nueva</label>
                <input class="form-control" type="password" name="Contrasena">
            </div>
            <center>
                <div class="BotonCambiar">
                    <button type="submit" class="cambiar">Cambiar</button>
                    <button type="submit" class="cancelar">Cancelar</button>
                </div>
            </center>
        </form>
    </div>
</div>

    <?php include("../template/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> 
</body>
</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Concert+One&display=swap');

.ContenedorPRN{
    display: grid;
    grid-template-columns: 15% 85%;
}

/*Sidebar*/
.sidebar {
    margin: 0;
    padding: 0;
    background-color: #fc5500;
    height: 86vh;
    overflow: auto;
    padding-top: 20px;
}

/* Sidebar links */
.sidebar a {
    display: block;
    color: black;
    font-weight: 700;
    padding: 16px;
    text-decoration: none;
    margin-top: 10px;
}

/* activo/actual link */
.sidebar a.active {
    background-color: #F47B3D;
    color: white;
}

.sidebar a:hover{
    color: #000;
}

/* Enlaces al pasar el mouse */
.sidebar a:hover:not(.active) {
    background-color: #F47B3D;
    color: white;
}

.sidebar a:last-child{
    position: absolute;
    bottom: 2rem;
    width: 15%;
}

.sidebar i{
    display: none;
}

/* Contenido de página. El valor de la propiedad de margen izquierdo debe coincidir con el valor de la propiedad de ancho de la barra lateral. */
div.content {
    margin-left: 200px;
    padding: 1px 16px;
    height: 1000px;
}

@media screen and (max-width: 788px){
    .sidebar a{
        display: none;
    }

    .sidebar i{
        display: block;
        text-align: center;
        margin-top: 20px;
        color: #fff;
        padding: 16px;
    }
}

/* En pantallas que tienen menos de 700 px de ancho, convierta la barra lateral en una barra superior */
@media screen and (max-width: 700px) {
    .sidebar{
        width: 100%;
        height: auto;
        position: relative;
    }

    div.content{
        margin-left: 0;
    }
}

/* En pantallas de menos de 400 px, muestre la barra verticalmente, en lugar de horizontalmente */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }

}

.CambiarPassword{
            display: block;
            margin: 0 auto;
            background-color: #fc5500;
            height: 70vh;
            margin-top: 50px;
            border-radius: 18px;
            padding: 30px;
        }

        @media(max-width: 768px){
            .CambiarPassword{
                width: 75%;
                margin-bottom: 50px;
            }

            .CambiarPassword h3{
                font-size: 20px;
            }
        }

        .CambiarPassword h3{
            text-align: center;
            color: #fff;
            margin-top: 30px;
            margin-bottom: 30px;
            text-transform: uppercase;
            font-weight: 800;
            font-family: 'Secular One', sans-serif;
        }

        .CambiarPassword form label{
            color: #fff;
        }

        .BotonCambiar button{
            border: 0;
            padding: 12px;
            border-radius: 12px;
            font-weight: 700;
            margin: 0 auto;
            margin-top: 15px;
        }

        .BotonCambiar .cancelar{
            background-color: red;
            color: #fff;
        }

        .BotonCambiar .cambiar{
            background-color: #003EFF;
            color: #fff;
        }

        .BotonCambiar .cancelar:hover{
            background-color: #FF3131;
        }

        .BotonCambiar .cambiar:hover{
            background-color: #3163FF;
        }
</style>