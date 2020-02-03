<?php
namespace FactoryMethod;

class Ferrari implements VehicleInterface
{
    public function getColor()
    {
        return "color is blue";
    }
}