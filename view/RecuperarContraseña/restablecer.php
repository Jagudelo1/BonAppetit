<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Restablecer mi Contraseña</title>
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid ml-auto">
            <a class="navbar-brand titulo" href="#">Bonappetit</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse navcolor" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="platillos.php">Platillos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="resena.php">Reseña</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactanos.php">Contactanos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Recuperar Contraseña-->
    <div class="container">
        <form action="RecuperarContraseña/restablecer_contraseña.php" method="POST">
            <h2>Restablecer Contraseña</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                <input type="email" name="Correo_Electronico" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <center>
                <button type="submit" class="btn btn-primary ButtonB">Restablecer</button>
            </center>
        </form>
    </div>

    <?php include("../template/footer.php") ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

<style>
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@200;400;600&display=swap');

body{
    background-image: linear-gradient(rgba(5, 10, 5, 0.80), rgba(254, 229, 204, 0.8)), url(img/Fondo.jpg);
    background-size: cover;
    background-position: center center;
    overflow-x: hidden;
}

:root{
        --primary-color: #fc5500 !important;
    }

/*Navbar*/
.navbar{
    background-color: var(--primary-color);
    box-shadow: 4px 4px 7px #C71414 !important;
}

.titulo{
    font-size: 30px;
    font-weight: 900;
    text-transform: uppercase;
}

.nav-item a{
    font-size: 15px;
    color: white;
    font-weight: 900;
}

/*Estilos contenedor recuperar contraseña*/
.container{
    display: block;
    margin: 0 auto;
    width: 30%;
    background-color: var(--primary-color);
    border-radius: 18px;
    margin-bottom: 20px;
    margin-top: 20px;
    padding: 20px;
}

.container form h2{
    text-align: center;
    text-transform: uppercase;
    color: #fff;
    font-family: 'Concert One', cursive;
    font-weight: 800;
    margin-bottom: 40px;
}

.container form label{
    color: #fff;
}

.ButtonB{
    background-color: #FF884C;
    border: 0;
    margin-top: 30px;
}

.ButtonB:hover{
    background-color: #DF4B00;
}
</style>