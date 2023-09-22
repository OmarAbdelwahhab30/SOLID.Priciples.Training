<?php

namespace SOLID\LiskovPrinciple\Example1;

class Square extends Shape implements IShape
{
    public function __construct($side)
    {
        $this->setWidth($side);
        $this->setHeight($side);
    }

    public function area()
    {
        echo $this->getWidth() * $this->getHeight();
    }
}