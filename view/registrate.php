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
    <!--Animation Script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<title>Bon Appetit - Registrate</title>

<div class="loader">
    <div></div>
</div>

<div class="content">
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
            <label>Documento de Identidad</label>
            <input class="input" type="number" name="Documento" required>
        </div>
        <div>
            <label>Nombre</label>
            <input class="input" type="name" required name="Nombres" onkeypress="return validar(event)">
        </div>
        <div>
            <label>Apellido</label>
            <input class="input" type="name" required  name="Apellidos" onkeypress="return validar(event)">
        </div>
        <div>
            <label>Correo</label>
            <input class="input" type="email" required  name="Correo_Electronico">
        </div>
        <div>
            <label>Telefono/Celular</label>
            <input class="input" type="number" required name="Celular">
        </div>
        <div>
            <label>Fecha de Nacimiento</label>
            <input class="input" type="date" required name="Fecha">
        </div>
        <div>
            <label>Usuario</label>
            <input class="input" type="text" required name="Usuario">
        </div>
        <div class="input-field">
            <label>Contraseña</label>
            <input class="input password" type="password" required name="Contrasena">
            <i class="uil uil-eye-slash showHidePw"></i>
        </div>
        <div>
            <label>Foto</label>
            <input class="input form-control" type="file" id="formFile" name="Foto" accept="image/*">
            <p style="color: white">Peso maximo de 60kb</p>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
            <label class="form-check-label" for="flexCheckDefault">Acepta Terminos y Condiciones</label>
        </div>
        <button class="botonR">Registrarse</button>
    </form>
    <div class="Recuperar">
        <p>¿Ya tienes una cuenta? 
            <a href="login.php">Click aquí</a>
        </p>
    </div>
</div>

<?php include("template/footer.php") ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="../loader.min.js"></script>
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
    font-size: 15px;
    color: white;
    font-weight: 900;
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
    text-shadow: 3px 3px 0px white,
    6px 6px 0px black;
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