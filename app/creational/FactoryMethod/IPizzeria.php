<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\creational\FactoryMethod;

use Design\Patterns\Apps\creational\FactoryMethod\pizza;

interface IPizzeria
{
    public function crearPizza(string $tipo): pizza;
}