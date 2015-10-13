<?php

class Node
{
	public $next;
	public $value;
	
	public function __construct($val)
	{
		$this->value = $val;
		$this->next = null;
	}
}

class Queue
{
	public $front; // the front of our Queue
	public $rear; // the rear of our Queue
	public $maxSize; // how many elements can be in our queue
	public $count;
	
	public function __construct($val)
	{
		$this->front = null;
		$this->rear = null;
		$this->maxSize = $val;
		$this->count = 0;
	}
	
	public function enqueue($val) // it will add an element to the end of the Queue
	{
		$link = new Node($val);
        $link->next = $this->front;
        $this->front = &$link;
 
        if($this->rear == NULL)
            $this->rear = &$link;
 
        $this->count++;
	}
	
	public function dequeue() // it will remove an element from the front of the Queue
	{
		$temp = $this->front;
        $this->front = $this->front->next;
        
        if($this->front != NULL)
            $this->count--;
 
        return $temp;
	}
	
	public function front() // returns the element in the front of your Queue
	{
      	$current = $this->front;

		while($current != null)
   		{
          	return $current;
      	}
   		return false;
	}
	
	public function rear() // returns the element in the rear of your Queue
	{
		$current = $this->rear;

		while($current != null)
   		{
          	return $current;
      	}
      	return false;
	}
	
	public function isEmpty() // returns true if the Queue is empty
	{
		return ($this->front == NULL);	
	}
	
	public function isFull() // returns true if the Queue is full
	{
		if($this->count == $this->maxSize)
		{
			return TRUE;
		}
		return FALSE;
	
	}
	public function printValues()
  	{
    	$current = $this->front;
    
    	while($current)
    	{
       		echo $current->value . '<br>';
       		$current = $current->next;
    	}
  	}
}


// NOTE: did not get the same values as commented below; believe this has to do with values are dequeued, which is from the *front* of the list, as the instructions expressed


$q = new Queue(5); // instantiates the Queue class with a maxSize attribute of 5
$q->isEmpty(); // returns true
$q->enqueue(100); // Queue: 100
$q->rear(); // returns 100
$q->front(); // returns 100
$q->enqueue(20); // Queue: 100, 20
$q->enqueue(2); // Queue: 100, 20, 2
$q->dequeue(); // Queue: 20, 2
$q->enqueue(500); // Queue: 20, 2, 500
$q->enqueue(12); // Queue: 20, 2, 500, 12
$q->enqueue(30); // Queue: 20, 2, 500, 12, 30
$q->isFull(); // returns true

$q->printValues();
var_dump($q);

?>