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
                <form method="Post" action="enviar_reserva.php">
                    <p>
                        <label for="Nombre">Nombre Completo</label>
                        <input type="text" name="Nombre_Completo" id="Nombre" onkeypress="return validar(event)">
                    </p>
                    <p>
                        <label for="Telefono">Telefono</label>
                        <input type="text" name="Celular" id="Nombre" onkeypress="return validar(event)">
                    </p>
                    <p>
                        <label>Fecha</label>
                        <input type="date" name="Fecha">
                    </p>
                    <p>
                        <label>Hora</label>
                        <input type="time" name="Hora">
                    </p>
                    <p>
                        <label>Mensaje</label>
                        <input type="text" name="Descripcion" id="Descripción"></input>
                    </p>
                    <p>
                        <label>Elije la Mesa</label>
                        <select class="Opciones">
                            <option>1 Mesa - 4 personas</option>
                            <option>2 Mesa - 6 personas</option>
                            <option>3 Mesa - 2 personas</option>
                            <option>4 Mesa - 4 personas</option>
                            <option>5 Mesa - 5 personas</option>
                            <option>6 Mesa - 6 personas</option>
                            <option>7 Mesa - 2 personas</option>
                            <option>8 Mesa - 5 personas</option>
                        </select>
                    </p>

                    <p class="block">
                        <button type="submit">
                            Enviar
                        </button>
                    </p>
                </form>
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

input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none; 
    margin: 0; 
}

/*Estilos Contenedor Principal*/
.ContenedorReser{
    display: block;
    margin: 0 auto;
    width: 65%;
    margin-top: 40px;
    margin-bottom: 40px;
    background-color: #ff6d2a;
    padding: 30px;
    
    border-radius: 18px;
    box-shadow: 10px 0 10px 0 black;
}

/*Estilos para el titulo principal de reservas*/
.ContenedorReser .titulod{
    text-align: center;
    text-transform: uppercase;
    font-weight: 900;
    color: #fff;
}

.ContenedorReser .titulod span{
    color: red;
}

/*Estilos del formulario*/
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

.form form label{
    color: #fff;
}

.form form button,
.form form input,
.form form textarea,
.form form select{
    width: 100%;
    padding: .2em;
    border: none;
    color: #fff;
    background: none;
    outline: 0;
    border-bottom: 1px solid #e15a00;
}

.form form select option{
    color: #000;
    border: 0;
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

@media (max-width: 768px){
    .form form{
        grid-column: auto;
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