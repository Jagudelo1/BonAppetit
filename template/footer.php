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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Clicker+Script&family=Open+Sans&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
    <!--Despues de login-->
    <?php
        //En el if va la variable con la que identificas si estan logueados
        if($_SESSION['usuario'] == true){
    ?>
    <footer class="footer">
        <div class="container_footer">
            <div class="row_container">
                <div class="footer_col">
                    <h4>BonAppetit</h4>
                    <ul>
                        <li><a href="../view/index.php">Inicio</a></li>
                        <li><a href="#">Sobre nosotros</a></li>
                        <li><a href="#">Politica de Privacidad</a></li>
                    </ul>
                </div>
                <div class="footer_col">
                    <h4>Nuestros servicios</h4>
                    <ul>
                        <li><a href="../view/resena.php">Reseña</a></li>
                        <li><a href="../view/reservas.php">Reserva</a></li>
                        <li><a href="../view/platillos.php">Platillos</a></li>
                        <li><a href="../view/contactanos.php">Contactanos</a></li>
                    </ul>
                </div>
                <div class="footer_col">
                    <h4>Datos de contacto</h4>
                    <ul>
                        <li><a href="#">bonappetit@gmail.com</a></li>
                        <li><a href="#">032 53525</a></li>
                        <li><a href="#">Sede Centro Palmira</a></li>
                        <li><a href="#">Versalles</a></li>
                    </ul>
                </div>
                <div class="footer_col">
                    <h4>Siguenos</h4>
                    <div class="social_links">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="Copy">
        <p>CopyRigth &copy;2022 Bon Appetit</p>
    </div>
    <!--Antes de login-->
    <?php
        //Acción que se ejecutaria en caso de que no estes logueado
        }else{
    ?>
    <footer class="footer">
        <div class="container_footer">
            <div class="row_container">
                <div class="footer_col">
                    <h4>BonAppetit</h4>
                    <ul>
                        <li><a href="../index.php">Inicio</a></li>
                        <li><a href="#">Sobre nosotros</a></li>
                        <li><a href="#">Politica de Privacidad</a></li>
                    </ul>
                </div>
                <div class="footer_col">
                    <h4>Nuestros servicios</h4>
                    <ul>
                        <li><a href="../view/resena.php">Reseña</a></li>
                        <li><a href="../view/platillos.php">Platillos</a></li>
                        <li><a href="../view/contactanos.php">Contactanos</a></li>
                    </ul>
                </div>
                <div class="footer_col">
                    <h4>Datos de contacto</h4>
                    <ul>
                        <li><a href="#">bonappetit@gmail.com</a></li>
                        <li><a href="#">032 53525</a></li>
                        <li><a href="#">Sede Centro Palmira</a></li>
                        <li><a href="#">Versalles</a></li>
                    </ul>
                </div>
                <div class="footer_col">
                    <h4>Siguenos</h4>
                    <div class="social_links">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="Copy">
        <p>CopyRigth &copy;2022 Bon Appetit</p>
    </div>
    <?php
        }
    ?>

    <script src="https://kit.fontawesome.com/073e5c788d.js" crossorigin="anonymous"></script>
</body>
</html>

<style>
    .container_footer{
        max-width: 1170px;
        margin: auto;
    }

    .row_container{
        display: grid;
        grid-template-columns: auto auto auto auto;
    }

    .footer_col ul{
        list-style: none;
    }

    .footer{
        background-color: #fc5500;
        padding: 70px 0;
    }

    .footer_col{
        width: 100%;
        padding: 0 15px;
    }

    .footer_col h4{
        font-size: 18px;
        color: #fff;
        text-transform: capitalize;
        margin-bottom: 35px;
        font-weight: 500;
        position: relative;
    }

    .footer_col h4::before{
        content: '';
        position: absolute;
        left: 0;
        bottom: -10px;
        background-color: #FFE800;
        height: 2px;
        box-sizing: border-box;
        width: 70px;
    }

    .footer_col ul li:not(:last-child){
        margin-bottom: 10px;
    }

    .footer_col ul li a{
        font-size: 16px;
        text-transform: capitalize;
        text-decoration: none;
        display: block;
        color: #fff;
        transition: all 0.3s ease;
    }

    .footer_col ul li a:hover{
        color: #bbb;
        padding-left: 8px;
    }

    .footer_col .social_links a{
        display: inline-block;
        height: 40px;
        width: 40px;
        background-color: rgba(255, 255, 255, 0.2);
        margin: 0 10px 10px 0;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        color: #fff;
        transition: all 0.5s ease;
    }

    .footer_col .social_links i{
        margin-top: 10px;
    }

    .footer_col .social_links a:hover{
        background-color: #fff;
        color: #000;
    }

    .Copy{
        background-color: #EB7133;
        width: 100%;
        padding: 5px 0;
        text-align: center;
    }

    .Copy p{
        color: white;
        font-weight: 600;
        font-size: 18px;
        word-spacing: 2px;
        text-transform: capitalize;
        padding-top: 12px;
    }

    @media(max-width: 1020px){
        .row_container{
            display: grid;
            grid-template-columns: auto auto;
        }

        .footer_col{
            width: 70%;
            margin-bottom: 30px;
            margin: 0 auto;
        }
    }

    @media(max-width: 580px){
        .row_container{
            display: grid;
            grid-template-columns: auto;
            margin: 0 auto;
        }
    }
</style>