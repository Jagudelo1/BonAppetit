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
    <title>Mi Perfil</title>
</head>
<body>
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
        <div class="ContainerInfo">
            <?php $resultado = mysqli_query($conexion, $usuario);
            while($row=mysqli_fetch_assoc($resultado)) { ?>
                <div class="Datos">
                    <div class="Usuario">
                        <h1>Bienvenido <span><?php echo $_SESSION['usuario']; ?></span></h1>
                        <p>Mis Datos</p><hr>
                    </div>

                    <div class="Info">
                        <div class="Foto">
                            <img src="data:image/png;base64,<?php echo base64_encode($row['Foto']); ?>">
                        </div>

                        <center>
                            <div class="DatosPersonales">
                                <table class="responsivegene">
                                    <thead>
                                        <tr>
                                            <th>Documento</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Correo Electronico</th>
                                            <th>Celular</th>
                                            <th>Contraseña</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-label="Documento"><?php echo $row["Documento"] ?></td>
                                            <td data-label="Nombre"><?php echo $row["Nombres"] ?></td>
                                            <td data-label="Apellido"><?php echo $row["Apellidos"] ?></td>
                                            <td data-label="Correo Electronico"><?php echo $row["Correo_Electronico"] ?></td>
                                            <td data-label="Celular"><?php echo $row["Celular"] ?></td>
                                            <td data-label="Contrasena"><?php echo $row["Contrasena"] ?></td>
                                            <td data-label="Actualizar">
                                                <button type="button" class="Update">
                                                    <a href="updateperfil.php">Actualizar</a>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </center>
                    </div>
                </div>
            <?php } ?>
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

/*Foto*/
.Foto img{
    display: block;
    margin: 0 auto;
    margin-top: 20px;
    margin-bottom: 20px;
    border-radius: 50%;
    width: 170px;
    height: 170px;
}

/*Contenedor de Textos principales*/
.Usuario h1{
    text-align: center;
    text-transform: uppercase;
    font-weight: 900;
    margin-top: 50px;
    font-family: 'Concert One', cursive;
    text-shadow: -1px -1px 0px black,
    3px 3px 0px white,
    6px 6px 0px black;
}

.Usuario h1 span{
    color: red;
}

.Usuario p{
    font-size: 30px;
    margin-left: 40px;
    font-weight: 700;
    font-family: 'Concert One', cursive;
}

hr{
    display: block;
    margin: 0 auto;
    width: 94%;
}

table.responsivegene {
    border: 1px solid #ccc;
    width: 50%;
    margin: 0;
    padding: 0;
    border-collapse: collapse;
    border-spacing: 0; 
}

table thead tr{
    background-color: #fc5500;
    color: #fff;
}

table tbody tr{
    background-color: #DADADA;
    font-weight: 600;
}

table.responsivegene tr {
    border: 1px solid #ddd;
    padding: 5px; 
}

table.responsivegene th, table td {
    padding: 10px;
    text-align: center;
}

table.responsivegene th {
    text-transform: uppercase;
    font-size: 14px;
    letter-spacing: 1px;
}

.Update{
    border: 0;
    background-color: #fc5500;
    color: #fff;
    padding: 8px;
    border-radius: 12px;
    font-weight: 600;
}

.Update:hover{
    background-color: #FF8547;
}

@media screen and (max-width: 600px) {
    table.responsivegene {
        border: 0;
        width: 80%;
    }

    table.responsivegene thead {
        display: none;
    }

    table.responsivegene tr {
        margin-bottom: 10px;
        display: block;
        border-bottom: 2px solid #ddd;
    }

    table.responsivegene td {
        display: block;
        text-align: right;
        font-size: 13px;
        border-bottom: 1px dotted #ccc;
    }

    table.responsivegene td:last-child {
        border-bottom: 0;
    }

    table.responsivegene td:before {
        content: attr(data-label);
        float: left;
        text-transform: uppercase;
        font-weight: bold;
    }
  }

/*Styles Modal Update*/
.DatosUser{
    text-align: left;
}

.colorPrim{
    border: 0 !important;
    background-color: #fc5500 !important;
}

</style>