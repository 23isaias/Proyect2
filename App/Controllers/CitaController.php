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
        echo $id_paciente;
        $valido = $cita->guardarCita($fecha, $medico, $id_paciente, $hora);

        if($valido){
            require_once('Views/Paciente/confirmacion.php');
        }else{
            require_once('Views/Paciente/errorCita.php');
        }
    }

    public function mostrar(){
        $cita = new CitaModel();
        $id_usuario = $_COOKIE['idUser'];
        $id_paciente = $cita->obtenerIdPaciente($id_usuario);

        $dataCitas = $cita->obtenerCitas($id_paciente);

        require('Views/Paciente/misCitas.php');
    }

}