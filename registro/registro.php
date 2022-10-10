<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="view/template/img/ICONO.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/073e5c788d.js" crossorigin="anonymous"></script>
        <!-- MATERIAL CDN -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <!-- STYLESHEET -->
    <link rel="stylesheet" a href="../registro/styler.css">
    <title>Bon Appetit</title>
</head>
<body>
<!--nav-->
<nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fa-solid fa-bars"></i>
        </label>
        <a href="../index.php" class="enlace">
            <h2>Bon Appètit</h2>
            <img src="imgr/icon.png" alt="" class="logo">
        </a>
        <ul>
            <li><a class="active" href="../clientes/clientes.php">Atrás</a></li>
            <li><a href="platillos.php">Eliminar</a></li>
            <li><a href="reservas.php">Añadir</a></li>
        </ul>
</nav>  

<div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Buen día, <b>Administrador</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                       <img src="./imgr/user.png">
                    </div>
                </div>
            </div>


    <!--registro-->
    <div class="Login_Contenedor">

        <img class="Imagen_Contenedor" src="imgr/restaurantes-para-diabeticos.jpg" alt="">
        <div class="Login_Info"><br><br>
            <h1 class="titulo">Registrarse</h1><br><br>
        
            <form class="Inputs_Contenedor" method="post" action="registro1.php">
                <input class="input" type="number" placeholder="Número de identificación" name="Documento" required>
                <input class="input" type="name" placeholder="Nombre"  required pattern="[A-Za-z]+" title="Error, Solo se permiten caráteres tipo texto Ej:A-Z a-z" name="Nombres">
                <input class="input" type="name" placeholder="Apellido" required pattern="[A-Za-z]+" title="Error, Solo se permiten caráteres tipo texto Ej:A-Z a-z"  name="Apellidos">
                <input class="input" type="number" placeholder="Celular"  required name="Celular">
                <input class="input" type="date" placeholder="Fecha Nacimiento"  required name="Fecha">
                <input class="input" type="text" placeholder="Usuario"  required name="Usuario">
                <div class="campo">
                    <input class="inputc" type="password" id="password" placeholder="Contraseña"  minlength="8" pattern="[A-Za-z0-9]+" title="Error, Es necesario hacer uso de Mayus, Minus y Números" required name="Contrasena"> 
                    <span><i class="fa-solid fa-eye"></i></span>
                </div>
            <br>

                <button type="submit" class="btn" name="register" value="register">Registrarse</button> <br>
                <span class="bobis">¿Ya tienes una cuenta? <a class="bobis2" href="login.php">Click aquí</a></span>

            </form>
        </div>
    
    </div>
    </div>

    <!--footer-->
    <footer class="Contenedor_Footer">
            <div class="Contenedor">
                <h2 class="titulo2">Bon Appétit</h2>
                <p class="parrafo">Bienvenido a Bon Appétit, donde ofrecemos
                    una experiencia gastronomica unica con el mejor sabor de la cocina.
                </p>
                <ul class="Redes">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
            <div class="Copy">
                <p>Copyright &copy;2022 Bon Appétit</p>
            </div>
</footer>

<script src="../registro/registro.js"></script>
<script src="../registro/color.js"></script>

</body>
</html>
