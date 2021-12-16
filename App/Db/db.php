<?php

// se crea una clase para la conexion a la base de datos
class Conexion
{

    public static function conectar()
    {
        $conexion = new mysqli("127.0.0.1", "root", "", "sigmed");
        return $conexion;
    }

}

