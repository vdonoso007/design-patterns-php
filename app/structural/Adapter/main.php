<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\structural\Adapter;

class main
{

    private IConexionSQL $conexion;

    public function __construct()
    {
        $this->conexion = new AdaptadorDB( new ConexionMongoDB() );

        $this->conexion->conexion();

        $resultado = $this->conexion->runQuery();

        echo $resultado;
    }
}