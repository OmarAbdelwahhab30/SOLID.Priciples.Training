<?php

namespace SOLID\OpenClosedPrinciple\Example2;

class Plane extends Vehicle implements IVehicle
{

    public function move()
    {
        return "Iam a Plane and moving through sky";
    }
}
{

}