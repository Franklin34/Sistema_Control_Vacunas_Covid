<?php
    require_once("config/conexion.php");
    if(isset($_POST['enviar'])){
      require_once("modelo/administrador.php");
      $administrador = new Administrador();
      $administrador->login();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="favicon/x-icon" href="public/img/medico.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="public/css/styleLogin.css">
  <link rel="stylesheet" href="public/css/responsiveLogin.css">

  <title>Sistema de Vacunación Covid-19 </title>
  
</head>
<body>
<div class="main_div">
  <h2>Iniciar Sesión</h2>
  <?php
          if(isset($_GET['m'])){
            switch($_GET['m']){
              case '1':
                ?>
                <div class="alert alert-danger alert-dismissible fade show">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Alerta!</strong> Credenciales incorrectas
                </div>
                <?php
                break;
              case '2':
                ?>
                <div class="alert alert-danger alert-dismissible fade show">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Alerta!</strong> Los campos estan vacios
                </div>
                <?php
                break;
            }
          }
      ?>
    <form action="index.php" method="post">
      <div class="input_box">
        <input type="text" placeholder="Usuario" name="usuario" >
        <div class="icon"><i class="fas fa-user"></i></div>
      </div>
      <div class="input_box">
        <input type="password" placeholder="Contraseña" name="password" >
        <div class="icon"><i class="fas fa-lock"></i></div>
      </div>
      <div class="input_box boton">
        <input type="submit" class="boton" name="enviar" value="Iniciar Sesión">
    </form>
  </div>


  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>

</body>
</html>

