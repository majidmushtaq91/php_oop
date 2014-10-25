<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 10/25/14
 * Time: 11:20 AM
 */

require_once __DIR__. '/../Novel.php';
require_once __DIR__. '/../Books.php';

class NovelTest extends PHPUnit_Framework_TestCase {

    function testNovel1() {

        $title = 'The Test Lover';
        $author = 'Jhon Doe';

        $novel = new Novel($title, $author);
        $novel->setCategory('romance');


        $this->assertEquals('romance', $novel->getCategory());
        $this->assertEquals($title, $novel->getTitle());
        $this->assertEquals($author, $novel->getAuthor());
    }

}
 