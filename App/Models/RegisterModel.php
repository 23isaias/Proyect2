<?php

class RegisterModel
{
        private $db;
        
        public function __construct()
        {
            $this->db = Conexion::conectar();
            
        }

    // crear una nueva cuenta en el sistema
    public function crearCuenta($cedula,$nombre,$apellido,$correo,$contrasenna){
            $usuario = false;
            $paciente = false;
            $usuario = $this->CrearUsuario($cedula,$nombre,$apellido,$correo,$contrasenna);
            $paciente = $this->CrearPaciente($cedula,$nombre,$apellido,$cedula);
            if($usuario == true && $paciente == true){
                return true;
            }else{
                return false;
            }

        }
        
        // introducir datos en la tabla usuario 
        public function CrearUsuario($cedula,$nombre,$apellido,$correo,$contrasenna){
            $tipo_usuario = 1;
        
            $sql = "INSERT INTO usuario VALUES (NULL,'$correo','$contrasenna',$tipo_usuario);";

            if ($this->db->query($sql)){ 
                return true;
            } else{
                return false;
            }
        }

        // obtener id del usuario creado 
        public function getIdUsuario(){
            $sql = "select MAX(id) AS max_id_user FROM usuario";

            $query = $this->db->query($sql);
            $dato = [];
            $respuesta = "";
            $i=0;
                while($row = $query->fetch_assoc()){
                    $dato[$i]=$row;
                    $i++;
                }
            $respuesta = $dato[0];
                
            return $respuesta;
        }

        // introducir datos en la tabla paciente
        public function CrearPaciente($cedula,$nombre,$apellido){
            $id_usuario = $this->getIdUsuario();
        
            $sql = "INSERT INTO paciente  VALUES (NULL,'$nombre','$apellido','$cedula',{$id_usuario['max_id_user']});";
            if ($this->db->query($sql)){
                return true;
            } else{
                return false;}
        }
}