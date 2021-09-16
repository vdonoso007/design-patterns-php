<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\structural\Proxy;

class Servicio implements IServicio
{

    public function leer()
    {
        echo "leyendo..";
    }

    public function modificar()
    {
        echo "modificando..";
    }

    public function escribir()
    {
        echo "escribiendo"   ;
    }

    public function eliminar()
    {
        echo "eliminando"   ;
    }
}