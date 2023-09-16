<?php

namespace SOLID\OpenClosedPrinciple\Example1;

class ClothingShipping implements IShipping
{

    public function implement($price): float
    {
        return $price * 0.2;
    }
}