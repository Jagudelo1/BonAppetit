<?php
    if(isset($_POST[""]))
?>

<head>
<link rel="shortcut icon" href="img/ICONO.png">
</head>
<!-- ===== Iconscout CSS ===== -->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<title>Bon Appetit - Ingresar</title>

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

    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Inicia Sesión</span>

                <form action="validar_login.php" method="post">
                    <div class="input-field">
                        <input type="text" placeholder="Usuario" required name="Usuario">
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Contraseña" required name="Contrasena">
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <a href="recuperar_contrasena.php" class="text">Olvidaste tu contraseña?</a>
                    </div>
                        <button class="buttonI">Ingresar</button>
                </form>

                <div class="login-signup">
                    <span class="text">Todavia no tienes una cuenta?
                        <a href="registrate.php" class="text signup-link">Ingresar</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <?php include("../template/footer.php") ?>
</div>
<script src="../jquery.min.js"></script>
<script src="../loader.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@200;400;600&display=swap');

*{
    margin: 0;
}

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


.container{
    position: relative;
    max-width: 430px;
    width: 100%;
    background: #fc5500;
    border-radius: 10px;
    box-shadow: 2px 2px 5px rgb(0, 0, 0);
    overflow: hidden;
    margin: 30px;
    margin-top: 65px;
    margin-bottom: 65px;

    margin-left: auto;
    margin-right: auto;
}

.container .forms{
    display: flex;
    align-items: center;
    height: 440px;
    width: 200%;
    transition: height 0.2s ease;
}


.container .form{
    width: 52%;
    padding: 30px;
    background-color: #ff6d2a;
    transition: margin-left 0.18s ease;
}

.container.active .login{
    margin-left: -50%;
    opacity: 0;
    transition: margin-left 0.18s ease, opacity 0.15s ease;
}

.container .signup{
    opacity: 0;
    transition: opacity 0.09s ease;
}
.container.active .signup{
    opacity: 1;
    transition: opacity 0.2s ease;
}

.container.active .forms{
    height: 600px;
}
.container .form .title{
    position: relative;
    font-size: 27px;
    font-weight: 900;
    text-transform: uppercase;
}

.form .title::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 30px;
    background-color: #4070f4;
    border-radius: 25px;
}

.form .input-field{
    position: relative;
    height: 50px;
    width: 100%;
    margin-top: 30px;
}

.input-field input{
    position: absolute;
    height: 100%;
    width: 100%;
    padding: 0 15px;
    border: none;
    outline: none;
    font-size: 16px;
    border-bottom: 2px solid #ccc;
    border-top: 2px solid transparent;
    transition: all 0.2s ease;
}

.input-field input:is(:focus, :valid){
    border-bottom-color: #4070f4;
}

.input-field i{
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    color: #999;
    font-size: 23px;
    transition: all 0.2s ease;
}

.input-field input:is(:focus, :valid) ~ i{
    color: #4070f4;
}

.input-field i.icon{
    left: 0;
}
.input-field i.showHidePw{
    right: 0;
    cursor: pointer;
    padding: 10px;
}

.form .checkbox-text{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 20px;
}

.form .text{
    color: #333;
    font-size: 14px;
}

.form a.text{
    color: #fff;
    text-decoration: none;
}
.form a:hover{
    text-decoration: underline;
}

.form .buttonI{
    border: none;
    background: blue;
    color: white;
    display: grid;
    padding: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 20px;
    border-radius: 18px;
}

.buttonI:hover{
    background-color: #265df2;
}

.form .login-signup{
    margin-top: 30px;
    text-align: center;
}
</style>

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