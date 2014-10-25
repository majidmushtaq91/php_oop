<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 10/25/14
 * Time: 11:27 AM
 */
require_once __DIR__. '/Test/BookTest.php';

class Novel extends Books{

    private $category;


    public function setCategory($category) {
        $this->category = $category;
    }

    public function getCategory(){
        return $this->category;
    }
} 