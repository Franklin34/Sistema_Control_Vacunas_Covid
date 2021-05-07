<?php
    require_once("../config/conexion.php");
    require_once("../modelo/medico.php");

    $medico = new Medico();

    switch($_GET['opc']){
        case 'insert':
            $medico->insertar_medico($_POST['cedula'],$_POST['nombre'],$_POST['apellidos'],$_POST['edad'],$_POST['sedes'],$_POST['usuario'],$_POST['password'],$_POST['especialidades']);
            break;
    }
?>