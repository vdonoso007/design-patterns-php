<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\creational\FactoryMethod;

class main
{

    private PizzeriaVD $vd;

    public function __construct()
    {
        $this->vd = new PizzeriaVD();
        $pizzaPeperoni = $this->vd->crearPizza("Pepperoni");
        $pizzaHawaiana = $this->vd->crearPizza("Hawaiana");
        $pizzaOrillaRellena = $this->vd->crearPizza("Pepperoni Orilla Rellena");

        echo $pizzaPeperoni;
        echo $pizzaHawaiana;
        echo $pizzaOrillaRellena;
    }
}