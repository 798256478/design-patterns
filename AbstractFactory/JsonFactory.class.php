<?php
namespace AbstractFactory;

use AbstractFactory\Json\Picture;
use AbstractFactory\Json\Text;

/*
 * 创建json组件的具体工厂类
 */
class JsonFactory extends AbstractFactory
{
    public function createPicture($path, $name)
    {
        return new Picture($path, $name);
    }

    public function createText($content)
    {
        return new Text($content);
    }
}