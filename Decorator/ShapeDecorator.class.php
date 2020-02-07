<?php
namespace Decorator;

abstract class ShapeDecorator implements Shape
{
    protected $decoratorShape;

    public function __construct($shape)
    {
        $this->decoratorShape = $shape;
    }
}