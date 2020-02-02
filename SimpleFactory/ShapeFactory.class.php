<?php
namespace SimpleFactory;

/*
 * 简单工厂类
 */
class ShapeFactory {

    const CIRCLE = 'circle';
    const SQUARE = 'square';

    private $shape;

    public function __construct($shape)
    {
        $this->shape = $shape;
    }

    /*
     * 根据初始化传参，实例化不同的实现类
     */
    public function getShape()
    {
        switch ($this->shape){
            case self::CIRCLE:
                return new Circle();
                break;
            case self::SQUARE:
                return new Square();
                break;
            default:
                return null;
        }
    }
}