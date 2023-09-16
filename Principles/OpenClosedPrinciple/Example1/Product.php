<?php

namespace SOLID\OpenClosedPrinciple\Example1;

class Product {

    /**
     * @var
     */
    private mixed $price;
    /**
     * @var
     */
    private mixed $weight;
    /**
     * @var
     */
    private mixed $dimensions;

    /**
     * @return mixed
     */
    public function getPrice(): mixed
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice(mixed $price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getWeight(): mixed
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight(mixed $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getDimensions(): mixed
    {
        return $this->dimensions;
    }

    /**
     * @param mixed $dimensions
     */
    public function setDimensions(mixed $dimensions): void
    {
        $this->dimensions = $dimensions;
    }

    /**
     * @return mixed
     */
    public function getType(): mixed
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType(mixed $type): void
    {
        $this->type = $type;
    }
    /**
     * @var
     */
    private mixed $type;


    /**
     * @param IShipping $obj
     * @return float
     */
    public function calculateShipping(IShipping $obj): float
    {
        return $obj->implement($this->price);
    }
}