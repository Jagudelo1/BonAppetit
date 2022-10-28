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
    
    $reservas = "SELECT reservas.id_reserva, reservas.Nombre_Completo, reservas.Telefono, reservas.Fecha_Reserva, 
    reservas.Hora, reservas.Descripcion, reservas.Mesa, clientes.id_cliente, clientes.Usuario 
    FROM reservas INNER JOIN clientes ON clientes.Documento = reservas.Documento WHERE clientes.Usuario = '$_SESSION[usuario]'";
    
    $documento = ("SELECT Documento FROM clientes WHERE Usuario = '$_SESSION[usuario]'");
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
                            <th>Nombre Completo</th>
                            <th>Telefono</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Descripción</th>
                            <th>N° Mesa</th>
                            <th>Actualizar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $resultado = mysqli_query($conexion, $reservas);
                    while($row=mysqli_fetch_assoc($resultado)) {?>
                        <tr>
                            <th><?php echo $row ["Nombre_Completo"]?></th>
                            <th><?php echo $row ["Telefono"]?></th>
                            <th><?php echo $row ["Fecha_Reserva"]?></th>
                            <th><?php echo $row ["Hora"]?></th>
                            <th><?php echo $row ["Descripcion"]?></th>
                            <th><?php echo $row ["Mesa"]?></th>
                            <th>
                                <a href="updatereserva.php?id_reserva=<?php echo $row ["id_reserva"];?>" class="Acciones"><i class="fa-solid fa-pen-to-square"></i></a> 
                            </th>
                            <th>
                                <a href="Funciones/deleter.php?id_reserva=<?php echo $row['id_reserva']?>" class="Acciones"><i class="fa-solid fa-trash"></i></a>
                            </th>
                        </tr>
                    <?php }?>
                    </tbody>
                </table>
            </div>
            <!--Boton Modal Reservas-->
            <center>
                <div class="Modal">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        + Reservar
                    </button>
                </div>
            </center>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">            
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Reservar</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="enviar_reserva.php">
                            <?php $resultado = mysqli_query($conexion, $documento);
                            while($row=mysqli_fetch_assoc($resultado)) { ?>
                            <p>
                                <label for="">Documento</label>
                                <input type="number" name="Documento" readonly value="<?php echo $row["Documento"] ?>">
                            </p>
                            <?php } ?>
                            <p>
                                <label for="">Nombre Completo</label>
                                <input type="text" name="Nombre_Completo" require required onkeypress="return validar(event)">
                            </p>
                            <p>
                                <label for="">Telefono</label>
                                <input type="number" name="Telefono" require min="11">
                            </p>
                            <p>
                                <label for="">Fecha</label>
                                <input type="date" name="Fecha_Reserva" require min = "<?php $hoy=date("Y-m-d"); echo $hoy;?>">
                            </p>
                            <p>
                                <label for="">Hora</label>
                                <input type="time" name="Hora" require>
                            </p>
                            <p>
                                <label for="">Descripción</label>
                                <input type="text" name="Descripcion" require onkeypress="return validar(event)">
                            </p>
                            <p>
                                <label for="">Mesa</label>
                                <select name="Mesa" id="Mesa">
                                    <?php
                                        $sql = $conexion ->query("SELECT * FROM mesas");
                                        while($fila=$sql -> fetch_array()){
                                            echo "<option value='".$fila["id_mesa"]."'>".$fila['id_mesa']."</option>";
                                        }
                                    ?>
                                </select>
                            </p>
                            <p class="BotonReserva">
                                <button type="submit" class="BotonXD">Enviar Reserva</button>
                            </p>
                        </form>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>
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