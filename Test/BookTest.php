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
        $book1 = $this->createBooks();
        $title1 = 'The Great Book for PHP';
        $book1->setTitle($title1);

        $this->assertEquals($title1, $book1->getTitle());


        $book2 = $this->createBooks();
        $title2 = 'The Book for Java';
        $book2->setTitle($title2);

        $this->assertEquals($title2, $book2->getTitle());

    }

    function createBooks() {
        return new Books;
    }
}
 