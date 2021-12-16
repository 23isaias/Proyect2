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

    // ingresar al sistema
    public function ingresar(){
        $login = new LoginModel();

        //captar datos ingresados
        $correo = $_POST['correo'];
        $contrasenna = $_POST['contrasenna'];
        $respuesta = $login->existeUsuario($correo,$contrasenna);

        //verificar las credenciales
        if($respuesta){
            $id = $login->obtenerId($correo,$contrasenna);
            setcookie("idUser",$id);
            $tipo = $login->obtenerTipo($id);
            setcookie("tipoUser",$tipo);
            
            //mostrar vista dependiendo del tipon de usuario
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