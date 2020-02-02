<?php
namespace SimpleFactory;

/*
 * 实现类
 * 画方
 */
class Square implements IShape
{
    public function draw()
    {
        return "画一个正方形";
    }
}