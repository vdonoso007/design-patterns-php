<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\structural\Proxy;

class ProxyServicio implements IServicio
{
    private IServicio $servicio;

    public function __construct(IServicio $servicio)
    {
        $this->servicio = $servicio;
    }

    public function leer()
    {
        $this->servicio->leer();
    }

    public function escribir()
    {
        
    }

    public function modificar()
    {
        
    }

    public function eliminar()
    {
        
    }
}