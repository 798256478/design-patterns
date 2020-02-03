<?php
namespace FactoryMethod;

class GermanFactory extends FactoryMethod
{
    protected function createVehicle($type)
    {
        switch ($type){
            case parent::CHEAP:
                return new Bicycle();
                break;
            case parent::FAST;
                $obj = new Porsche();
                $obj->addTuningAMG();

                return $obj;
                break;
            default:
                return null;
        }
    }
}