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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/073e5c788d.js" crossorigin="anonymous"></script>
            <!--Animation Script-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Bon Appetit - Contactanos</title>
</head>
<body>

<div class="loader">
    <div></div>
</div>

<div class="content">
<!--Navbar-->
<?php include("template/navbar.php") ?>
<br><br><br><br>
    <div class="Contenedor">
        <h1 class="tituloC">Contacta Con <span>Nosotros</span></h1><br>

        <div class="Reserva">
            <div class="form">
                <h3>Contactanos</h3>
                <form method="Post" action="contactanos1.php">
                    <p>
                        <label for="Nombre">Nombre</label>
                        <input type="text" name="Nombre" id="Nombre" onkeypress="return validar(event)">
                    </p>
                    <p>
                        <label for="Apellido">Apellido</label>
                        <input type="text" name="Apellido" id="Nombre" onkeypress="return validar(event)">
                    </p>
                    <p>
                        <label>Email</label>
                        <input type="email" name="Correo">
                    </p>
                    <p>
                        <label>Telefono</label>
                        <input type="number" name="Telefono">
                    </p>
                    <p class="block">
                        <label>Mensaje</label>
                        <input type="text" name="Mensaje" id="Descripción"></input>
                    </p>
                    <p class="block">
                        <button type="submit">
                            Enviar
                        </button>
                    </p>
                </form>
            </div>

            <div class="informacion">
                <h4>Mas Informacion</h4>
                <ul>
                    <li><i class="fa-solid fa-location-dot"></i> Kra 32a 15-12</li>
                    <li><i class="fa-solid fa-phone"></i> 12345 67890</li>
                    <li><i class="fa-solid fa-envelope-open-text"></i> bonappetit@gmail.com</li>
                </ul>
            </div>
        </div>
    </div><br><br><br><br><br><br>

    <?php include("template/footer.php"); ?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="../loader.min.js"></script>
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
    font-family: 'Raleway', sans-serif;
    background-image: linear-gradient(rgba(5, 10, 5, 0.80), rgba(254, 229, 204, 0.8)), url(img/Fondo.png);
    background-size: cover;
    background-position: center center;
    overflow-x: hidden;
}

input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none; 
    margin: 0; 
}

/*ESTILOS RESERVA*/
.Contenedor{
    max-width: 900px;
    margin-left: auto;
    margin-right: auto;
    padding: 1.5em;
    background-color: #fc5500;
    color: #fff;
    margin-top: 30px;
    border-radius: 18px;
}

.tituloC{
   text-align: center;
   font-size: 3em;
}

.tituloC span{
    color: #000;
    font-weight: 900;
}

.Reserva{
    box-shadow: 0 0 20px 0 rgba(240, 95, 17, 0.748);
}

.Reserva > *{
    padding: 1em;
}

.form{
    background: #ff6d2a;
    border-bottom-left-radius: 18px;
    border-top-left-radius: 18px;
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

.form form button,
.form form input,
.form form textarea{
    width: 100%;
    padding: .2em;
    border: none;
    background: none;
    outline: 0;
    color: #fff;
    border-bottom: 1px solid #e15a00;
}

.form form button{
    background: #fc5500;
    color: #000;
    border: 0;
    text-transform: uppercase;
    padding: 1em;
    border-radius: 10px;
}

.form form button:hover,
.form form button:focus{
    background: #e45b00;
    color: #fff;
    transition: background-color 1s ease-out;
    outline: 0;
}

.informacion{
    background: #ff6d22;
    border-bottom-right-radius: 18px;
    border-top-right-radius: 18px;
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

.content{
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