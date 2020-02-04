<?php
namespace Multion;

class Mysql extends Multion
{
    public function __construct($cfg)
    {
        echo serialize($cfg);
    }
}