<?php
/**
 * Created by PhpStorm.
 * User: majid
 * Date: 10/24/14
 * Time: 1:43 PM
 */

require_once('../example.php');


class exampleTest extends PHPUnit_Framework_TestCase {

    private $calculator;
    private $firstNumber;
    private $secondNumber;

    protected function setUp(){
       // parrent::setUp();
        $this->calculator = new Calculators();
        $this->firstNumber = 3;
        $this->secondNumber = 2;

    }

    function testItCanAddTwoNumbers () {

        $this->assertEquals(5, $this->calculator->add($this->firstNumber, $this->secondNumber));
    }

    function testItCanMultiplyTwoNumbers(){

       $this->assertEquals(6, $this->calculator->multiply($this->firstNumber, $this->secondNumber));
    }
}
 