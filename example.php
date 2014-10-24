<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 10/24/14
 * Time: 1:34 PM
 */

Class Calculators {

    function add($firstNumber, $secondNumber) {

        return $firstNumber + $secondNumber;

    }


    function multiply($first, $second) {
        //return $first * $second;
        $result = 0;

        for($i=0; $i < $second; $i++ ) {

            $result = $this->add($first, $result);
        }
        return $result;
    }

}


function deliverPizza($pizza) {

}

function bakePizza($pizza) {


}