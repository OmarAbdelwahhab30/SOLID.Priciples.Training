<?php

namespace SOLID\OpenClosedPrinciple\Example3;

class Bus extends Vehicle implements IVehicle
{

    public function __construct()
    {
        $this->setMovable(new RoadsMoving());
    }


}