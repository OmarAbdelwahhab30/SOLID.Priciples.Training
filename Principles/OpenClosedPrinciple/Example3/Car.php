<?php

namespace SOLID\OpenClosedPrinciple\Example3;

class Car extends Vehicle implements IVehicle
{

    public function __construct()
    {
        $this->setMovable(new RoadsMoving());
    }
}