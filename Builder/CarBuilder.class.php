<?php
namespace Builder;

use Builder\Parts\Door;
use Builder\Parts\Engine;
use Builder\Parts\Wheel;
use Builder\Parts\Car;

class CarBuilder implements BuilderInterface
{
    protected $car;

    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }

    public function addDoors()
    {
        $this->car->setPart('rightdoor', new Door());
        $this->car->setPart('leftdoor', new Door());
    }

    public function getVehicle()
    {
        return $this->car;
    }
}