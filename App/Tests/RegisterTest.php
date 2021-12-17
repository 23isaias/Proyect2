<?php
require_once(__DIR__ .'/../Models/RegisterModel.php');
require_once(__DIR__ .'/../Db/db.php');

use \PHPUnit\Framework\TestCase;

class RegisterTest extends TestCase
{
    // METODO: obtenerCrearCuenta
    // Proveedor de datos para la funcion testCrearCuenta
    public function crearCuentaProveedor(){
        return [
            'Caso 1' => [true, true, true],
            'Caso 2' => [false, true, false],
            'Caso 2' => [true, false, false],
        ];
    }

    /**
    * @dataProvider crearCuentaProveedor
    */
    public function testCrearCuenta($usuario, $paciente, $expected){
        $mock = $this->getMockBuilder('RegisterModel')
                    ->onlyMethods(array('CrearUsuario', 'CrearPaciente'))
                    ->getMock();
        $mock->expects($this->exactly(1))
                    ->method('CrearUsuario', 'CrearPaciente')
                    ->will($this->returnValue($usuario, $paciente));
        
        $this->assertEquals($expected, $mock->crearCuenta('4-812-0909', 'Andres', 'Sanders', 'andres@gmail.com', '5432xyz'));
    }

    // Funcion para verificar que getIdUsuario retorne datos
    public function testGetIdUsuario()
    {
        $test = new RegisterModel();
        $this->assertNotEmpty($test->getIdUsuario());
    }

}

