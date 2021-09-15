<?php

declare(strict_types=1);

namespace Design\Patterns\Apps\creational\Builder;

class main
{

    public function __construct()
    {
        $codi = Usuario::Make("codi", "Facilito")->Build();
        echo $codi;        
    }
}