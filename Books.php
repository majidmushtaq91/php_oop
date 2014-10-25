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
        $this->title = $title;
        $this->author = $author;
    }

    public function __destruct(){
        echo 'Destroyed';
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author){
        $this->author = $author;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

} 