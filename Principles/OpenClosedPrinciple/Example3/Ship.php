<?php

namespace SOLID\OpenClosedPrinciple\Example3;

class Ship extends Vehicle implements IVehicle
{
    public function __construct()
    {
        $this->setMovable(new WavesMoving());
    }
}