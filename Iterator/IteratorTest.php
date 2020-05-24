<?php
spl_autoload_register(function ($className){
    $className = str_replace('\\', '/', $className);
    include $className.".class.php";
});

use Iterator\Book;
use Iterator\BookList;
use Iterator\BookListIterator;

$bookList = new BookList();
$bookList->addBook(new Book('Learning PHP Design Patterns', 'William Sanders'));
$bookList->addBook(new Book('Professional Php Design Patterns', 'Aaron Saray'));
$bookList->addBook(new Book('Clean Code', 'Robert C. Martin'));

$iterator = new BookListIterator($bookList);

while ($iterator->valid()) {
    echo $iterator->current()->getAuthorAndTitle() . "\n";
    $iterator->next();
}
