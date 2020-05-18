<?php
namespace Facade;

class Facade
{
    private $camera;
    private $sensor;

    public function __construct()
    {
        $this->camera = new Camera();
        $this->sensor = new Sensor();
    }

    public function activate()
    {
        $this->camera->turnOn();
        $this->sensor->activate();
    }

    public function deactivate()
    {
        $this->camera->turnOff();
        $this->sensor->deactivate();
    }
}