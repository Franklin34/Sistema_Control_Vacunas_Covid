<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../public/css/styles.css" />
  <link rel="stylesheet" href="../../public/css/responsiveAdministrar.css" />
  <link rel="icon" type="favicon/x-icon" href="../../public/img/medico.png" />
  <title>Administrar Médicos</title>
</head>

<body>
  <input type="checkbox" id="check" />
  <label for="check">
    <arial class="fas fa-bars" id="btn">☰</arial>
    <arial class="fas fa-times" id="cancel">☰</arial>
  </label>
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
        <a href="../AdministrarPaciente/administrarPaciente.php"><i class="fas fa-stream"></i>Modificar Pacientes</a>
      </li>
      <li>
        <a href="../ConsultarPaciente/consultarPaciente.php"><i class="fas fa-calendar-week"></i>Consultar Pacientes</a>
      </li>
      <li>
        <a href="../../modelo/logout.php"><i class="fas fa-calendar-week"></i>Cerrar Sesión</a>
      </li>
    </ul>
  </aside>

  <div class="search">
    <div id="logotipo">
      <h1>Administrar Pacientes</h1>
    </div>
    <div id="buscar">
      <label for="buscar1">Digite la cédula del paciente a buscar: </label>
      <input type="text" name="buscar1" id="buscar1" />
      <input type="button" value="Buscar" />
    </div>
  </div>


  <div class="contentInputs">
    <h3>Resultado de la búsqueda: </h3>
    <form>
      <div class="inputs">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" disabled />
        <label for="cedula">Cédula: </label>
        <input type="text" name="cedula" id="cedula" disabled />
        <label for="edad">Edad: </label>
        <input type="text" name="edad" id="edad" disabled />
        <label for="sedes">Sede: </label>
        <select id="sedes" name="sedes" disabled>
          <option>Alajuela</option>
          <option>Limón</option>
          <option>Cartago</option>
          <option>Heredia</option>
          <option>Puntarenas</option>
          <option>Guanacaste</option>
          <option>San José</option>
        </select>
      </div>

      <div class="inputs">
        <label for="nombre">Código: </label>
        <input type="text" name="nombre" id="nombre" disabled />
        <label for="cedula">Correo: </label>
        <input type="text" name="cedula" id="cedula" disabled />
        <label for="edad">Contraseña: </label>
        <input type="text" name="edad" id="edad" disabled />
        <label for="especialidad">Especialidad: </label>

        <select id="especialidades" name="especialidades" disabled>
          <option>Cirugía General</option>
          <option>Cirugía Pediátrica</option>
          <option>Cardiología</option>
          <option>Dermatología</option>
          <option>Geriatría</option>
          <option>Ginecología y Obstetricia</option>
          <option>Radiología</option>
        </select>
      </div>
  </div>
  <div id="botones">
    <input type="button" value="Modificar" />
    <input type="button" value="Eliminar" />
  </div>
  </form>
</body>

</html>