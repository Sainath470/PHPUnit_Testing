<?php

Class User{
    public $firstName;
    public $surname;

    public function getFullName(){
        return trim("$this->firstName $this->surname");
    }
}
?>