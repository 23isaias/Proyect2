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
        $horas = $cita->obtenerHorarios();
        $medicos = $cita->listarMedicos();
        require_once('Views/Paciente/agendar.php');
    }


    public function agendar(){
        //Obtener datos enviados a traves del formulario
        $medico = $_POST['medico'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];

        $cita = new CitaModel();

        $id_usuario = $_COOKIE['idUser'];
        $id_paciente = $cita->obtenerIdPaciente($id_usuario);
        $valido = $cita->guardarCita($fecha, $medico, $id_paciente, $hora);

        if($valido){
            require_once('Views/Confirm/confirmAgendar.php');
        }else{
            require_once('Views/Error/errorCita.php');
        }
    }

    public function mostrar(){
        $cita = new CitaModel();
        $id_usuario = $_COOKIE['idUser'];
        $tipo_usuario = $_COOKIE['tipoUser'];

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

    public function cancelar(){
        $id = $_GET['id'];
        $cita = new CitaModel();

        if ($cita->eliminar($id)){
            require_once('Views/Confirm/confirmCancelar.php');
        }
        else{
            require_once('Views/Error/errorMisCitas.php');
        }
    }

    public function datosReprogramar(){
        $id = $_GET['id'];
        $cita = new CitaModel();
        $horas = $cita->obtenerHorarios();
        require_once('Views/Paciente/reprogramar.php'); 
    }

    public function reprogramar(){
        $id = $_GET['id'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $cita = new CitaModel();

        if ($cita->actualizar($id, $fecha, $hora)){
            require_once('Views/Confirm/confirmReprogramar.php');
        }
        else{
            require_once('Views/Error/errorMisCitas.php');
        }
    }

    public function mostrarPacientes(){
        $cita = new CitaModel();
        $id_usuario = $_COOKIE['idUser'];
        
        $id_medico = $cita->obtenerIdMedico($id_usuario);
        $dataCitas = $cita->obtenerCitasMedico($id_medico);
        require('Views/Medico/listaPacientes.php');
    }

}