<?php

use PHPUnit\Framework\TestCase;
require 'unit\functions.php';

class FunctionTest extends TestCase{

    public function testAddReturnsTheCorrectSum(){
        $this->assertEquals(6, add(3, 3));
        $this->assertEquals(8, add(3, 5));
    }  

    public function testAddDoesNotReturnTheIncorrectSum(){
        $this->assertNotEquals(5, add(3,9));
    }
}



?>