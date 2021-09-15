<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\creational\FactoryMethod;

class pizza 
{
    private int $porciones;
    private string $especialidades;

    public function __construct(int $porciones, string $especialidades)
    {
        $this->porciones = $porciones;
        $this->especialidades = $especialidades;
    }

    
    public function porciones(): int
    {
        return $this->porciones;
    }

    public function __toString()
    {
        return "Cantidad de rebanadas ".(string) $this->porciones. " especialidad ".$this->especialidades;
    }
}