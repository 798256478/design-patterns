<?php
namespace Decorator;

class Circle implements Shape
{
    public function draw()
    {
        echo "draw Circle" . "\n";
    }
}