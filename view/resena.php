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
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/ICONO.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/073e5c788d.js" crossorigin="anonymous"></script>
    <title>Bon Appetit - Reseña</title>
</head>
<body>
<!--Navbar-->
<?php include("../template/navbar.php") ?>

<div class="Contenedor">
        <h1 class="tituloC">Envia tu <span>Reseña</span></h1><br>

        <div class="Reserva">
            <div class="form">
                <h3>Danos tu opinion</h3>
                <form method="Post" action="enviar_resena.php">
                    <p class="nombre">
                        <label for="Nombre_Completo">Nombre</label>
                        <input type="text" name="Nombre_Completo" id="Nombre" onkeypress="return validar(event)">
                    </p>
                    <p class="correo">
                        <label>Correo</label>
                        <input type="email" name="Correo">
                    </p>
                    <p class="comentariosxd">
                        <label>Comentarios</label>
                        <textarea name="Descripcion" id="Descripción" rows="3"></textarea>
                    </p>
                    <div class="rating">
                        <p class="clasificacion">
                            <input id="radio1" type="radio" name="estrellas" value="1"><!--
                            --><label for="radio1">★</label><!--
                            --><input id="radio2" type="radio" name="estrellas" value="2"><!--
                            --><label for="radio2">★</label><!--
                            --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                            --><label for="radio3">★</label><!--
                            --><input id="radio4" type="radio" name="estrellas" value="4"><!--
                            --><label for="radio4">★</label><!--
                            --><input id="radio5" type="radio" name="estrellas" value="5"><!--
                            --><label for="radio5">★</label>
                        </p>     
                    </div>
                    <p class="block">
                        <button type="submit" name="submit">
                            Enviar Reseña
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
    </div>

    <!--Footer-->
    <?php include("../template/footer.php") ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    *{
        padding: 0;
        margin: 0;
        text-decoration: none;
        list-style: none;
        box-sizing: border-box;
        font-family: sans-serif;
    }

    body{
        background-image: linear-gradient(rgba(5, 10, 5, 0.80), rgba(254, 229, 204, 0.8)), url(img/Fondo.jpg);
        background-size: cover;
        background-position: center center;
        overflow-x: hidden;
    }

    /*Reseña*/
    .Contenedor{
        max-width: 1170px;
        margin-left: auto;
        margin-right: auto;
        padding: 1.5em;
        background-color: #fc5500;
        color: #fff;
        margin-top: 60px;
        margin-bottom: 60px;
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
    
    .form form .comentariosxd{
        grid-column: 1;
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
        color: #fff;
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

    /*Cuando el tamaño sea maximo de 840 bajar las estrellas y que los comentarios ocupen todo el espacio*/
    @media (max-width: 840px){
        .form form .comentariosxd{
            grid-column: 1/3;
        }

        .form form .rating{
            grid-column: 1 / 3;
            margin: 0 auto;
        }

        .form{
            border-bottom-left-radius: 0;
            border-top-right-radius: 18px;
            border-top-left-radius: 18px;
        }
        
        .informacion{
            border-bottom-right-radius: 18px;
            border-bottom-left-radius: 18px;
            border-top-right-radius: 0;
        }
    }

    /*Cuando la pantalla sea mas pequeña el formulario base a una sesion por cada input*/
    @media (max-width: 500px){
        .form form .nombre, .correo{
            grid-column: 1 / 3;
        }
    }

    /*ESTRELLAS*/
    .rating{
        padding-top: 40px;
    }

    .rating p {
        margin-top: 20px;
        text-align: left;
    }

    .rating label {
        font-size: 40px;
        margin-left: 5px;
        transition: .5s ease;
        text-shadow: 0 2px 5px black;
    }

    .rating input[type="radio"] {
        display: none;
    }

    .rating label {
        color: black;
    }

    .clasificacion {
        direction: rtl;
        unicode-bidi: bidi-override;
    }

    .rating label:hover,
    .rating label:hover ~ label {
        color: yellow;
        text-shadow: 0 2px 5px yellow;
    }

    .rating input[type="radio"]:checked ~ label {
        color: yellow;
        text-shadow: 0 2px 5px yellow;
    }

    .informacion{
        background-color: #FF6314;
        border-bottom-right-radius: 18px;
        border-top-right-radius: 18px;
    }

    .informacion h5{
        text-align: center;
        font-weight: 800;
        text-transform: uppercase;
        margin-top: 20px;
        color: white;
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