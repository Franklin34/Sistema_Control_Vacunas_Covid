<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../public/css/styles.css" />
    <link rel="stylesheet" href="../../public/css/responsiveConsultar.css" />
    <link rel="stylesheet" href="../../public/css/tabla.css" />
    <link rel="icon" type="favicon/x-icon" href="../../public/img/medico.png" />
    <title>Consultar Medicos</title>
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

    <div class="search">
      <div id="logotipo">
        <h1>Consultar Medicos</h1>
      </div>
      <!--
      <form method="post" action="http://localhost/ProyectoCovid/view/ConsultarMedico/consultarMedicos.php">
        <div id="buscar">
          <label for="nombre">Digite el nombre del médico a buscar: </label>
          <input type="text" name="nombre" id="nombre" />
          <input type="submit" value="Buscar" />
        </div>
      </form>-->
      
    </div>

  <div id="wrapper">
  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>Cédula</span></th>
        <th><span>Nombre</span></th>
        <th><span>Apellidos</span></th>
        <th><span>Edad</span></th>
        <th><span>Sede</span></th>
        <th><span>Usuario</span></th>
        <th><span>Contraseña</span></th>
        <th><span>Especialidad</span></th>
      </tr>
    </thead>
    <tbody>
    <?php
      /*if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        include("../../modelo/llenarTabla.php?nombre=$nombre");
      }else{*/
        require_once("../../modelo/llenarTabla.php");
      //}
      
    ?>
    </tbody>
  </table>
 </div> 

  <script src="consultarMedico.js"></script>
  </body>
</html>
