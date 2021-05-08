<?php

class Medico extends Conectar{
        
        public function insertar_medico($cedula,$nombre,$apellidos,$edad,$sede,$usuario,$password,$especialidad){
            $conectar = parent::Conexion();
            parent::set_names();
            $sql = "INSERT INTO medico(cedula,nombre,apellidos,edad,sede,usuario,password,especialidad) VALUES (?,?,?,?,?,?,?,?)";
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


        public function buscarRepetido($usuario){
            $conectar = parent::Conexion();
            parent::set_names();

            $sql = "SELECT * FROM medico WHERE usuario=?";
            
            $sql =$conectar->prepare($sql);

            $sql->bindValue(1,$usuario);

            $sql->execute();

            $resultado = $sql->fetchAll();

            if(count($resultado) > 0){
                return true;
            }
            return false;
        }
    }
?>