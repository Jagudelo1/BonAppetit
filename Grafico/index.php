<?php
    // No mostrar los errores de PHP
    error_reporting(0);

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    include("conexion.php");

    $datos= "SELECT * FROM platillos";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- MATERIAL CDN -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <!-- STYLESHEET -->
    <link rel="shortcut icon" href="Img/ICONO.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/073e5c788d.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fc2b9b04bc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <title>Clientes</title>
    <link rel="stylesheet"a href="../Grafico/stylep.css">
</head>
<body>
<div class="container">
    <aside>
        <div class="top">       
            <div class="logo">
                <img src="./imag/icon.png">
                <h2>BON<span class="danger">APPETIT</span></h2>
            </div>
            <div class="close" id="close-btn">
                <span class="material-icons-sharp">close</span>
            </div>       
        </div>
        <div class="sidebar">
            <a href="../admin/admin.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Reservas</h3>
            </a>
            <a href="../clientes/clientes.php">
                <span class="material-icons-sharp">person_outline</span>
                <h3>Personas</h3>
            </a>
            <a href="../platillos/platillos.php" class="active">
                <span class="material-icons-sharp">restaurant</span>
                <h3>Platillos</h3>
               </a>
            <a href="../resenas/resenas.php">
                <span class="material-icons-sharp">reviews</span>
                <h3>Reseñas</h3>
            </a>
            <a href="../ventas/ventas.php">
                    <span class="material-icons-sharp">add_alert</span>
                    <h3>Ventas</h3>
                </a>
            
            <a href="../index.php">
                <span class="material-icons-sharp">logout</span>
                <h3>Salir</h3>
            </a>
        </div>
    </aside>

    <main>


        <div class="recent-orders">
            <h2>Gráfico de platillos</h2>

            <div class="col-lg-12" style="padding-top: 20px;">
                <div class="card">
                    <div class="card-header">
                        <h1>¿Quién ha hecho más reservas en la semana?</h1>
                    </div>
            
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-2">
                            <button class="btn btn-primary" onclick="CargarDatosGraficoBar()">Gráfico</button>                  
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-primary" onclick="CargarDatosGraficoBarHorizontal()">Gráfico Horizontal</button>                  
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-primary" onclick="CargarDatosGraficodoughnut()">Gráfico doughnut</button>                  
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-primary" onclick="CargarDatosGraficoline()">Gráfico line</button>                  
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-primary" onclick="CargarDatosGraficopolarArea()">Gráfico polarArea</button>                  
                        </div>
                        <br></br>
                        <br></br>
                        <canvas id="graficobar" width="100" height="100" class="ver" ></canvas>
                        <canvas id="graficobarhorizontal" width="100" height="100"></canvas>
                        <canvas id="graficodoughnut" width="100" height="100"></canvas>
                        <canvas id="graficoline" width="100" height="100"></canvas>
                        <canvas id="graficopolarArea" width="100" height="100"></canvas>
                        </div>            
                    </div>
                </div>
            </div>
        </div>
    </main>
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
                <p>Hola, <b><?php echo $_SESSION['usuario']; ?></b></p>
                    <small class="text-muted">Admin</small>
                </div>
                <div class="profile-photo">
                    <img src="./imag/user.png" class="foto">
                </div>
            </div>
        </div>
        <!----- END OF TOP ------>

            <!------------------- END OF RECENT UPDATES -------------------->
        <div class="sales-analytics">
        <h2>Analizador de INGRESOS</h2>
            <div class="item customers">
                <div class="icon">
                    <a href="../platillosr/index.php"> <span class="material-icons-sharp">inventory</span> </a>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>Imprimir reporte</h3>
                    </div>
                </div>
            </div><br>
            <div class="col-lg-5">
                <label for="">Fecha inicio</label>
                <select name="" id="select_finicio" class="form-control"></select>
            </div><br>

            <div class="col-lg-5">
            <label for="">Fecha fin</label>
                <select name="" id="select_ffin" class="form-control"></select>
            </div>
            
            <div class="col-lg-2">
                <label for="">&nbsp;</label><br>
                <button class="btn btn-danger" onclick="CargarDatosGraficoBar()">Buscar</button>
            </div>
        </div>
    </div>
</div>



    
<script src="./indexp.js"></script>
</body>
</html>


<!-- Optional JavaScript;

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS    -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script>


        
    function CargarDatosGraficoBar(){
        var fechainicio = $("#select_finicio").val();
        var fechafin = $("#select_ffin").val();
        $.ajax({
            url:'controlador_grafico.php',
            type:'POST',
            data:{
                inicio:fechainicio,
                fin:fechafin
            }
        }).done(function(resp){
            if(resp.length>0){
                var titulo = [0]
                var cantidad = [0]
                var data = JSON.parse(resp);
                for(var i=0; i < data.length; i++){
                    titulo.push(data[i][1]);
                    cantidad.push(data[i][2]);
                }
                CrearGrafico(titulo,cantidad,'bar','Ocultar barras','graficobar');
                document.getElementById("graficobar").style.display = "block";
                document.getElementById("graficobarhorizontal").style.display = "none";
                document.getElementById("graficodoughnut").style.display = "none";
                document.getElementById("graficoline").style.display = "none";
                document.getElementById("graficopolarArea").style.display = "none";
                


            }
        })
    }
    function CargarDatosGraficoBarHorizontal(){
        $.ajax({
            url:'controlador_grafico.php',
            type:'POST'
        }).done(function(resp){
            if(resp.length>0){
                var titulo = [0]
                var cantidad = [0]
                var data = JSON.parse(resp);
                for(var i=0; i < data.length; i++){
                    titulo.push(data[i][1]);
                    cantidad.push(data[i][2]);
                }
                CrearGrafico(titulo,cantidad,'horizontalBar','Ocultar barras','graficobarhorizontal');
                document.getElementById("graficobarhorizontal").style.display = "block";
                document.getElementById("graficobar").style.display = "none";
                document.getElementById("graficodoughnut").style.display = "none";
                document.getElementById("graficoline").style.display = "none";
                document.getElementById("graficopolarArea").style.display = "none";



            }
        })
    }
    function CargarDatosGraficodoughnut(){
        $.ajax({
            url:'controlador_grafico.php',
            type:'doughnut'
        }).done(function(resp){
            if(resp.length>0){
                var titulo = []
                var cantidad = []
                var data = JSON.parse(resp);
                for(var i=0; i < data.length; i++){
                    titulo.push(data[i][1]);
                    cantidad.push(data[i][2]);
                }
                CrearGrafico(titulo,cantidad,'doughnut','Ocultar barras','graficodoughnut');
                document.getElementById("graficodoughnut").style.display = "block";
                document.getElementById("graficobar").style.display = "none";
                document.getElementById("graficobarhorizontal").style.display = "none";
                document.getElementById("graficoline").style.display = "none";
                document.getElementById("graficopolarArea").style.display = "none";


            }
        })
    }

    function CargarDatosGraficoline(){
        $.ajax({
            url:'controlador_grafico.php',
            type:'line'
        }).done(function(resp){
            if(resp.length>0){
                var titulo = []
                var cantidad = []
                var data = JSON.parse(resp);
                for(var i=0; i < data.length; i++){
                    titulo.push(data[i][1]);
                    cantidad.push(data[i][2]);
                }
                CrearGrafico(titulo,cantidad,'line','Ocultar barras','graficoline');
                document.getElementById("graficoline").style.display = "block";
                document.getElementById("graficobar").style.display = "none";
                document.getElementById("graficobarhorizontal").style.display = "none";
                document.getElementById("graficodoughnut").style.display = "none";
                document.getElementById("graficopolarArea").style.display = "none";

            }
        })
    }
    function CargarDatosGraficopolarArea(){
        $.ajax({
            url:'controlador_grafico.php',
            type:'line'
        }).done(function(resp){
            if(resp.length>0){
                var titulo = []
                var cantidad = []
                var data = JSON.parse(resp);
                for(var i=0; i < data.length; i++){
                    titulo.push(data[i][1]);
                    cantidad.push(data[i][2]);
                }
                CrearGrafico(titulo,cantidad,'polarArea','Ocultar barras','graficopolarArea');
                document.getElementById("graficopolarArea").style.display = "block";
                document.getElementById("graficobar").style.display = "none";
                document.getElementById("graficobarhorizontal").style.display = "none";
                document.getElementById("graficodoughnut").style.display = "none";
                document.getElementById("graficoline").style.display = "none";

            }
            
        })
        
    }
    
    
    
    function CrearGrafico(titulo,cantidad,tipo,emcabezado,id){
        var ctx = document.getElementById(id);
            var myChart = new Chart(ctx, {
                type: tipo,
                data: {
                    labels: titulo,
                    datasets: [{
                        label: emcabezado,
                        data: cantidad,
                        backgroundColor: [
                            'rgba(201, 203, 207, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(201, 203, 207, 0.2)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 7
                    }]
                },
                options: {
                    saceles: {
                        yAxes:[{
                            ticks:{
                                beginAtZero: true
                            }
                        }]
                    },
                    legend: {
                        position: 'right',
                        labels: {
                            fontColor: '#000',
                            fontSize: 16
                        }
                    }
                }
            });
    }


    TraerAnio();
    function TraerAnio() {
        var mifecha = new Date();
        var anio = mifecha.getFullYear();
        var cadena="";
        for(var i=2021; i < anio+1;i++){
            cadena+="<option value="+i+">"+i+"</option>";
        }
        $("#select_finicio").html(cadena);
        $("#select_ffin").html(cadena);
    }

    </script>

    <style>
        .card{
            width: 100% ;
            margin-left: 0px;
            height: 700px !important;
            background-color: var(--color-tablas); 
        }
        #graficobar.chartjs-render-monitor{
            height: 500px !important;
            width: 90% !important;
            margin-left: 5% !important;
        }
        #graficobarhorizontal.chartjs-render-monitor{
            height: 500px !important;
            width: 90% !important;
            margin-left: 5% !important;
        }
        #graficodoughnut.chartjs-render-monitor{
            height: 500px !important;
            width: 80% !important;
            margin-left: 5% !important;
        }
        #graficoline.chartjs-render-monitor{
            height: 500px !important;
            width: 90% !important;
            margin-left: 5% !important;
        }
        #graficopolarArea.chartjs-render-monitor{
            height: 500px !important;
            width: 80% !important;
            margin-left: 5% !important;
        }
        .ver{
            font-size: 20px !important;
        }

    </style>
