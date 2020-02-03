<?php
namespace FactoryMethod;

class Bicycle implements VehicleInterface
{
    public function getColor()
    {
        return "color is green";
    }
}