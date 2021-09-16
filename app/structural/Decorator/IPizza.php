<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\structural\Decorator;



interface IPizza
{
    public function descripcion(): string;
    public function precio(): float;
}