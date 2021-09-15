<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\creational\AbstractFactory;

class main
{


    public function __construct()
    {
        $samsung = new SamsungStore();
        $apple = new AppleStore();

        $mac = $apple->crearComputadora();
        $ipad = $apple->crearTablet();

        $qx = $samsung->crearComputadora();
        $s3 = $samsung->crearTablet();
    }
}