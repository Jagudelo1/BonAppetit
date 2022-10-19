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
    <!--Animation Script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Mi Perfil</title>
</head>
<body>
<div class="loader">
    <div></div>
</div>

<div class="contento">
    <!--Navbar-->
    <?php include("../template/navbar.php"); ?>
    
    <div class="ContenedorPRN">

        <!--Barra Nav Vertical-->
        <div class="sidebar">
            <i class="fa-solid fa-user iconos"></i>
            <a class="active" href="perfil.php">Datos Personales</a>

            <i class="fa-solid fa-utensils iconos"></i>
            <a href="misreservas.php">Mi Reserva</a>

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
                        <td> <font face="Arial">Teléfono</font> </td> 
                        <td> <font face="Arial">Correo Electronico</font></td>
                        <td> <font face="Arial">Contraseña</font> </td> 
                    </tr>
                </thead>
                <tbody>
                    <form method="POST" action="Usuario/updatep.php">
                        <?php foreach ($conexion -> query($datos) as $row) {?>
                            <tr>
                                <td><p><textarea class="form-control" id="exampleFormControlTextarea1" readonly="readonly" name="Documento" id="Documento" rows="1"><?php echo $row['Documento'] ?></textarea></p></td>
                                <td><p><textarea class="form-control" id="exampleFormControlTextarea1" name="Nombres" id="Nombres" rows="1"><?php echo $row['Nombres'] ?></textarea></p></td>
                                <td><p><textarea class="form-control" id="exampleFormControlTextarea1" name="Apellidos" id="Apellidos" rows="1"><?php echo $row['Apellidos'] ?></textarea></p></td>
                                <td><p><textarea class="form-control" id="exampleFormControlTextarea1" name="Celular" id="Celular" rows="1"><?php echo $row['Celular'] ?></textarea></p></td>
                                <td><p><textarea class="form-control" id="exampleFormControlTextarea1" name="Correo_Electronico" id="Correo_Electronico" rows="1"><?php echo $row['Correo_Electronico'] ?></textarea></p></td>
                                <td><p><textarea class="form-control" id="exampleFormControlTextarea1" name="Contrasena" id="Contrasena" rows="1"><?php echo $row['Contrasena'] ?></textarea></p></td>
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
</div>
    <script>
            $(window).on('load',function(){
        $(".loader").fadeOut(1000);
        $(".contento").fadeIn(1000);
    });
    </script>
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

.contento{
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