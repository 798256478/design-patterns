<?php
namespace AbstractFactory;

/*
 * 创建文本产品的抽象类
 */
abstract class Text implements MediaInterface
{
    protected $text;

    public function __construct($text)
    {
        $this->text = (string) $text;
    }
}