<?php

// Se especifican los controladores y las acciones de cada uno 
$controllers = array(
    'Home' => ['index'],
    'Login'=>['index', 'ingresar', 'confirmar','error', 'cerrarSesion'],
    'Register' => ['index', 'registrar'],
    'Cita'=>['index', 'agendar', 'mostrar', 'cancelar', 'datosReprogramar', 'reprogramar', 'mostrarPacientes']
);


// Verificar si se ha captado el controlador y acción
if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('Home', 'index');
    }
} else {
    call('Home', 'index');
}

// llamar al controlador y la acción y crear los objetos de clases
function call($controller, $action)
{

    require_once('Controllers/' . $controller . 'Controller.php');

    switch ($controller) {
        case 'Home':
            $controller = new HomeController();
            break;
        case 'Login':
            $controller = new LoginController();
            break;
        case 'Paciente':
            $controller = new PacienteController();
            break;
        case 'Cita':
            $controller = new CitaController();
            break;
        case 'Register':
            $controller = new RegisterController();
            break;
        default:
            break;
    }

    $controller->{$action}();
}

?>