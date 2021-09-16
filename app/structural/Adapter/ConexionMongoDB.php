<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\structural\Adapter;

class  ConexionMongoDB implements IConexionNoSQL
{

    public function conexion(): void
    {
        echo "Conexion con MongoDB";
    }

    public function executeSentence(): string
    {
        return "Consulta MongoDB";
    }

}