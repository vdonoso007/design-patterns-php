<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\creational\Singleton;

class main
{

    public function __construct()
    {
        $conexion = ConexionDB::obtenerConexion();
        $conexion->host = "localhost";
        //echo $conexion->hash
        
    }
}