<?php

use PHPUnit\Framework\TestCase;
require "unit\LinkedList.php";

class LinkedListTest extends TestCase{

    public function testInsertNodeShouldReturnCountOfNodes(){
        $linkedList = new LinkedList();
        $linkedList->insert(10);
        $linkedList->insert(20);
        $linkedList->insert(30);
        $this->assertEquals(3, $linkedList->countNodes());
    }

    public function testInsertNodeShouldReturnHeadOfLinkedList(){
        $linkedList = new LinkedList();
        $linkedList->insert(10);
        $linkedList->insert(20);
        $linkedList->insert(30);
        $this->assertEquals(10, $linkedList->getHead());
    }

    public function testInsertNodeShouldReturnTailOfLinkedList(){
        $linkedList = new LinkedList();
        $linkedList->insert(10);
        $linkedList->insert(20);
        $linkedList->insert(30);
        $this->assertEquals(30, $linkedList->getTail());
    }

    public function testSearchShouldReturnDeletedNodeInLinkedList(){
        $linkedList = new LinkedList();
        $linkedList->insert(90);
        $linkedList->insert(30);
        $linkedList->insert(60);
        $linkedList->insert(20);
       
        $result = $linkedList->searchAndDelete(60);
        $this->assertEquals(60, $result);
    }

    

    
}

?>