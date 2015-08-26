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

        function setBookTitle($new_book_title)
        {
            $this->book_title = (string) $new_book_title;
        }

    }

?>
