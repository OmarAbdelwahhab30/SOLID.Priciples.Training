<?php

namespace SOLID\OpenClosedPrinciple\Example2;

class Trip
{

    public IVehicle $vehicle ;


    /**
     * @return void
     */
    public function move(): void
    {
        $this->vehicle->move();
    }

}