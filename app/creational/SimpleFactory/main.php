<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\creational\SimpleFactory;

class main
{

    private pizza $pizzaP;
    private pizza $pizzaM;
    private pizza $pizzaG;

    public function __construct()
    {
        $pizzeria = new pizzeria();
        $this->pizzaP = $pizzeria->pizzaPequeña();

        $this->pizzaM = $pizzeria->pizzaMediana();

        $this->pizzaG = $pizzeria->pizzaGrande();
        /*$pizzeria->pizzaMediana();
        $pizzeria->pizzaGrande();*/

        echo $this->pizzaP;
        echo $this->pizzaM;
        echo $this->pizzaG;
    }
}