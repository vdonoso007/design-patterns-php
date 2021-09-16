<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\structural\Adapter;

interface IConexionSQL
{
    public function conexion(): void;

    public function runQuery(): string;
}