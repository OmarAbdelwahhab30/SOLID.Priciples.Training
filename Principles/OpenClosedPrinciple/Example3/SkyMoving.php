<?php

namespace SOLID\OpenClosedPrinciple\Example3;

class SkyMoving implements IMove
{

    public function move()
    {
        echo "Iam flying in the sky";
    }
}