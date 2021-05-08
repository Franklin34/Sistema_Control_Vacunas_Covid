<?php
    require_once("../config/conexion.php");
    require_once("../modelo/medico.php");

    $medico = new Medico();

    switch($_GET['opc']){
        case 'insert':
            if($medico->buscarRepetido($_POST['usuario']) == false){
                $medico->insertar_medico($_POST['cedula'],$_POST['nombre'],$_POST['apellidos'],$_POST['edad'],$_POST['sedes'],$_POST['usuario'],$_POST['password'],$_POST['especialidades']);
                header("Location:".Conectar::ruta()."view/RegistrarMedico/registrarMedicos.php?sweet=2");
            }
            else{
                header("Location:".Conectar::ruta()."view/RegistrarMedico/registrarMedicos.php?sweet=1");
            }
            break;
    }
?>