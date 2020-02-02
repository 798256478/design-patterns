<?php
namespace AbstractFactory;

/*
 * 抽象工厂类
 *
 */
abstract class AbstractFactory
{
    abstract public function createText($content);

    abstract public function createPicture($path, $name);
}
