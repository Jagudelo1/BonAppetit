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
    <link rel="shortcut icon" href="img/ICONO.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/073e5c788d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Bon Appetit - Reserva</title>
</head>
<body>
<!--Navbar-->
<?php include("../template/navbar.php") ?>

    <div class="ContenedorReser">
        <h1 class="titulod">Reserva <span>Aqui</span></h1><br>

        <div class="Reserva">
            <div class="form">
                <h3>Reservar</h3>
                <form class="Inputs_Contenedor" method="Post" action="enviar_reserva.php">
                    <p>
                        <label for="Nombre_Completo">Nombre Completo</label>
                        <input type="text" name="Nombre_Completo" required onkeypress="return validar(event)">
                    </p>
                    <p>
                        <label>Telefono</label>
                        <input type="number" name="Telefono" required>
                    </p>
                    <p>
                        <label>Fecha</label>
                        <input type="date" name="Fecha" required min = "<?php $hoy=date("Y-m-d"); echo $hoy;?>">
                    </p>
                    <p>
                        <label>Hora</label>
                        <input type="time" name="Hora" required>
                    </p>
                    <p class="moti">
                        <label>Motivo</label>
                        <input type="text" name="Descripcion" required onkeypress="return validar(event)">
                    </p>
                    
                    <p>
                        <label>Mesa</label>
                        <input type="number" name="Mesa" required id="textInput" value=""/>
                        <input type="range" name="rangeInput" min="1" max="8" onchange="updateTextInput(this.value);" />
                    </p>
                

                    <p class="block">
                        <button type="submit">
                            Enviar Reservación
                        </button>
                    </p>
                </form>
            </div>

            <div class="informacion">
                <h2>Otros medios de reserva</h2>
                <ul>
                    <li><i class="fas fa-phone"> 123456789</i></li>
                    <li><i class="fas fa-envelope-open-text"> BonAppetit@gmail.com</i></li>
                </ul>
                <p>Bievenido a Bon Appètit, donde ofrecemos una experiencia gastronómica única con
                    el sabor unico de la cocina Colombiana, nuestras delicias enfocadas en Postres,
                    Banquetes y mucho mása tu gusto.
                </p>
            </div>
        </div>
    </div><br><br>

    <?php include("../template/footer.php"); ?>
    <script>
        function updateTextInput(val) {
          document.getElementById('textInput').value=val; 
        }
    </script>
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
    background-image: linear-gradient(rgba(5, 10, 5, 0.80), rgba(254, 229, 204, 0.8)), url(img/Fondo.jpg);
    background-size: cover;
    background-position: center center;
    font-family: 'Raleway', sans-serif;
    overflow-x: hidden;
}

/*ESTILOS RESERVA*/
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none; 
    margin: 0; 
}

input[type=number] { -moz-appearance:textfield; }

.ContenedorReser{
    max-width: 1170px;
    margin-left: auto;
    margin-right: auto;
    padding: 1.5em;
    background-color: #fc5500;
    color: #fff;
    margin-top: 35px;
}

.titulod{
   text-align: center;
   font-size: 3em;
   font-weight: 800;
}

.titulod span{
    font-weight: 800;
    color: #b70e21;
}

.form h3{
    font-weight: 700;
}

.Reserva{
    box-shadow: 0 0 20px 0 rgba(240, 95, 17, 0.748);
}

.Reserva > *{
    padding: 1em;
}

.form{
    background: #ff6d2a;
}

.form form{
    display: grid;
    grid-template-columns: 1fr 1fr;
}

.form form .block{
    grid-column: 1/3;
}

.form form p{
    margin: 0;
    padding: 1em;
}

.form form .Opciones{
    margin-top: 5px;
}

.form form button,
.form form .Opciones,
.form form input,
.form form textarea{
    width: 100%;
    padding: .2em;
    border: none;
    background: none;
    outline: 0;
    border-bottom: 1px solid #e15a00;
    cursor: pointer;
}

.form form button{
    background: #fc5500;
    color: #fff;
    border: 0;
    text-transform: uppercase;
    padding: 1em;
    border-radius: 10px;
    font-weight: 600;
}

.form form button:hover,
.form form button:focus{
    background: #e45b00;
    color: #000;
    transition: background-color 1s ease-out;
    outline: 0;
}

.informacion{
    background: #ff6d20;
}

.informacion h2,
.informacion ul,
.informacion p{
    text-align: center;
    margin: 0 0 1rem;
}

.informacion ul li{
    padding: 1em;
}


.informacion img{
    width: 25%;
    display: block;
    margin: auto;
}

.wrap{
    grid-column: 1 / 3;
}

.radio{
    display: grid;
    grid-template-columns: auto auto auto auto;
    margin-left: 50px;
}

.formulario h2 {
    margin-top: 15px;
    font-size: 16px;
    font-weight: 800;
    color: #fff;
    margin-bottom: 10px;
    margin-left: 20px;
    text-transform: uppercase;
}

.formulario .radio label{
    background-color: #fc5500;
    display: inline-block;
    cursor: pointer;
    color: #fff;
    position: relative;
    padding: 12px;
    margin-top: 15px;
    margin-bottom: 15px;
    font-size: 1em;
    border-radius: 12px;
    font-weight: 700;
    -webkit-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease; 
}

.formulario input[type="radio"] {
    display: none; 
}

.formulario input[type="radio"]:checked + label:before {
    display: none; 
}

.formulario input[type="radio"]:checked + label {
    padding: 15px 15px;
    background: #e45b10;
    border-radius: 12px;
    color: #fff; 
}

.formulario .checkbox label:before {
    border-radius: 3px; 
}


@media (min-width: 700px){

    .Reserva{
        display: grid;
        grid-template-columns: 2fr 1fr;
    }

    .Reserva > *{
        padding: 2em;
    }

    .informacion h2,
    .informacion ul,
    .informacion p{
        padding: 0.5em;
        text-align: left;
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