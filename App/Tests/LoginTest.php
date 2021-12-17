<?php
require_once(__DIR__ .'/../Models/LoginModel.php');
require_once(__DIR__ .'/../Db/db.php');

use \PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    // METODO: existeUsuario
    // Proveedor de datos para la funcion testExisteUsuario
    public function existeUsuarioProveedor(){
        return [
            'Caso 1' => ['albayg00@gmail.com', '12345abc', true],
            'Caso 2' => ['albayg00@gmail.com', '', false],
            'Caso 3' => ['', '12345abc', false]
        ];
    }

    /**
    * @dataProvider existeUsuarioProveedor
    */
    public function testExisteUsuario($correo, $contrasenna, $expected){
        $test = new LoginModel();
        $this->assertTrue($test->existeUsuario($correo, $contrasenna), '');
    }


    // METODO: obtenerId
    // Proveedor de datos para la funcion testObtenerId
    public function obtenerIdProveedor(){
        return [
            'Caso 1' => ['albayg00@gmail.com', '12345abc', 14]
        ];
    }

    /**
    * @dataProvider obtenerIdProveedor
    */
    public function testObtenerId($correo, $contrasenna, $expected){
        $test = new LoginModel();
        $this->assertEquals($expected, $test->obtenerId($correo, $contrasenna));
    }


    // METODO: obtenerTipo
    // Proveedor de datos para la funcion testObtenerTipo
    public function obtenerTipoProveedor(){
        return [
            'Caso 1' => [14, 1],
            'Caso 2' => [17, 2]
        ];
    }

    /**
    * @dataProvider obtenerTipoProveedor
    */
    public function testObtenerTipo($id, $expected){
        $test = new LoginModel();
        $this->assertEquals($expected, $test->obtenerTipo($id));
    }

}