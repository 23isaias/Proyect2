<?php
require_once(__DIR__ .'/../Models/CitaModel.php');
require_once(__DIR__ .'/../Db/db.php');

use \PHPUnit\Framework\TestCase;

class CitaTest extends TestCase
{

    // Funcion para verificar que obtenerHorarios retorne datos
    public function testObtenerHorarios()
    {
        $test = new CitaModel();
        $this->assertNotEmpty($test->obtenerHorarios());
    }


    // Funcion para verificar que listarMedicos retorne datos
    public function testListarMedicos()
    {
        $test = new CitaModel();
        $this->assertNotEmpty($test->listarMedicos());
    }


    //METODO: guardarCita
    // Proveedor de datos para la funcion testGuardarCita
    public function guardarCitaProveedor(){
        return [
            'Caso 1' => ['09-12-2023 ', '12', '6' , '6', true],
            'Caso 2' => ['09-12-2023 ', '12', '6' , '', false],
            'Caso 3' => ['09-12-2023 ', '', '6' , '6', false],
            'Caso 4' => ['', '12', '6' , '6', false]
        ];
    }
    /**
    * @dataProvider guardarCitaProveedor
    */
    public function testGuardarCita($fecha, $idMedico, $idPaciente, $idHorario, $expected){
        $test = new CitaModel();
        $this->assertEquals($expected, $test->guardarCita($fecha, $idMedico, $idPaciente, $idHorario));
    }


    // METODO obtenerIdPaciente
    // Proveedor de datos para la funcion testObtenerIdPaciente
    public function obtenerIdPacienteProveedor(){
        return [
            'Caso 1' => ['6']
        ];
    }
    /**
    * @dataProvider obtenerIdPacienteProveedor
    */
    // Funcion para verificar que obtenerIdPaciente retorne datos
    public function testObtenerIdPaciente($id)
    {
        $test = new CitaModel();
        $this->assertNotEmpty($test->obtenerIdPaciente($id));
        $this->assertIsArray($test->obtenerIdPaciente($id), 'it is array');
    }


    // METODO: obtenerCitasPaciente
    // Proveedor de datos para la funcion testObtenerTipo
    public function obtenerCitasPacienteProveedor(){
        return [
            'Caso 1' => ['6']
        ];
    }
    /**
    * @dataProvider obtenerCitasPacienteProveedor
    */
    // Funcion para verificar que obtenerCitasPaciente retorne datos
    public function testObtenerCitasPaciente($id)
    {
        $test = new CitaModel();
        $this->assertNotEmpty($test->obtenerCitasPaciente($id));
        $this->assertIsArray($test->obtenerCitasPaciente($id), 'it is aaray');
    }


    // METODO obtenerIdMedico
    // Proveedor de datos para la funcion testObtenerIdMedico
    public function obtenerIdMedicoProveedor(){
        return [
            'Caso 1' => ['12']
        ];
    }
    /**
    * @dataProvider obtenerIdMedicoProveedor
    */
    // Funcion para verificar que obtenerIdMedico retorne datos
    public function testObtenerIdMedico($id)
    {
        $test = new CitaModel();
        $this->assertNotEmpty($test->obtenerIdMedico($id));
        $this->assertIsArray($test->obtenerIdMedico($id), 'it is array');
    }


    // METODO: obtenerCitasMedico
    // Proveedor de datos para la funcion testObtenerTipo
    public function obtenerCitasMedicoProveedor(){
        return [
            'Caso 1' => ['12']
        ];
    }
    /**
    * @dataProvider obtenerCitasMedicoProveedor
    */
    // Funcion para verificar que obtenerCitasMedico retorne datos
    public function testObtenerCitasMedico($id)
    {
        $test = new CitaModel();
        $this->assertNotEmpty($test->obtenerCitasMedico($id));
        $this->assertIsArray($test->obtenerCitasMedico($id), 'it is array');
    }

    
    //METODO obtenerNombreMedico
    // Proveedor para la funcion obtenerNombreMedico
    public function obtenerNombreMedicoProveedor(){
        return [
            'Caso 1' => ['12']
        ];
    }
    /**
    * @dataProvider obtenerNombreMedicoProveedor
    */
    // Funcion para verificar que obtenerNombreMedico retorne datos
    public function testObtenerNombreMedico($id)
    {
        $test = new CitaModel();
        $this->assertNotEmpty($test->obtenerNombreMedico($id));
        $this->assertIsString($test->obtenerNombreMedico($id), 'it is string');
    }


    //METODO obtenerApellidoMedico
    // Proveedor para la funcion obtenerApellidoMedico
    public function obtenerApellidoMedicoProveedor(){
        return [
            'Caso 1' => ['12']
        ];
    }
    /**
    * @dataProvider obtenerApellidoMedicoProveedor
    */
    // Funcion para verificar que obtenerApellidoMedico retorne datos
    public function testObtenerApellidoMedico($id)
    {
        $test = new CitaModel();
        $this->assertNotEmpty($test->obtenerApellidoMedico($id));
        $this->assertIsString($test->obtenerApellidoMedico($id), 'it is string');
    }


    //METODO obtenerCedulaPaciente
    // Proveedor para la funcion obtenerCedulaPaciente
    public function obtenerCedulaPacienteProveedor(){
        return [
            'Caso 1' => ['6']
        ];
    }
    /**
    * @dataProvider obtenerCedulaPacienteProveedor
    */
    // Funcion para verificar que obtenerCedulaPaciente retorne datos
    public function testCedulaPaciente($id)
    {
        $test = new CitaModel();
        $this->assertNotEmpty($test->obtenerCedulaPaciente($id));
    }


    //METODO obtenerNombreHora
    // Proveedor para la funcion obtenerNombreHora
    public function obtenerNombreHoraProveedor(){
        return [
            'Caso 1' => ['6']
        ];
    }
    /**
    * @dataProvider obtenerNombreHoraProveedor
    */
    // Funcion para verificar que obtenerNombreHora retorne datos
    public function testOtenerNombreHora($id)
    {
        $test = new CitaModel();
        $this->assertNotEmpty($test->obtenerNombreHora($id));
    }


}