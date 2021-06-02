<?php

use PHPUnit\Framework\TestCase;
require "unit\User.php";

class UserTest extends TestCase{
    
    /**
     * In the function the name of the test case should be always start with
     * test
     * if not we can use "@test"  
     */
    public function testReturnsFullName(){
        $userObject = new User;

        $userObject->firstName = "Sainath";
        $userObject->surname = "Akula";

        echo $userObject->getFullName();

        $this->assertEquals("Sainath Akula", $userObject->getFullName());

    }

    /**
     * @test
     *
     */
    public function FullNameIsEmptyByDefault(){
        $userObj = new User;

        $this->assertEquals('', $userObj->getFullName());
    }
}

?>