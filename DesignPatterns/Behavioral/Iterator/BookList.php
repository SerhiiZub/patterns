<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 26.09.17
 * Time: 9:21
 */

namespace DesignPatterns\Behavioral\Iterator;


class BookList implements \Countable, \Iterator
{
    /**
     * @var Book[]
     */
    private $books = [];

    /**
     * @var int
     */
    private $currentIndex = 0;

    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }

    public function removeBook(Book $bookToRemove)
    {
        foreach ($this->books as $key => $book){
            if ($book->getAuthorAndTitle() === $bookToRemove->getAuthorAndTitle()){
                unset($this->books[$key]);
            }
        }
        $this->books = array_values($this->books);
    }

    /**
     * @return Book
     */
    public function current(): Book
    {
        return $this->books[$this->currentIndex];
    }

    public function next()
    {
        $this->currentIndex++;
    }

    /**
     * @return int
     */
    public function key(): int
    {
        return $this->currentIndex;
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
       return isset($this->books[$this->currentIndex]);
    }

    public function rewind()
    {
        $this->currentIndex = 0;
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->books);
    }

}