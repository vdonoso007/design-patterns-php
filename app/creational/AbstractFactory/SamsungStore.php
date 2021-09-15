<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\creational\AbstractFactory;

class SamsungStore implements IAbstractFactory
{

    public function crearComputadora(): IComputadora
    {
        return new QX410();   
    }

    public function crearTablet(): ITablet
    {
        return new TabS3();   
    }
}