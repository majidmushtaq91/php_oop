<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 10/24/14
 * Time: 6:48 PM
 */

class Books {

    private $title;
    private $author;

    function __construct($title='N/A', $author='N/A') {

    }

    function setTitle($title){
        $this->title = $title;
    }

    function getTitle() {
        return $this->title;
    }

    function setAuthor($author) {
        $this->author = $author;
    }

    function getAuthor(){
        return $this->author;
    }

} 