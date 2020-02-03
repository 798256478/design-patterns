<?php
namespace FactoryMethod;

class Porsche implements VehicleInterface
{
    private $amg = '';

    public function getColor()
    {
        return "color is red" . $this->amg;
    }

    public function addTuningAMG()
    {
        $this->amg = " amg is porsche";
    }
}