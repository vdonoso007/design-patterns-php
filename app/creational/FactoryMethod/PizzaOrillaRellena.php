<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\creational\FactoryMethod;

class PizzaOrillaRellena extends pizza
{

    public function __construct(int $porciones, string $especialidad)
    {
        parent::__construct($porciones, $especialidad);
        
    }
}