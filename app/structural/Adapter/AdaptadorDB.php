<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\structural\Adapter;

class AdaptadorDB implements IConexionSQL
{
    private IConexionNoSQL $noSQL;

    public function __construct(IConexionNoSQL $noSQL)
    {
        $this->noSQL = $noSQL;
    }

    public function conexion(): void
    {
        $this->noSQL->conexion();
    }

    public function runQuery(): string
    {
        return $this->noSQL->executeSentence();
    }
}