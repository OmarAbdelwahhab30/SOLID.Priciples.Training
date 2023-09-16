<?php

namespace SOLID\OpenClosedPrinciple\Example2;

class Car extends Vehicle implements IVehicle
{

    public function move(): mixed
    {
        return "Iam a Car and moving on the streets";
    }
}
{

}