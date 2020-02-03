<?php
namespace FactoryMethod;

class ItalianFactory extends FactoryMethod
{
    protected function createVehicle($type)
    {
        switch ($type){
            case parent::CHEAP:
                return new Bicycle();
                break;
            case parent::FAST;
                return new Ferrari();
                break;
            default:
                return null;
        }
    }
}