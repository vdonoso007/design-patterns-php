<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\creational\AbstractFactory;

interface IAbstractFactory
{
    public function crearComputadora(): IComputadora;
    public function crearTablet(): ITablet;
}