<?php

    class Book
    {
        private $book_title;
        private $id;

        function __construct($book_title, $id = null)
        {
            $this->book_title = $book_title;
            $this->id = $id;
        }

        function getBookTitle()
        {
            return $this->book_title;
        }

    }

?>
