<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\creational\SimpleFactory;

class pizza 
{
    private int $porciones;


    public function __construct(int $porciones)
    {
        $this->porciones = $porciones;
    }

    
    public function porciones(): int
    {
        return $this->porciones;
    }

    public function __toString()
    {
        return "Cantidad de rebanadas ".(string) $this->porciones;
    }
}