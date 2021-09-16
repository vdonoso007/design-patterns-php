<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\structural\Proxy;

class main
{

    public function __construct()
    {
        $servicio = new Servicio();

        $servicio->leer();
        $servicio->escribir();
        $servicio->modificar();
        $servicio->eliminar();
    }
}