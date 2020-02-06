<?php
namespace Adapter;

/*
 * 纸质书
 */
interface PaperBookInterface
{
    // 打开书
    public function open();

    // 翻页
    public function turnPage();
}