<?php

namespace SOLID\OpenClosedPrinciple\adherence\Example1;

class ElectronicsShipping implements IShipping
{


    public function implement($price)
    {
        return $price * 0.5;
    }
}