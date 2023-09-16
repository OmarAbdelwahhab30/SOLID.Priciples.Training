<?php

namespace SOLID\OpenClosedPrinciple\Example1;

class ElectronicsShipping implements IShipping
{


    public function implement($price)
    {
        return $price * 0.5;
    }
}