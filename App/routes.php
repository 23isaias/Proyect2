<?php

$controllers = array(
    'Home' => ['index'],
    'Login'=>['index', 'ingresar', 'confirmar','error'],
    'Cita'=>['index', 'agendar', 'mostrar'],
);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('Home', 'index');
    }
} else {
    call('Home', 'index');
}

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
        default:
            # código...
            break;
    }

    $controller->{$action}();
}

?>