<?php

namespace SOLID\OpenClosedPrinciple\Example3;

use AllowDynamicProperties;

abstract class Vehicle implements IMove
{

    private IMove $movable;
    private string $color;

    /**
     * @var int
     */
    private int $maximumSpeed;

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getMaximumSpeed(): string
    {
        return $this->maximumSpeed . ' K/h';
    }

    /**
     * @param int $maximumSpeed
     */
    public function setMaximumSpeed(int $maximumSpeed): void
    {
        $this->maximumSpeed = $maximumSpeed;
    }

    public function setMovable(IMove $movable)
    {
        $this->movable = $movable;
    }
    public function move()
    {
        $this->movable->move();
    }

}