<?php
    // No mostrar los errores de PHP


    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    $sesion = $_SESSION['usuario'];
        if($sesion == null || $sesion = ''){
        echo 'Usted no tiene autorización';
        header('Location: login.php');
        die();
    }

    include("conexion.php");
    
    $datos = "SELECT * FROM reservas INNER JOIN clientes ON 
    clientes.Documento = reservas.Documento WHERE clientes.Usuario
    = '$_SESSION[usuario]'";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/ICONO.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Bon Appetit - Reserva</title>
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
    <div class="ContenedorReser">
        <h1 class="titulod">Mis <span>Reservas</span></h1>
        <div class="VerResr">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="display: none">N° Reserva</th>
                            <th>Nombre Completo</th>
                            <th>Telefono</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Descripción</th>
                            <th>N° Mesa</th>
                        </tr>
                    </thead>
                    <tbody>
                    <form method="POST" action="Funciones/updater.php">
                        <?php foreach ($conexion -> query($datos) as $row) {?>
                            <tr>
                                <td style="display: none"><p><input type="number" value="<?php echo $row['id_reserva'] ?>" class="form-control Reserva" id="exampleFormControlTextarea1" name="id_reserva" id="id_reserva"></input></p></td>
                                <td><p><input type="text" value="<?php echo $row['Nombre_Completo'] ?>" class="form-control" id="exampleFormControlTextarea1" name="Nombre_Completo" id="Nombre_Completo"></input></p></td>
                                <td><p><input type="number" value="<?php echo $row['Telefono'] ?>" class="form-control" id="exampleFormControlTextarea1" name="Telefono" id="Telefono"></input></p></td>
                                <td><p><input type="date" value="<?php echo $row['Fecha'] ?>" class="form-control" id="exampleFormControlTextarea1" name="Fecha" id="Fecha"></input></p></td>
                                <td><p><input type="time" value="<?php echo $row['Hora'] ?>" class="form-control" id="exampleFormControlTextarea1" name="Hora" id="Hora"></input></p></td>
                                <td><p><input type="text" value="<?php echo $row['Descripcion'] ?>" class="form-control" id="exampleFormControlTextarea1" name="Descripcion" id="Descripcion"></input></p></td>
                                <td><p>
                                    <select class="form-control" id="exampleFormControlTextarea1" name="Mesa" id="Mesa">
                                        <option><?php echo $row['Mesa'] ?></option>
                                        <?php
                                            $sql = $conexion ->query("SELECT * FROM mesas");
                                            while($fila=$sql -> fetch_array()){
                                                echo "<option value='".$fila["id_mesa"]."'>".$fila['id_mesa']."</option>";
                                            }
                                        ?>
                                    </select>
                                </p></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <center>
                    <div class="Modal">
                        <button type="submit">
                            Actualizar
                        </button>
                    </div>
                </center>
            </form>
            </div>
        </div>
    </div>
</div>

<?php include("../template/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

<style>

*{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
}

body{
    background-image: linear-gradient(rgba(5, 10, 5, 0.80), rgba(254, 229, 204, 0.8)), url(img/Fondo.png);
    background-size: cover;
    background-position: center center;
    font-family: 'Raleway', sans-serif;
    overflow-x: hidden;
}

input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none; 
    margin: 0; 
}

input[type=number] { 
    -moz-appearance:textfield; 
}

/*Estilos Reservas*/
.ContenedorReser{
    width: 65%;
    color: #fff;
    padding: 1.5em;
    border-radius: 18px;
    background-color: #fc5500;
    margin: 35px auto 35px auto;
}

.titulod{
    font-size: 3em;
    font-weight: 800;
    text-align: center;
    margin-bottom: 25px;
}

.titulod span{
    color: #b70e21;
}

/*Estilos Tabla*/
.table{
    color: #fff;
    text-align: center;
}

.table thead{
    background-color: #FF7B3D;
    color: #fff;
}

.table tbody{
    background-color: #FF641B;
    color: #000;
    font-weight: none;
}

@media (max-width: 800px){
    .ContenedorReser{
        width: 100%;
    }
}

.Acciones{
    color: #000
}

.Acciones:hover{
    color: #fff;
}

/*Estilos Modal y Formulario*/
.Modal{
    display: block;
    margin: 0 auto;
}

.Modal button{
    border: 0;
    color: #fff;
    padding: 10px;
    font-weight: 700;
    border-radius: 12px;
    background-color: #FF8445;
}

.Modal button:hover{
    background-color: #FF6212;
}

/*Estilos Formulario*/
.modal-header h1{
    color: #000;
    font-weight: 800;
    text-transform: uppercase;
}

.modal-body form{
    display: grid;
    grid-template-columns: auto auto;
}

.modal-body form p{
    margin: 0;
    padding: .5em;
}

.modal-body form select{
    margin-top: 5px;
}

.modal-body form input,
.modal-body form select{
    width: 100%;
    padding: .2em;
    border: none;
    background: none;
    outline: 0;
    border-bottom: 1px solid #000;
    cursor: pointer;
}

.modal-body form label{
    color: #000;
    margin-top: 10px;
}

.BotonReserva{
    grid-column: 1 / 3;
}

.BotonReserva button{
    display: block;
    margin: 0 auto;
    border: 0;
    padding: 8px;
    border-radius: 12px;
    background-color: #FF8445;
    color: #fff;
    font-weight: 700;
}

.BotonReserva button:hover{
    background-color: #FF6212;
}

@media (max-width: 435px){
    .modal-body form div{
        grid-column: 1 / 3;
    }
}
</style>

<script type="text/javascript">
    function validar(e) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla==8) return true; // 3
    patron =/[A-Za-z\s]/; // 4
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
    }
</script>
<script type="text/javascript">
    function numeros(nu) { // 1
    tecla = (document.all) ? e.keyCode : e.which; // 2
    if (tecla==8) return true; // 3
    ppatron = /\d/; // Solo acepta números// 4
    te = String.fromCharCode(tecla); // 5
    return patron.test(te); // 6
    }
</script>
<script>
    $(function() {
    $('input[type=number]').keypress(function(key) {
        if(key.charCode < 48 || key.charCode > 57) return false;
    });
});
</script>