<?php
namespace Decorator;

class RedShape extends ShapeDecorator
{
    public function draw()
    {
        $this->decoratorShape->draw();
        $this->setRedColor();
    }

    private function setRedColor(){
        echo "color is red" . "\n";
    }
}