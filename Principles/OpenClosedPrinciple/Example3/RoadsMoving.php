<?php

namespace SOLID\OpenClosedPrinciple\Example3;

class RoadsMoving implements IMove
{

    public function move()
    {
        echo "Iam moving on the roads";
    }
}