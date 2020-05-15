<?php
namespace Strategy;

class Context
{
    private $strategy;

    public function __construct($strategy)
    {
        $this->strategy = $strategy;
    }

    public function getCompare($a, $b)
    {
        return $this->strategy->compare($a, $b);
    }
}