<?php

require('Models/LoginModel.php');

class LoginController
{
	
	function __construct()
	{
		
	}

    public function index(){
        require_once('Views/login.php');
    }

    public function ingresar(){
        $login = new LoginModel();

        $correo = $_POST['correo'];
        $contrasenna = $_POST['contrasenna'];
        //$tipo = $_POST['tipo'];
        $respuesta = $login->existeUsuario($correo,$contrasenna);


        if($respuesta){
            $id = $login->obtenerId($correo,$contrasenna);
            setcookie("idUser",$id);
            $tipo = $login->obtenerTipo($id);
            setcookie("tipoUser",$tipo);
            
            if($tipo === "1"){
                require_once('Views/Paciente/inicio.php');
            }else{
                require_once('Views/Medico/inicio.php');
            }
        }else{
            require_once('Views/Error/errorLogin.php');
        }
    } 

    public function cerrarSesion(){
        require_once('Views/login.php');
    }

}