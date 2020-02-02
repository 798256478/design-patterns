<?php
namespace AbstractFactory\Json;

use AbstractFactory\Text as BaseText;

/*
 * json组件创建文本的具体类
 */
class Text extends BaseText
{
    public function render()
    {
        return json_encode(array('content' => $this->text));
    }
}