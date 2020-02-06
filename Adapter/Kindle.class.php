<?php
namespace Adapter;

class Kindle implements EBookInterface
{
    public function pressStart()
    {
        echo "打开电子书" . "\n";
    }

    public function pressNext()
    {
        echo "电子书翻页" . "\n";
    }
}