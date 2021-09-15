<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\creational\Singleton;

class ConexionDB
{

    private static ConexionDB $conexion;

    public string $host;

    private function  __construct() {}

    public static function obtenerConexion(): self
    {
        if (is_null(self::$conexion))
        {
            self::$conexion = new ConexionDB();
        }
        return self::$conexion;
    }
}