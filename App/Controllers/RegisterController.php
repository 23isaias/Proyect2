<?php

require('Models/RegisterModel.php');


class RegisterController
{
	
	function __construct()
	{
		
	}

    public function index(){
        require_once('Views/register.php');
    }


    public function registrar(){
        $register = new RegisterModel();

        $respuesta = false;

        /*obtener las variables */

        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $contrasenna = $_POST['contrasenna'];

        $respuesta = $register->crearCuenta($cedula,$nombre,$apellido,$correo,$contrasenna);

        require('Views/login.php');
    }
}