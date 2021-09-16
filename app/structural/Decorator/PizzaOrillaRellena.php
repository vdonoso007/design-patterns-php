<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\structural\Decorator;


class PizzaOrillaRellena implements IPizza
{

    private IPizza $pizza;

    public function __construct(IPizza $pizza)
    {
        $this->pizza = $pizza;
    }

    public function descripcion(): string
    {
        return $this->pizza->descripcion()." ". "Orilla rellena de queso";
    }

    public function precio(): float
    {
        return $this->precio()+4;
    }
}