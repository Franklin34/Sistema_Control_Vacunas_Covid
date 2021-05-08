<?php
  require_once("../../config/conexion.php");
  if(isset($_SESSION['id_administrador'])){
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="../../public/css/style.css" />
    <script type="text/javascript" src="../../public/js/script.js"></script>
    <link rel="icon" type="favicon/x-icon" href="../../public/img/medico.png" />
    <title>Inicio</title>
  </head>
  <body>

    <input type="checkbox" id="check" />
    <label for="check">
      <arial class="fas fa-bars" id="btn">☰</arial>
      <arial class="fas fa-times" id="cancel">☰</arial>
    </label>
    <aside class="sidebar">
      <img src="../../public/img/escu.png" id="doc" width="150px" />
      <header>Administador</header>
      <ul>
        <li>
          <a href="../Home/homeAdmin.php"><i class="fas fa-qrcode"></i>Inicio</a>
        </li>
        <li>
          <a href="../RegistrarMedico/registrarMedicos.php"><i class="fas fa-link"></i>Agregar Médicos</a>
        </li>
        <li>
          <a href="../AdministrarMedico/administrarMedicos.php"><i class="fas fa-stream"></i>Modificar Médicos</a>
        </li>
        <li>
          <a href="../ConsultarMedico/consultarMedicos.php"><i class="fas fa-calendar-week"></i>Consultar Médicos</a>
        </li>
        <li>
          <a href="../../modelo/logout.php"><i class="fas fa-calendar-week"></i>Cerrar Sesión</a>
        </li>
      </ul>
    </aside>
    <header class="Cabecera">
      <div class="content">
        <div class="images">
          <img src="../../public/img/carrusel1.jpg" class="imagenes"/>
          <img src="../../public/img/carrusel2.jpg" class="imagenes"/>
          <img src="../../public/img/carrusel3.jpg" class="imagenes"/>
        </div>
      </div>
    </header>

    <div class="Seccion1">
      <br /><br /><br />
      <h1>Bienvenido al Sistema de Vacunación Covid-19</h1>
      <br />
      <font size="5"
        >Aquí se realiza el control de los Médicos del sistema</font
      >

      <br /><br /><br />
      <h1>Últimas Estadísticas Registradas</h1>
    </div>

    <div class="Seccion2"></div>
  </body>
</html>

<?php
  }
  else{
    header("Location:".Conectar::ruta()."index.php");
  }
?>