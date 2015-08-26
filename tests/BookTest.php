<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Book.php";

    $server = 'mysql:host=localhost;dbname=card_catalog';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class BookTest extends PHPUnit_Framework_TestCase
    {
        // tests whether a book can be added to the DB
        function testGetBookName()
        {
            $book_name = "Call of the Wild";
            $test_book = new Book($book_name);

            $result = $test_book->getBookName();

            $this->assertEquals($book_name, $result);
        }
    }

?>
