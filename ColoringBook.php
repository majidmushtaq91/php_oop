<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 10/25/14
 * Time: 12:13 PM
 */

class ColoringBook extends Books {

    private  $recommededAge = array();

    public function __construct($title='N/A') {

        parent::__construct($title, 'Not Required !');
    }

    public function getRecommendedAge(){
        return $this->recommededAge;
    }

    public function setRecommendedAge($recommededAge) {

        $this->recommededAge = $recommededAge;
    }

    public function setAuthor($author){
        $this->getAuthor($author);
    }
} 