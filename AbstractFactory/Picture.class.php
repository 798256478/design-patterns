<?php
namespace AbstractFactory;

/*
 * 创建图片产品的抽象类
 */
abstract class Picture implements MediaInterface
{
    protected $path;
    protected $name;

    public function __construct($path, $name = '')
    {
        $this->name = (string) $name;
        $this->path = (string) $path;
    }
}