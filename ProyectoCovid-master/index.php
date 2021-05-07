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

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="public/css/styleLogin.css">
  <link rel="stylesheet" href="public/css/responsiveLogin.css">

  <title>Sistema de Vacunación Covid-19 </title>
  
</head>
<body>

    


  <div class="login">
    <div class="heading">
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
        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input type="text" class="form-control" placeholder="Nombre de Usuario" name="usuario">
        </div>
        <br>
        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" class="form-control" placeholder="Contraseña" name="password">
        </div>
        <br>
        <center>
          <button type="submit" class="boton" name="enviar">Iniciar Sesión</button>
        </center>
      </form>
    </div>
  </div>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>

</body>
</html>

