<?php
    class UsuarioMedico extends Conectar{

        public function login(){
            $conectar = parent::Conexion();
            parent::set_names();

            if(isset($_POST['enviar'])){
               $usuario = $_POST['usuario']; 
               $password = $_POST['password'];
               if(empty($usuario) and empty($password)){
                   header("Location:".Conectar::ruta()."index.php?m=2");
                   exit();
               }
               else{
                   $sql = "SELECT * FROM medico WHERE Usuario=? and Password=?";
                   $stmt = $conectar->prepare($sql);
                   $stmt->bindValue(1,$usuario);
                   $stmt->bindValue(2,$password);
                   $stmt->execute();
                   $resultado = $stmt->fetch();

                   if(is_array($resultado) and count($resultado)>0){
                        $_SESSION['Cedula'] = $resultado['Cedula'];
                        $_SESSION['Usuario'] = $resultado['Usuario'];
                        $_SESSION['Password'] = $resultado['Password'];
                        header("Location:".Conectar::ruta()."view/Home/homeMedico.php");
                        exit();
                   }else{
                        header("Location:".Conectar::ruta()."index.php?m=1");
                        exit();
                   }
               }
            }
        }
    }

?>