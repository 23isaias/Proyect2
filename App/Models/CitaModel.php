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


            public function obtenerCitas($id_paciente){
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


}