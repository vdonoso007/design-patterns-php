<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\structural\Decorator;

class QuesoExtra implements IPizza
{

    private IPizza $pizza;

    public function __construct(IPizza $pizza)
    {
        $this->pizza = $pizza;
    }

    public function descripcion(): string
    {
        return $this->pizza->descripcion(). " ". " queso extra";
    }

    public function precio(): float
    {
        return $this->pizza->precio() + 2;
    }
}