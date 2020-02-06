<?php
namespace Adapter;

/*
 * 纸质书实现类
 */
class Book implements PaperBookInterface
{
    public function open()
    {
        echo "打开纸质书" . "\n";
    }

    public function turnPage()
    {
        echo "纸质书翻页" . "\n";
    }
}