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

        // tests whether a book title can be added to the DB
        function testGetBookTitle()
        {
            //arrange
            $book_title = 'Call of the Wild';
            $test_book_title = new Book($book_title);
            var_dump($book_title);

            //act
            $result = $test_book_title->getBookTitle();

            //assert
            $this->assertEquals($book_title, $result);
        }

    }

?>
