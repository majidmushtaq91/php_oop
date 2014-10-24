<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 10/24/14
 * Time: 7:15 PM
 */

class Authors {

    private $name;

    function setAuthor($name) {
        $this->name = $name;
    }

    function getAuthor(){
        return $this->name;
    }
}
