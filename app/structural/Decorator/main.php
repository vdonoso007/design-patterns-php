<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\structural\Decorator;

class main
{

    //private PizzeriaVD $vd;

    public function __construct()
    {
        $pizzaPeperoni = new QuesoExtra( new PizzaPeperoni() );

        echo $pizzaPeperoni->descripcion();
        echo $pizzaPeperoni->precio();

        $pizzaHawaiana = new PizzaOrillaRellena( new QuesoExtra( new PizzaHawaiana() ) );

        echo $pizzaHawaiana->descripcion();
        echo $pizzaHawaiana->precio();

        //Queso extra 2usd = 10
        //OrillaRellena de queso, 4usd

    }
}