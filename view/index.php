<?php
    // No mostrar los errores de PHP
    error_reporting(0);

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    include("conexion.php");
    $platillos = "SELECT * FROM platillos WHERE id_platillo = '1'";
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
    <title>Bon Appetit - Inicio</title>
</head>
<body>
<!--Navbar-->
<?php include("../template/navbar.php"); ?>

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
      <h2>Deleitate con nuestros mejores platillos</h2>
      <button>Ver más</button>
  </div>
<!--Titulo-->
  <h1 class="text_title">Conoce nuestras variedades de platillos</h3>

<!--Tarjetas-->
  <div class="ContainerCards">
    <?php $resultado = mysqli_query($conexion, $platillos);
    while($row=mysqli_fetch_assoc($resultado)) { ?>
      <div class="card" style="width: 18rem;">
        <img src="data:image/jpg/png/jpeg;base64,<?php echo base64_encode($row['Foto_Platillo']); ?>">
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

    <!--Footer-->
    <?php include("../template/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
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

.Cantainerinfo button{
    background-color: #E41A06;
    display: block;
    margin: 0 auto;
    border: 0;
    padding: 15px;
    font-size: 20px;
    border-radius: 18px;
    margin-top: 50px;
    box-shadow: 0px 0px 7px 3px #1F1B1B;
    font-weight: 600;
}

.Cantainerinfo button:hover{
    background-color: #CF1200;
    color: white;
    transition-duration: 2s;
    box-shadow: 0px 0px 7px 3px #989898;
}

/*Platillos*/
.text_title{
  margin-top: 50px;
  text-align: center;
  text-transform: uppercase;
  color: #FF0000;
  font-family: 'Concert One', cursive;
  font-weight: 900;
  font-size: 50px;
  color: #FF955F;
  text-shadow:
  3px 3px 0px white,
  6px 6px 0px #1F1B1B;
}

@media (max-width: 685px){
    .Cantainerinfo h2{
        text-align: center;
        font-size: 50px;
    }

    .Cantainerinfo button{
        padding: 12px;
        font-size: 18px;
    }
}

/*Estilos de las Cards*/
.ContainerCards{
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  margin-top: 40px;
  margin-bottom: 40px;
}

.card{
  margin: 0 auto;
  margin-top: 40px;
  border-radius: 18px;
}

.card img{
  height: 180px;
  object-fit: cover;
  border-radius: 18px;
}

.card .card-text{
  text-align: center;
  text-transform: uppercase;
  font-weight: 700;
}

.card .text_card{
  position: absolute;
  right: 0;
  top: 0;
  background: red;
  color: white;
  padding: 0.4em;
  font-size: 12px;
  font-weight: bold;
  border-radius: 0 6px 0 6px;
}
</style>