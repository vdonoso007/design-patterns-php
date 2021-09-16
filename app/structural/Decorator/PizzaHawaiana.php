<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\structural\Decorator;

class PizzaHawaiana implements IPizza
{

    public function descripcion(): string
    {
        return "Pizza Hawaiana";
    }

    public function precio(): float
    {
        return 8.0;
    }
}