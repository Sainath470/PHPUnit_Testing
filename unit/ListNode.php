<?php
class ListNode{
    /**
     * global variables declared 
     *
     * @var $data contains the data 
     * @var $next contains the pointer pointing to the next node's data
     */
    public $data = NULL;
    public $next = NULL;

    public function __construct($data){
        $this-> data = $data;
        $this->next = NULL;
    }

    function setNext($next){
        $this->next = $next;
    }

    function getNext(){
        return $this->next;
    }


    function setData($data){
        $this->data = data;
    }

    function getData(){
        return $this->data;
    }
}


?>