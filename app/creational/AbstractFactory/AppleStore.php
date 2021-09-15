<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\creational\AbstractFactory;

class AppleStore implements IAbstractFactory
{

    public function crearComputadora(): IComputadora
    {
        return new MacBookPro();   
    }

    public function crearTablet(): ITablet
    {
        return new IPad();
    }
}