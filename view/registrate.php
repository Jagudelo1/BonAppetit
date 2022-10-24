<? 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="img/ICONO.png">
</head>
<!-- ===== Iconscout CSS ===== -->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/073e5c788d.js" crossorigin="anonymous"></script>
<title>Bon Appetit - Registrate</title>

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

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid ml-auto">
        <a class="navbar-brand titulo" href="#">Bonappetit</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
        aria-label="Toggle navigation">
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

<div class="Login_Contenedor">
    <h1 class="tituloR">Registrarse</h1><br>
    <form class="Inputs_Contenedor" method="post" action="validar_registro.php">
        <div>
            <label>Documento de Identidad<span style='color: white;'>*</span></label>
            <input minlength="8" class="input" type="number" name="Documento" required>
            <?php
                if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
                {
                    echo "<div style='text-align: center; font-weight: 700; float: left;'>
                    El documento ya se encuentra registrado</div>";
                }
            ?>
        </div>
        <div>
            <label>Nombre<span style='color: white;'>*</span></label>
            <input class="input" type="name" required name="Nombres" onkeypress="return validar(event)">
        </div>
        <div>
            <label>Apellido<span style='color: white;'>*</span></label>
            <input class="input" type="name" required  name="Apellidos" onkeypress="return validar(event)">
        </div>
        <div>
            <label>Correo<span style='color: white;'>*</span></label>
            <input class="input" type="email" required  name="Correo_Electronico">
        </div>
        <div>
            <label>Telefono/Celular<span style='color: white;'>*</span></label>
            <input class="input" type="number" required name="Celular">
        </div>
        <div>
            <label>Fecha de Nacimiento<span style='color: white;'>*</span></label>
            <input class="input" type="date" required name="Fecha">
        </div>
        <div>
            <label>Usuario<span style='color: white;'>*</span></label>
            <input class="input" type="text" required name="Usuario">
        </div>
        <div class="input-field">
            <label>Contraseña<span style='color: white;'>*</span></label>
            <input minlength="12" class="input password" type="password" required name="Contrasena">
            <i class="uil uil-eye-slash showHidePw"></i>
        </div>
        <div>
            <label>Foto<span style='color: white;'>*</span></label>
            <input class="input form-control" type="file" id="formFile" name="Foto" accept="image/*">
            <p style="color: white">Peso maximo de 60kb</p>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
            <label class="form-check-label" for="flexCheckDefault">Acepta Terminos y Condiciones<span style='color: white;'>*</span></label>
        </div>
        <button class="botonR">Registrarse</button>
    </form>
    <div class="Recuperar">
        <p>¿Ya tienes una cuenta? 
            <a href="login.php">Click aquí</a>
        </p>
    </div>
</div>

<?php include("../template/footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>

<style>
body{
    background-image: linear-gradient(rgba(5, 10, 5, 0.80), rgba(254, 229, 204, 0.8)), url(img/Fondo.png);
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
    font-size: 17px;
    color: white;
    font-weight: 800;
}

input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none; 
    margin: 0; 
}

input[type=number] { 
    -moz-appearance:textfield; 
}

/*Login contenedor principal*/
.Login_Contenedor{
    width: 60%;
    display: block;
    margin: 0 auto;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 30px;
    background-color: #fc5500;
    border-radius: 18px;
    box-shadow: 8px 0 8px 0 black;
}

.Login_Contenedor h1{
    text-align: center;
    text-transform: uppercase;
    font-weight: 900;
    color: white;
}

/*Estilos de Formulario*/
.Login_Contenedor form{
    display: grid;
    grid-template-columns: 50% 50%;
}

.Inputs_Contenedor label{
    text-align: left;
    font-weight: 600;
    margin-bottom: 5px;
    border: 0;
    color: white;
}

.Inputs_Contenedor div{
    margin: 10px;
}

.Inputs_Contenedor .input{
    background-color: #FF9660;
    width: 100%;
    height: 37px;
    border: 0;
    border-radius: 12px;
    padding-left: 12px;
    padding-right: 12px;
    border-bottom: 2px solid blue;
    border-top: 2px solid transparent;
    transition: all 0.2s ease;
}

.input-field .input{
    width: 88%;
    border-radius: 12px;
}

.input-field i{
    position: static;
    transform: translateY(-50%);
    color: #999;
    transition: all 0.2s ease;
    color: white;

    background-color: #FF9660;
    border-radius: 12px;
}

.input-field .input:is(:focus, :valid) ~ i{
    color: white;
}

.input-field i.showHidePw{
    right: 0;
    cursor: pointer;
    padding: 6px;
    border-bottom: 2px solid blue;
    border-top: 2px solid transparent;
}

.form-check{
    grid-column: 1 / 3;
    margin: 15px;
    font-weight: 700;
}

.Login_Contenedor .botonR{
    grid-column: 1 / 3;
    display: block;
    margin: 0 auto;
    margin-top: 30px;
    border: 0;
    padding: 12px;
    background-color: #FF4900;
    color: white;
    font-weight: 700;
    border-radius: 18px;
    box-shadow: 0px 0px 5px 1px white;
    transition: 2s;
}

.Login_Contenedor .botonR:hover{
    background-color: #FF9660;
    color: black;
    box-shadow: 0px 0px 5px 1px black;
}

.Recuperar{
    text-align: center;
    margin-top: 15px;
    font-weight: 700;
}

.Recuperar p{
    color: white;
}

.Recuperar a{
    text-decoration: none;
    color: black;
}

.Recuperar a:hover{
    color: blue;
}

@media (max-width: 940px){
    .Login_Contenedor{
        width: 100%;
    }
}

@media (max-width: 650px){
    /*Estilos del form responsive*/
    .Login_Contenedor form div{
        grid-column: 1 / 3;
    }
}

@media (max-width: 360px){
    .input-field .input{
    width: 86%;
}
}

@media (max-width: 1065px){
    .input-field .input{
    width: 85%;
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

<script>
    var input=  document.getElementById('num');
    input.addEventListener('input',function(){
    if (this.value.length > 10) 
    this.value = this.value.slice(0,10); 
    })
</script>

<script>
    const container = document.querySelector(".container"),
      pwShowHide = document.querySelectorAll(".showHidePw"),
      pwFields = document.querySelectorAll(".password"),
      signUp = document.querySelector(".signup-link"),
      login = document.querySelector(".login-link");

    //   js code to show/hide password and change icon
    pwShowHide.forEach(eyeIcon =>{
        eyeIcon.addEventListener("click", ()=>{
            pwFields.forEach(pwField =>{
                if(pwField.type ==="password"){
                    pwField.type = "text";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye-slash", "uil-eye");
                    })
                }else{
                    pwField.type = "password";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye", "uil-eye-slash");
                    })
                }
            }) 
        })
    })

    // js code to appear signup and login form
    signUp.addEventListener("click", ( )=>{
        container.classList.add("active");
    });
    login.addEventListener("click", ( )=>{
        container.classList.remove("active");
    });
</script>