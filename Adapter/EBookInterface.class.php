<?php
namespace Adapter;

/*
 * 电子书接口
 */
interface EBookInterface
{
    // 电子书打开
    public function pressStart();

    // 电子书翻页
    public function pressNext();
}