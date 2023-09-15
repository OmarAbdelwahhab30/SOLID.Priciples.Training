<?php

namespace SOLID\OpenClosedPrinciple\Violation;

class Product {

    /**
     * @var
     */
    private $weight;
    /**
     * @var
     */
    private $dimensions;
    /**
     * @var
     */
    private $type;

    /**
     * @var
     */
    private $price;

    /**
     * @param $weight
     * @param $dimensions
     * @param $type
     */
    public function __construct($weight, $dimensions, $type) {
        $this->weight = $weight;
        $this->dimensions = $dimensions;
        $this->type = $type;
    }

    /**
     * @return float|int
     */
    public function calculateShipping(): float|int
    {
        if ($this->type === 'electronics') {
             return 0.5  * $this->price; // $20 shipping cost for electronics
        } elseif ($this->type === 'clothing') {
            return 0.2  * $this->price; // $20 shipping cost for electronics
        }
        return 0;
    }
}