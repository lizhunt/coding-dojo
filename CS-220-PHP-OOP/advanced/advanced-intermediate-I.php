<?php

Class Node{
	public function __construct($value)
 	{
  		$this->value= $value;
  		$this->next = null;
 	}
}

Class SinglyLinkedList
{
	public function __construct()
	{
		$this->head = null;
	}
	
	public function add($val)
	{
  		//return true if added correctly
  
  		//check to see if there is not a head because than we can create the head node
  		if($this->head == null)
  		{
    		//point head to that new node
    		$this->head = new Node($val);
  		}
  		else
  		{
    		//we have a head lets navigate through the Linked List till we get to the end
    		//when we reach the end we can add the new node there
    
    		//temp to help us navigate the linked list
	    	$current = $this->head;
	    
	    	//while loops are extremely skilled at looping through a linked list 
	    	while($current->next)
	    	{
	      		//move our pointer forward to the next node
	      		$current = $current->next;
	    	}
	    	//we reached the end! time to add the new node to the end
	    	$current->next = new Node($val);
  		}
 	}
}

// Execute new function to add nodes to linked list
$newList2 = new SinglyLinkedList();
$newList2->add(1);
$newList2->add(2);
$newList2->add(3);
$newList2->add(4);
$newList2->add(5);

var_dump($newList2);

?>