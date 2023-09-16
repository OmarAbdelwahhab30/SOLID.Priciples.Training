<?php

namespace SOLID\OpenClosedPrinciple\Example2;

class Bus extends Vehicle implements IVehicle
{

    public function move()
    {
        echo "Iam a Bus and moving on the streets";
    }
}