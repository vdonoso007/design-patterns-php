<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\creational\FactoryMethod;

class PizzeriaVD implements IPizzeria
{

    public function crearPizza(string $tipo): pizza
    {
        
        if ($tipo == "Pepperoni")
        {
            return new pizza(8, "Pepperoni");
        }

        if ($tipo == "Hawaiana")
        {
            return new pizza(8, "Hawaiana");
        }

        if ($tipo == "Pepperoni Orilla Rellena")
        {
            return new PizzaOrillaRellena(12, "Pepperoni");
        }

        return null;
    }

}