<?php

class Conexion
{

    public static function conectar()
    {
        $conexion = new mysqli("127.0.0.1", "root", "", "sigmed");
        return $conexion;
    }

}

/*$con = new Conexion();

if($con->conectar()){
    echo "conexion exitosa";
}
else {
    echo "a conexion ha fallado";
}
*/