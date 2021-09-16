<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\structural\Proxy;

interface IServicio
{

    public function leer();
    public function escribir();
    public function modificar();
    public function eliminar();
}