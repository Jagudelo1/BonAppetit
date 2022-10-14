<?php
    // No mostrar los errores de PHP
    error_reporting(0);

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    include("../db/conexion.php");
    $platillos = "SELECT * FROM platillos WHERE Id_Platillo IN ('1','4','6','9','18','22')"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/ICONO.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Clicker+Script&family=Open+Sans&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/073e5c788d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--Animation Script-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Bon Appetit - Inicio</title>
</head>
<body>

<div class="loader">
    <div></div>
</div>

<div class="content">
<!--Navbar-->
<?php include("template/navbar.php"); ?>

<!--Slider-->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="img/Restaurant1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block texth5">
            <h5 class="text1">Te ofrecemos una experiencia gastronómica con el sabor único de la cocina.</h5>
        </div>
    </div>
    <div class="carousel-item">
        <img src="img/Restaurant2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block texth5">
            <h5 class="text2">Comparte momentos agradables con tus amigos.</h5>
        </div>
    </div>
    <div class="carousel-item">
        <img src="img/Restaurant3.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block texth5">
            <h5 class="text3">Deleitate con nuestras variedades.</h5>
        </div>
    </div>
    <div class="carousel-item">
        <img src="img/Restaurant4.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block texth5">
            <h5 class="text4">Disfruta de nuestros deliciosos platillos.</h5>
        </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </button>
</div>

<!--Platilllos-->
<div class="Cantainerinfo">
    <h2>En nuestros platillos hay mucho amor</h2>
</div>

<!--Tarjetas-->
<div class="ContainerCards">
    <?php $resultado = mysqli_query($conexion, $platillos);
    while($row=mysqli_fetch_assoc($resultado)) { ?>
    <div class="card" style="width: 23rem;">
        <div class="ImgCard">
            <img src="data:image/jpg/png/jpeg;base64,<?php echo base64_encode($row['Foto_Platillo']); ?>">
        </div>
        <div class="card-body">
            <p class="card-text">
                <?php echo $row["Nombre_Platillo"] ?>
            </p>
            <p class="text_card">
                $<?php echo $row["Precio_Platillo"] ?>
            </p>
        </div>
    </div>
    <?php } ?>
</div>
<button class="buttonV">
    <a href="view/platillos.php">Ver más</a>
</button>

    <!--Footer-->
    <?php include("template/footer.php"); ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="../loader.min.js"></script>
</body>
</html>

<style>
@import url('https://fonts.googleapis.com/css2?family=Concert+One&display=swap');

body{
    overflow-x: hidden;
    background-image: url(img/Fondo.png);
}

*{
    margin: 0;
}

/*Estilos de slider*/
.texth5 .text1{
    padding-bottom: 3%;
}

.texth5 .text2, .text4{
    padding-bottom: 68%;
}

.texth5 h5{
    color: white;
    font-weight: 700;
}

/*Estilos de slider*/

.texth5 .text1{
    padding-bottom: 3%;
}

.texth5 .text2, .text4{
    padding-bottom: 68%;
}

.texth5 h5{
    color: white;
    font-weight: 700;
}

/*Texto informativo*/
.Cantainerinfo{
    background-color: #FF955F;
    padding: 2.5rem;
}

.Cantainerinfo h2{
    text-align: center;
    text-transform: uppercase;
    color: #FF0000;
    font-family: 'Concert One', cursive;
    font-weight: 900;
    font-size: 120px;
    text-shadow: -1px -1px 0px red,
    3px 3px 0px white,
    6px 6px 0px red;
}

@media (max-width: 685px){
    .Cantainerinfo h2{
        text-align: center;
        font-size: 50px;
    }

    .ContainerCards button{
        padding: 12px;
        font-size: 18px;
    }
}

/*Cards*/
.ContainerCards{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
}

.ContainerCards .card{
    margin: 0 auto;
    border-radius: 18px;
    background-color: #D0D0D0;
    margin-bottom: 30px;
    margin-top: 60px;
}

.ContainerCards .ImgCard{
    background-color: #fc5500;
    display: block;
    margin: 0 auto;
    width: 100%;
    border-radius: 18px 18px 0 0;
    padding: 10px;
}

.ContainerCards .card img{
    height: 200px;
    width: 210px;
    border-radius: 50%;
    border: 7px solid #fff;
    display: block;
    margin: 0 auto;
}

.card .card-text{
    text-align: center;
    text-transform: uppercase;
    font-weight: 900;
    font-family: 'Concert One', cursive;
    font-size: 25px;

    color: #fff;
    text-shadow:
    3px 3px 0px #000,
    6px 6px 0px #000;
}

.card .text_card{
    display: block;
    margin: 0 auto;
    background-color: #fc5500;
    width: 30%;
    padding: 8px;
    border-radius: 12px;
    text-align: center;
    font-weight: 700;
    color: #fff;
}

.buttonV{
    background-color: #E41A06;
    display: block;
    margin: 0 auto;
    border: 0;
    padding: 15px;
    font-size: 20px;
    border-radius: 18px;
    margin-bottom: 50px;
    box-shadow: 0px 0px 7px 3px #1F1B1B;
    font-weight: 600;
}

.buttonV:hover{
    background-color: #CF1200;
    color: white;
    transition-duration: 2s;
    box-shadow: 0px 0px 7px 3px #989898;
}

.buttonV a{
    text-decoration: none;
    color: #fff;
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
</style>