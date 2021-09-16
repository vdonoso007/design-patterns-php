<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\structural\Adapter;

interface IConexionNoSQL
{
    public function conexion(): void;

    public function executeSentence(): string;

}