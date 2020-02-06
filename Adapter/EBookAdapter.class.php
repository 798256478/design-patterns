<?php
namespace Adapter;

/*
 * 电子书适配类
 */
class EBookAdapter implements PaperBookInterface
{
    protected $eBook;

    public function __construct($ebook)
    {
        $this->eBook = $ebook;
    }

    public function open()
    {
        $this->eBook->pressStart();
    }

    public function turnPage()
    {
        $this->eBook->pressNext();
    }
}