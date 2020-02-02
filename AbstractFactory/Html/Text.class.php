<?php
namespace AbstractFactory\Html;

use AbstractFactory\Text as BaseText;

/*
 * html组件创建文本的具体类
 */
class Text extends BaseText
{
    public function render()
    {
        return '<div>' . htmlspecialchars($this->text) . '</div>';
    }
}