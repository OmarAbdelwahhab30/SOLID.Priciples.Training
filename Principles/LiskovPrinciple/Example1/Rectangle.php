<?php
namespace SOLID\LiskovPrinciple\Example1;
class Rectangle extends Shape implements IShape
{

    public function __construct($height,$width)
    {
        $this->setHeight($height);
        $this->setWidth($width);
    }

    public function area()
    {
        echo $this->getWidth() * $this->getHeight();
    }

}