<?php

namespace Composite;

abstract class CompanyBase
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    abstract function add(CompanyBase $c);

    abstract function remove(CompanyBase $c);

    abstract function show($deep);

    abstract function work($deep);
}