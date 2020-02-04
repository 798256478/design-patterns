<?php
namespace Multion;

class Redis extends Multion
{
    public function __construct($cfg)
    {
        echo serialize($cfg);
    }
}