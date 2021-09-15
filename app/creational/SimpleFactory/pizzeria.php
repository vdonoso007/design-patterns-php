<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\creational\SimpleFactory;

class pizzeria
{

    public function pizzaPequeña()
    { 
        return new pizza(6);
        //echo `Pizaa pequeña ${$pizza}`;
    }

    public function pizzaMediana()
    {
        return new pizza(8);
        //echo `Pizaa pequeña ${$pizza}`;
    }

    public function pizzaGrande()
    {
        return new pizza(12);
        //echo `Pizaa pequeña ${$pizza}`;
    }
}