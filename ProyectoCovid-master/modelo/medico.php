<?php

class Medico extends Conectar{
        
        public function insertar_medico($cedula,$nombre,$apellidos,$edad,$sede,$usuario,$password,$especialidad){
            $conectar = parent::Conexion();
            parent::set_names();
            $sql = "INSERT INTO medico(Cedula,Nombre,Apellidos,Edad,Sede,Usuario,Password,Especialidad) VALUES (?,?,?,?,?,?,?,?)";
            $sql = $conectar->prepare($sql);

            $sql->bindValue(1,$cedula);
            $sql->bindValue(2,$nombre);
            $sql->bindValue(3,$apellidos);
            $sql->bindValue(4,$edad);
            $sql->bindValue(5,$sede);
            $sql->bindValue(6,$usuario);
            $sql->bindValue(7,$password);
            $sql->bindValue(8,$especialidad);

            $sql->execute();

            return $resultado = $sql->fetchAll();
        }

    }
?>