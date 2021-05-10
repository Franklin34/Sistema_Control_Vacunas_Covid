<?php
require_once("../../config/conexion.php");
if (isset($_SESSION['cedula'])) {
?>

  <!DOCTYPE html>
  <html lang="en">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>Home Paciente</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
      <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
      <link rel="stylesheet" href="../../plantillaPaciente/css/bootstrap.min.css">
      <link rel="stylesheet" href="../../plantillaPaciente/style.css">
      <link rel="stylesheet" href="../../plantillaPaciente/css/responsive.css">
      <link rel="stylesheet" href="../../plantillaPaciente/css/custom.css">
      <link rel="icon" type="favicon/x-icon" href="../../public/img/medico.png" />
      <script src="../../plantillaPaciente/js/modernizer.js"></script>
  </head>

  <body class="clinic_version">

  <aside class="sidebar">
      <img src="../../public/img/escu.png" id="doc" width="150px" />
      <header>Médico</header>
      <ul>
        <li>
          <a href="../Home/homeMedico.php"><i class="fas fa-qrcode"></i>Inicio</a>
        </li>
        <li>
          <a href="../RegistrarPaciente/registrarPaciente.php"><i class="fas fa-link"></i>Agregar Paciente</a>
        </li>
        <li>
          <a href="../AdministrarPaciente/administrarPaciente.php"><i class="fas fa-stream"></i>Modificar Paciente</a>
        </li>
        <li>
          <a href="../ConsultarPaciente/consultarPaciente.php"><i class="fas fa-calendar-week"></i>Consultar Paciente</a>
        </li>
        <li>
          <a href="../../modelo/logout.php"><i class="fas fa-calendar-week"></i>Cerrar Sesión</a>
        </li>
      </ul>
    </aside>
    
    <div id="preloader">
      <img class="preloader" src="../../plantillaPaciente/images/loaders/heart-loading2.gif" alt="">
    </div>

    <div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('../../plantillaPaciente/images/slider-bg.png');">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="text-contant">
              <h2>
                <span class="center"><span class="icon"><img src="../../plantillaPaciente/images/icon-logo.png" alt="#" /></span></span>
                <a href="" class="typewrite" data-period="2000" data-type='[ "Bienvenidos", "Recuerda lavarte las manos", "Quedate en casa!" ]'>
                  <span class="wrap"></span>
                </a>
              </h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="time-table" class="time-table-section">
      <div class="container">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="row">
            <div class="service-time one" style="background:#2895f1;">
              <span class="info-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></span>
              <h3>Protocolo Covid</h3>
              <p>- Use mascarilla<br> - Lavarse las manos antes de ingresar a un lugar público</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="row">
            <div class="service-time middle" style="background:#0071d1;">
              <span class="info-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
              <h3>Horario de vacunación</h3>
              <div class="time-table-section">
                <ul>
                  <li><span class="left">Lunes - Viernes</span><span class="right">7 am – 8 pm</span></li>
                  <li><span class="left">Sábado</span><span class="right">8 am – 6 pm</span></li>
                  <li><span class="left">Domingo</span><span class="right">10 am – 4 pm</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="row">
            <div class="service-time three" style="background:#0060b1;">
              <span class="info-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></span>
              <h3>Dirección</h3>
              <p>Dirección: Pozos, San José, Santa Ana, 10903<br>
              Horas: Abierto las 24 horas <br>
              Teléfono: 2522 1000</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container centro" >
      <div class="row">
        <div class="col-sm-4">
          <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" 
            src="https://maps.google.com/maps?q=Manuel%20Antonio%20National%20Park&t=&z=13&ie=UTF8&iwloc=&output=embed" 
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://soap2day-to.com">soap2day</a><br>
            <a href="https://www.embedgooglemap.net">google maps for websites</a>
            </div>
        </div>
        </div>
        <div class="col-sm-4">
        </div>
        <div class = "col-sm-4">
              
          <div style="width: 400px;">
              <img src="../../public/img/formu.png" width="115px" id="doctor">
              <br>
              <label for="nombre" class="infoPac">Nombre: </label>
              <br>
              <input type="text" id="nombre" name="nombre" disabled>
              <label for="cedula" class="infoPac">Cédula: </label>
              <br>
              <input type="text" id="cedula" name="cedula" disabled>
              <label for="correo" class="infoPac">Correo: </label>
              <br>
              <input type="text" id="correo" name="correo" disabled>

              <label for="genero" class="infoPac">Género: </label>
              <br>
              <input type="text" id="genero" name="genero" disabled>

              <label for="edad" class="infoPac">Edad: </label>
              <br>
              <input type="text" id="edad" name="edad" disabled>

              <label for="telefono" class="infoPac">Télefono: </label>
              <br>
              <input type="text" id="telefono" name="telefono" disabled>

              <label for="riesgo" class="infoPac">Nivel de Riesgo: </label>
              <br>
              <input type="text" id="riesgo" name="riesgo" disabled>

              <label for="vacuna" class="infoPac">Marca de Vacuna: </label>
              <br>
              <input type="text" id="vacuna" name="vacuna" disabled>

              <label for="dosis" class="infoPac">Número de Dosis: </label>
              <br>
              <input type="text" id="dosis" name="dosis" disabled>
              
          </div>
            
        </div>
      </div>
    </div>


    <script src="../../plantillaPaciente/js/all.js"></script>
      <!-- all plugins -->
      <script src="../../plantillaPaciente/js/custom.js"></script>
      <!-- map -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>
  <?php
} else {
  header("Location:" . Conectar::ruta() . "index.php");
}
  ?>