<?php
namespace AbstractFactory\Json;

use AbstractFactory\Picture as BasePicture;

/*
 * json组件创建图片的具体类
 */
class Picture extends BasePicture
{
    public function render()
    {
        return json_encode(array('title' => $this->name, 'path' => $this->path));
    }
}