<?php

namespace SOLID\LiskovPrinciple\Example1;

abstract class Shape
{

    /**
     * @var float
     */
    private float $width;
    /**
     * @var float
     */
    private float $height;

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }


    /**
     * @param float $width
     * @return void
     */
    protected function setWidth(float $width): void
    {
        $this->width = $width;
    }

    /**
     * @param float $height
     * @return void
     */
    protected function setHeight(float $height): void
    {
        $this->height = $height;
    }
}