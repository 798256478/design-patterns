<?php
namespace Iterator;

class BookList implements \Countable
{
    private $books;

    public function getBook($bookNumberToGet)
    {
        if(isset($this->books[$bookNumberToGet])) {
            return $this->books[$bookNumberToGet];
        }

        return null;
    }

    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }

    public function removeBook(Book $bookToRemove)
    {
        foreach ($this->books as $key => $book) {
            if($book->getAuthorAndTitle() == $bookToRemove->getAuthorAndTitle()){
                unset($this->books[$key]);
            }
        }
    }

    /**
     * @inheritDoc
     */
    public function count()
    {
        return $this->count($this->books);
    }
}