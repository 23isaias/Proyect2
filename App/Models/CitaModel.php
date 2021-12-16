<?php
class CitaModel
{
    private $medicos;
    private $db;

    public function __construct()
    {
        $this->db = Conexion::conectar();
        $this->medicos = array();
    }


    // listar medicos para la vista agendar
    public function listarMedicos(){
        
        $sql = "SELECT * FROM  medico;";
        $query = $this->db->query($sql);
        $medicos = [];
        $i=0;
            while($row = $query->fetch_assoc()){
                $medicos[$i]=$row;
                $i++;
            }
            return $medicos;
        }

        // obtener horarios para la vista agendar
        public function obtenerHorarios(){
            $sql = "SELECT * FROM  horario;";
            $query = $this->db->query($sql);
            $horario = [];
            $i=0;
                while($row = $query->fetch_assoc()){
                    $horario[$i]=$row;
                    $i++;
                }
                return $horario;
        }

        // almacenar datos de la nueva cita 
        public function guardarCita($fecha,$idMedico,$idPaciente,$idHorario){
            $estado = 1;
            $rid_medico = (int)$idMedico;
            $rid_paciente = (int)$idPaciente;
            $rid_horario = (int)$idHorario;       
            $sql = "INSERT INTO citas VALUES (NULL,'$fecha',$estado,$rid_medico,$rid_paciente,$rid_horario);";

            if ($this->db->query($sql)){ 
                return true;
            } else{
                return false;
            }

        }

        public function obtenerEmailPaciente($id){
            $id_arreglado = (int)$id;
            $sql = "SELECT * FROM usuario WHERE id = $id_arreglado";
    
            $query = $this->db->query($sql);
            $dato = [];
            $respuesta = "";
            $i=0;
                while($row = $query->fetch_assoc()){
                    $dato[$i]=$row;
                    $i++;
                }
            
            $respuesta = $dato[0]["email"];

            return $respuesta;
        }

        // obtener id del paciente para mostrar en la vista del medico
        public function obtenerIdPaciente($id){
            $id_arreglado = (int)$id;
            $sql = "SELECT * FROM paciente WHERE id_usuario = $id_arreglado";
    
            $query = $this->db->query($sql);
            $dato = [];
            $respuesta = "";
            $i=0;
                while($row = $query->fetch_assoc()){
                    $dato[$i]=$row;
                    $i++;
                }
                $respuesta = $dato[0]["id"]; 
                return $respuesta;
            }

            // obtener datos de las citas para la vista Mis citas del paciente
            public function obtenerCitasPaciente($id_paciente){
                $id_arreglado = (int)$id_paciente;
                $sql = "SELECT * FROM citas WHERE id_paciente = $id_arreglado AND estado = 1";
        
                $query = $this->db->query($sql);
                $dato = [];
                
                $i=0;
                    while($row = $query->fetch_assoc()){
                        $dato[$i]=$row;
                        $i++;
                    }     
                return $dato;
            }

            // obtener id del medico logueado
            public function obtenerIdMedico($id){
                $id_arreglado = (int)$id;
                $sql = "SELECT * FROM medico WHERE id_usuario = $id_arreglado";
        
                $query = $this->db->query($sql);
                $dato = [];
                $respuesta = "";
                $i=0;
                    while($row = $query->fetch_assoc()){
                        $dato[$i]=$row;
                        $i++;
                    }
                    $respuesta = $dato[0]["id"]; 
                    return $respuesta;
                }


                // obtener datos de citas para la vista Mi agenda del medico
                public function obtenerCitasMedico($id_medico){
                    $id_arreglado = (int)$id_medico;
                    $sql = "SELECT * FROM citas WHERE id_medico = $id_arreglado AND estado = 1";
            
                    $query = $this->db->query($sql);
                    $dato = [];
                    
                    $i=0;
                        while($row = $query->fetch_assoc()){
                            $dato[$i]=$row;
                            $i++;
                        }     
                    return $dato;
                }

        // obtener nombre del medico para mostrar en la vista agendar del paciente
        public function obtenerNombreMedico($id_medico){
            $id_arreglado = (int)$id_medico;
            $sql = "SELECT nombre 
                    FROM medico WHERE id = $id_arreglado";
            $query = $this->db->query($sql);
            $dato = [];
            
            $i=0;
                while($row = $query->fetch_assoc()){
                    $dato[$i]=$row;
                    $i++;
                }     

            $resultado = $dato[0]['nombre'];
            return $resultado;
        }

        // obtener apellido del medico para mostrar en la vista agendar del paciente
        public function obtenerApellidoMedico($id_medico){
            $id_arreglado = (int)$id_medico;
            $sql = "SELECT apellido 
                    FROM medico WHERE id = $id_arreglado";
            $query = $this->db->query($sql);
            $dato = [];
            
            $i=0;
                while($row = $query->fetch_assoc()){
                    $dato[$i]=$row;
                    $i++;
                }     

            $resultado = $dato[0]['apellido'];
            return $resultado;
        }

        // obtener nombre del paciente para la vista pacientes del medico
        public function obtenerNombrePaciente($id_paciente){
            $id_arreglado = (int)$id_paciente;
            $sql = "SELECT nombre 
                    FROM paciente WHERE id = $id_arreglado";
            $query = $this->db->query($sql);
            $dato = [];
            
            $i=0;
                while($row = $query->fetch_assoc()){
                    $dato[$i]=$row;
                    $i++;
                }     

            $resultado = $dato[0]['nombre'];
            return $resultado;
        }

        // obtener apellido para la vista pacientes del medico
        public function obtenerApellidoPaciente($id_paciente){
            $id_arreglado = (int)$id_paciente;
            $sql = "SELECT apellido 
                    FROM paciente WHERE id = $id_arreglado";
            $query = $this->db->query($sql);
            $dato = [];
            
            $i=0;
                while($row = $query->fetch_assoc()){
                    $dato[$i]=$row;
                    $i++;
                }     

            $resultado = $dato[0]['apellido'];
            return $resultado;
        }

        // obtener cedula del paciente para la vista pacientes del medico
        public function obtenerCedulaPaciente($id_paciente){
            $id_arreglado = (int)$id_paciente;
            $sql = "SELECT cedula 
                    FROM paciente WHERE id = $id_arreglado";
            $query = $this->db->query($sql);
            $dato = [];
            
            $i=0;
                while($row = $query->fetch_assoc()){
                    $dato[$i]=$row;
                    $i++;
                }     

            $resultado = $dato[0]['cedula'];
            return $resultado;
        }
        
        // obtener datos de horario para mostrar enl a vista agendar del paciente
        public function obtenerNombreHora($id_hora){
            $id_arreglado = (int)$id_hora;
            $sql = "SELECT franja_horaria FROM horario WHERE id = $id_hora";
            $query = $this->db->query($sql);
            $dato = [];
            
            $i=0;
                while($row = $query->fetch_assoc()){
                    $dato[$i]=$row;
                    $i++;
                }     
            $resultado = $dato[0]['franja_horaria'];
            return $resultado;
        }

        // cambiar el estado de una cita para que se muestre como eliminada
        public function eliminar($id_cita)
        {
            $sql = "UPDATE citas SET estado = 0  where id = ".$id_cita.";";
            $consulta = $this->db->query($sql);
            if($consulta){
                return true;
            } else {
                return false;
            }
        }

        // actualizar los datos de una cita en la tabla citas (reprogramar)
        public function actualizar($id_cita, $fecha, $id_hora)
        {
            $sql = "UPDATE citas SET fecha ='".$fecha."', id_horario = '".$id_hora."' where id = ".$id_cita.";";
            $consulta = $this->db->query($sql);
            if($consulta){
                return true;
            } else {
                return false;
            }
        }

}