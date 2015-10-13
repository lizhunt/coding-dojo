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
 	public function remove($val)
 	{
   		//lets start by checking if the node we want to remove is the head
   		if($this->head->value == $val)
   		{
      		//its the head! lets change the head pointer
      		$this->head = $this->head->next;
   		}
   		else
   		{
      		//lets find the node and make sure we dont hit the end of the node list
      		$current = $this->head;
      		while($current->next->value != $val && $current->next)
      	{
        	//move our pointer forward
        	$current = $current->next;
      	}
      		// we either made it to the end or found our node, either way we can change the pointers!
      		//create a temp to hold onto whatever is ahead of the node we found
      		$temp = $current->next->next;
      		
      		//now set our current node's next to the node thats on the other side of the node we want to remove
      		$current->next = $temp;
   		}
 	}
 	public function find($val)
 	{
   		//lets start by setting a temp that will navigate the whole Linked List for us
   		$current = $this->head;
   		
   		//lets start traversing the Linked List
   		while($current != null)
   		{
      		//lets check to see if the current node we are at is the one we are trying to find
      		if($current->value == $val)
      		{
          		//Hey it is! lets return that node!
          		return $current;
      		}
      		$current = $current->next;
   		}
  		 //uh oh, our while loop broke meaning we ran out of nodes to check, lets just return false...
   		return false;
 	}
}

// Execute new function to add nodes to linked list
$newList = new SinglyLinkedList();
$newList->add(1);
$newList->add(2);
$newList->add(3);
$newList->add(4);
$newList->add(5);
$newList->remove(1);
$newList->remove(5);

var_dump($newList);
var_dump($newList->find(3));

?>