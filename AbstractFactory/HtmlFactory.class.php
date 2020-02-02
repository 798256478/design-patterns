<?php
namespace AbstractFactory;
use AbstractFactory\Html\Picture;
use AbstractFactory\Html\Text;

/*
 * 创建html组件的具体工厂类
 */
class HtmlFactory extends AbstractFactory
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