<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 10/24/14
 * Time: 7:17 PM
 */
require_once __DIR__ . '/../Authors.php';

class AuthorTest extends PHPUnit_Framework_TestCase {

    function testDifferentAuthors() {

    $author1 = $this->createAuthor();
    $name = 'Majid Khan';
    $author1->setAuthor($name);

    $this->assertEquals($name, $author1->getAuthor());

    $author2 = $this->createAuthor();
    $name2 = 'SAM';
    $author2->setAuthor($name2);

    $this->assertEquals($name2, $author2->getAuthor());


    }

    function createAuthor(){
        return new Authors();
    }
}
 