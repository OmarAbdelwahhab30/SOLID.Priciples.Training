<?php

namespace SOLID\InterfaceSegregationPrinciple;

use SOLID\OpenClosedPrinciple\Example2\IVehicle;

class Car implements Vehicle,IEnjoy
{
    public function move()
    {
        echo "car move";
    }
    public function stop()
    {
        echo "car stop";
    }

    public function playRadio()
    {
        echo "car playRadio";
    }

    public function rewind()
    {
        echo "car rewind";
    }

    public function pause()
    {
        echo "car pause";
    }

}