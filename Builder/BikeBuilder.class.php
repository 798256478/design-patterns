<?php
namespace Builder;

use Builder\Parts\Bike;
use Builder\Parts\Wheel;
use Builder\Parts\Engine;

class BikeBuilder implements BuilderInterface
{
    protected $bike;

    public function createVehicle()
    {
        $this->bike = new Bike();
    }

    public function addWheel()
    {
        $this->bike->setPart('forwardWheel', new Wheel());
        $this->bike->setPart('rearWheel', new Wheel());
    }

    public function addEngine()
    {
        $this->bike->setPart('engine', new Engine());
    }

    public function addDoors()
    {

    }

    public function getVehicle()
    {
        return $this->bike;
    }
}