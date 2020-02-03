<?php
namespace Prototype;

class BarBookPrototype extends BookPrototype
{
    protected $category = "Bar";

    public function __clone()
    {

    }
}