<?php
namespace Iterator;

class BookListIterator implements \Iterator
{

    private $bookList;

    protected $currentBook = 0;

    public function __construct(BookList $bookList)
    {
        $this->bookList = $bookList;
    }

    /**
     * @inheritDoc
     */
    public function current()
    {
        return $this->bookList->getBook($this->currentBook);
    }

    /**
     * @inheritDoc
     */
    public function next()
    {
        $this->currentBook++;
    }

    /**
     * @inheritDoc
     */
    public function key()
    {
        return $this->currentBook;
    }

    /**
     * @inheritDoc
     */
    public function valid()
    {
        return null !== $this->bookList->getBook($this->currentBook);
    }

    /**
     * @inheritDoc
     */
    public function rewind()
    {
        $this->currentBook = 0;
    }
}