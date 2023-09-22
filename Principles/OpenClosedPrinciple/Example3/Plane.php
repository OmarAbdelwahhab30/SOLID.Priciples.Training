<?php

namespace SOLID\OpenClosedPrinciple\Example3;

class Plane extends Vehicle implements IVehicle
{
    public function __construct()
    {
        $this->setMovable(new SkyMoving());
    }
}