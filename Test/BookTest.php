<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 10/24/14
 * Time: 6:33 PM
 */
require_once __DIR__. '/../Books.php';

class BookTest extends PHPUnit_Framework_TestCase {


    function testDifferentBooksCanHaveDifferentTitle(){


        $book2 = $this->createBooks();
        $title2 = 'The Book for Java';
        $book2->setTitle($title2);

       // $this->assertEquals($title2, $book2->getTitle());

    }

    function WeCanCreateNewBookWithTheInformationWeWant() {

        $title = 'The Title';
        $author = 'Majid Khan';
        $book = new Books($title, $author);
        $this->assertEquals($title, $book->getTitle());
        $this->assertEquals($author, $book->getAuthor());
    }

    function createBooks() {
        return new Books;
    }
}
 