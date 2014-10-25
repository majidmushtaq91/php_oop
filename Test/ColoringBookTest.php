<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 10/25/14
 * Time: 2:44 PM
 */

require_once __DIR__. '/../Novel.php';
require_once __DIR__. '/../Books.php';
require_once __DIR__. '/../ColoringBook.php';

class ColoringBookTest extends PHPUnit_Framework_TestCase {


    function testColoringBook() {

        $title = 'Rainbow';
        $coloringBook = new coloringBook($title);
        $range = range(2,4);
        $coloringBook->setRecommendedAge($range);


        $this->assertEquals($range, $coloringBook->getRecommendedAge());
        $this->assertEquals($title, $coloringBook->getTitle());
        $this->assertEquals('Not Required !', $coloringBook->getAuthor());
    }
}
