<?php


namespace AbstractFactory\Html;

use AbstractFactory\Picture as BasePicture;

/*
 * html组件创建图片的具体类
 */
class Picture extends BasePicture
{
    public function render()
    {
        return sprintf('<img src="%s" title="%s">', $this->path, $this->name);
    }
}