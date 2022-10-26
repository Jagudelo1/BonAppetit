<?php
    // No mostrar los errores de PHP
    error_reporting(0);

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    
    $sesion = $_SESSION['usuario'];
        if($sesion == null || $sesion = ''){
        echo 'Usted no tiene autorización';
        die();
    }
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
    <title>Mi Perfil - Actualizar Contraseña</title>
</head>
<body>
    <!--Navbar-->
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
                    <a class="nav-link" href="reservas.php">Reserva</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactanos.php">Contactanos</a>
                </li>
            </ul>            
        </div>
            <ul class="navbar-nav ms-auto user">
              <li><b>Hola, <?php echo $_SESSION['usuario']; ?></b></li>
            </ul>

    <?php
        //Acción que se ejecutaria en caso de que no estes logueado
        }else{
    ?>
    <!--Antes de logearse-->
    <div class="collapse navbar-collapse navcolor " id="navbarNav">
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
    
    <div class="ContenedorPRN">
        <!--Barra Nav Vertical-->
        <aside>
            <div class="sidebar">
                <a href="./perfil.php" class="active">
                     <span class="material-icons-sharp">person_outline</span>
                     <h3>Datos Personales</h3>
                </a>
                <a href="./perfilupdate.php">
                    <span class="material-icons-sharp">edit</span>
                    <h3>Modificar Datos</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">restaurant</span>
                    <h3>Actualizar Reserva</h3>
               </a>
               <a href="#">
                    <span class="material-icons-sharp">key</span>
                    <h3>Cambiar Contraseña</h3>
               </a>
                
                <a href="./login.php">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Salir</h3>
                </a>
            </div>
        </aside>

        <!--Contenido Principal-->
        <div class="container_data">
          <ul class="navbar-nav ms-auto user">
              <li><b>Hola, <?php echo $_SESSION['usuario']; ?></b></li>
            </ul>
        </div>
        Actualizar Contraseña
    </div>

    <?php include("../template/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> 
</body>
</html>

<style>
/*Navbar*/
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
    }

    .nav-item a{
        font-size: 15px;
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

    .user b{
      color: white;
    }

    aside {
        width: 20%;
        background-color: #fc5500;
    }

/* ================== SIDEBAR ================== */

    aside .sidebar {
        display: flex;
        flex-direction: column;
        height: 86vh;
        position: relative;
        top: 3rem;

    }
    aside h3 {
        font-weight: bold;
        font-size: 15px;
    }

    aside .sidebar a {
        display: flex;
        text-decoration: none;
        color: #fff;
        margin-left: 2rem;
        gap: 1rem;
        align-items: center;
        height: 3.7rem;
        transition: all 300ms ease;
    }

    aside .sidebar a span {
        font-size: 1.6rem;
        transition: all 300ms ease;
        color: #000;
    }

    aside .sidebar a:last-child{
        position: absolute;
        bottom: 2rem;
        width: 100%;
    }

    aside .sidebar a.active {
        background: rgba(132,139,200,0.18);
        color: black;
        margin-left: 0;
    }

    aside .sidebar a.active::before {
        content: "";
        width: 6px;
        height: 100%;
        background: #7380ec;
    }

    aside .sidebar a.active span {
        color: white;
        margin-left: calc(1rem - 3px);
    }

    aside .sidebar a:hover {
        color: black;
    }

    aside .sidebar a:hover span{
        margin-left: 1rem;
    }

    aside .sidebar .message-count {
        background: #ff7782;
        color: #fff;
        padding: 2px 10px;
        font-size: 11px;
        border-radius: var(--border-radius-1);
    }

@media (max-width: 414px){
    aside h3{
        display: none;
    }

    aside .sidebar a {
        display: flex;
        text-decoration: none;
        color: #fff;
        margin-left: 2rem;
        gap: 1rem;
        align-items: center;
        height: 3.7rem;
    }

    aside .sidebar a span {
        font-size: 1.6rem;
        color: #000;
    }
}

</style>