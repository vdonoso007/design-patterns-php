<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\structural\Decorator;

class PizzaPeperoni implements IPizza
{

    public function descripcion(): string
    {
        return "Pizza de Peperoni";
    }

    public function precio(): float
    {
        return 8.0;
    }
}