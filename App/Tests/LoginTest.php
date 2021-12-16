<?php
require_once(__DIR__ .'/../Models/LoginModel.php');
require_once(__DIR__ .'/../Db/db.php');

use \PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{

    public function existeUsuarioProveedor(){
        return [
            'Caso 1' => ['albayg00@gmail.com', '12345abc', true]
        ];
    }

    /**
    * @dataProvider existeUsuarioProveedor
    */

    public function testExisteUsuario($correo, $contrasenna, $expected){
        $test = new LoginModel();
        $this->assertTrue($test->existeUsuario($correo, $contrasenna), '');
    }
}