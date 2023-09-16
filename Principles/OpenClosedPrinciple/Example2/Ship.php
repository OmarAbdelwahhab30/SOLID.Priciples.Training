<?php

namespace SOLID\OpenClosedPrinciple\Example2;

class Ship extends Vehicle implements IVehicle
{

    public function move()
    {
        return "Iam a ship and moving on the sea.";
    }
}
{

}