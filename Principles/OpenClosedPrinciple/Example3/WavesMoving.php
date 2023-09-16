<?php

namespace SOLID\OpenClosedPrinciple\Example3;

class WavesMoving implements IMove
{

    public function move()
    {
        echo "Iam floating over the waves";
    }
}