<?php

require('Models/LoginModel.php');
//require('Models/CitaModel.php');

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

        $respuesta = $login->existeUsuario($correo,$contrasenna);


        if($respuesta){
            $id = $login->obtenerId($correo,$contrasenna);
            setcookie("idUser",$id);
            
            require('Views/Paciente/inicio.php');
        }else{
            require('Views/errorLogin.php');
        }
    } 

}