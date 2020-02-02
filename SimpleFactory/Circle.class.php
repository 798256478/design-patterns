<?php
namespace SimpleFactory;

/*
 * 实现类
 * 画圆
 */
class Circle implements IShape
{
    public function draw()
    {
        return "画一个圆形";
    }
}