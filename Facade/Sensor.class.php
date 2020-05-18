<?php
namespace Facade;

class Sensor
{
    public function activate()
    {
        echo "启动感应器 \n";
    }

    public function deactivate()
    {
        echo "关闭感应器 \n";
    }
}