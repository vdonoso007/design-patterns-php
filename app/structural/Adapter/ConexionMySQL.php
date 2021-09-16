<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\structural\Adapter;

class ConexionMySQL implements IConexionSQL
{

    public function conexion(): void
    {
        echo "Conexion MySQL";
    }

    public function runQuery(): string
    {
        return "Consulta MySQL";
    }

}