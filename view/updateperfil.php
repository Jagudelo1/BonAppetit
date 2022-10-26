<?php
    // No mostrar los errores de PHP
    
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    include("conexion.php");
    
    $datos = "SELECT * FROM clientes WHERE Usuario = '$_SESSION[usuario]' ";

    $sesion = $_SESSION['usuario'];
    if($sesion == null || $sesion = ''){
    echo 'Usted no tiene autorización';
    header('Location: login.php');
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
    <title>Mi Perfil</title>
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
    <?php include("../template/navbar.php"); ?>
    
    <div class="ContenedorPRN">

        <!--Barra Nav Vertical-->
        <div class="sidebar">
            <i class="fa-solid fa-user iconos"></i>
            <a class="active" href="perfil.php">Datos Personales</a>

            <div class="Exit">
                <i class="fa-solid fa-door-open iconos"></i>
                <a href="cerrar_sesion.php"> Salir</a>
            </div>
        </div>

        <!--Contenido Principal-->
        <div class="ContainerDatos">
            <h1>Actualiza tus Datos Personales <span><?php echo $_SESSION['usuario']; ?></span></h1>
            <table class="table">
                <thead> 
                    <tr>
                        <td> <font face="Arial">Documento</font> </td> 
                        <td> <font face="Arial">Nombres</font> </td> 
                        <td> <font face="Arial">Apellidos</font> </td> 
                        <td> <font face="Arial">Correo Electronico</font></td>
                        <td> <font face="Arial">Celular</font> </td> 
                        <td> <font face="Arial">Contraseña</font> </td> 
                    </tr>
                </thead>
                <tbody>
                    <form method="POST" action="Funciones/updatep.php">
                        <?php foreach ($conexion -> query($datos) as $row) {?>
                            <tr>
                                <td><p><input type="number" value="<?php echo $row['Documento'] ?>" class="form-control" id="exampleFormControlTextarea1" readonly="readonly" name="Documento" id="Documento"></input></p></td>
                                <td><p><input type="text" value="<?php echo $row['Nombres'] ?>" class="form-control" id="exampleFormControlTextarea1" name="Nombres" id="Nombres"></input></p></td>
                                <td><p><input type="text" value="<?php echo $row['Apellidos'] ?>" class="form-control" id="exampleFormControlTextarea1" name="Apellidos" id="Apellidos"></input></p></td>
                                <td><p><input type="email" value="<?php echo $row['Correo_Electronico'] ?>" class="form-control" id="exampleFormControlTextarea1" name="Correo_Electronico" id="Correo_Electronico"></input></p></td>
                                <td><p><input type="number" value="<?php echo $row['Celular'] ?>" class="form-control" id="exampleFormControlTextarea1" name="Celular" id="Celular"></input></p></td>
                                <td><p><input type="password" value="<?php echo $row['Contrasena'] ?>" class="form-control" id="exampleFormControlTextarea1" name="Contrasena" id="Contrasena"></input></p></td>
                            </tr>
                        <?php } ?>
                </tbody>
                </table>
                <div class="BotonAct">
                    <button type="submit">Actualizar</button>
                </div>
            </form>
        </div>
    </div>

    <!--Footer-->
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
}

/* activo/actual link */
.sidebar a.active {
    background-color: #F47B3D;
    color: white;
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

/*Contenedor de Textos principales*/
.ContainerDatos{
    padding: 80px;
}

.ContainerDatos h1{
    text-align: center;
    font-weight: 800;
    margin-bottom: 30px;
}

.ContainerDatos h1 span{
    color: red;
}

.table textarea{
    resize: none;
}

.table tbody tr{
    background-color: #CCCCCC;
}

.table thead tr{
    background-color: #fc5500;
    color: #fff;
}

.table .responsivegene th, table td {
    text-align: center;
}

/*Boton Actualizar*/
.BotonAct button{
    border: 0;
    color: #fff;
    padding: 12px;
    display: block;
    margin: 0 auto;
    font-weight: 700;
    border-radius: 18px;
    background-color: #fc5500;
}

.BotonAct button:hover{
    background-color: #FF8040;
    color: #000;
}

</style>