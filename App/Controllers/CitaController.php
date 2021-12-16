<?php

require('Models/CitaModel.php');

class CitaController
{
    function __construct()
    {

    }

    function index()
    {
        $cita = new CitaModel();
        // obtener los datos que se muestran en la pagina de agendar
        $horas = $cita->obtenerHorarios();
        $medicos = $cita->listarMedicos();
        // mostrar la pagina de agendar
        require_once('Views/Paciente/agendar.php');
    }


    public function agendar(){
        //Obtener datos enviados a traves del formulario
        $medico = $_POST['medico'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];

        $cita = new CitaModel();

        // Obetener ID usuario logueado
        $id_usuario = $_COOKIE['idUser'];
        $id_paciente = $cita->obtenerIdPaciente($id_usuario);
        $valido = $cita->guardarCita($fecha, $medico, $id_paciente, $hora);

        if($valido){
            require_once('Views/Confirm/confirmAgendar.php');
        }else{
            require_once('Views/Error/errorCita.php');
        }
    }

    // mostrar lista de citas para la vista de paciente y medico
    public function mostrar(){
        $cita = new CitaModel();
        $id_usuario = $_COOKIE['idUser'];
        $tipo_usuario = $_COOKIE['tipoUser'];

        // verificar qué tipo de usuario hace la solicitud
        if ($tipo_usuario === '1'){
            $id_paciente = $cita->obtenerIdPaciente($id_usuario);
            $dataCitasP = $cita->obtenerCitasPaciente($id_paciente);
            require('Views/Paciente/misCitas.php');
        }else{
            $id_medico = $cita->obtenerIdMedico($id_usuario);
            $dataCitasM = $cita->obtenerCitasMedico($id_medico);
            require('Views/Medico/citas.php');
        }
    }

    // cancelar una cita 
    public function cancelar(){
        // obtener el id de la cita a cancelar
        $id = $_GET['id'];
        $cita = new CitaModel();

        if ($cita->eliminar($id)){
            require_once('Views/Confirm/confirmCancelar.php');
        }
        else{
            require_once('Views/Error/errorMisCitas.php');
        }
    }

    // obtener datos para la vista reprogramar
    public function datosReprogramar(){
        $id = $_GET['id'];
        $cita = new CitaModel();
        $horas = $cita->obtenerHorarios();
        require_once('Views/Paciente/reprogramar.php'); 
    }

    // reprogramar cita 
    public function reprogramar(){
        // obtener variables de los nuevos datos de la cita
        $id = $_GET['id'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $cita = new CitaModel();

        // actualizar la cita en la base de datos
        if ($cita->actualizar($id, $fecha, $hora)){
            require_once('Views/Confirm/confirmReprogramar.php');
        }
        else{
            require_once('Views/Error/errorMisCitas.php');
        }
    }

    // mostrar la lista de pacientes de un medico logueado
    public function mostrarPacientes(){
        $cita = new CitaModel();
        $id_usuario = $_COOKIE['idUser'];
        
        $id_medico = $cita->obtenerIdMedico($id_usuario);
        $dataCitas = $cita->obtenerCitasMedico($id_medico);
        require('Views/Medico/listaPacientes.php');
    }

}